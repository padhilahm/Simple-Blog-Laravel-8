{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts" method="get">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count() > 3)
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        @for ($i = 0; $i < 3; $i++) @if ($i==0) <div class="carousel-item active mb-2" data-bs-interval="5000">
            @elseif($i == 1)
            <div class="carousel-item mb-2" data-bs-interval="4000">
                @else
                <div class="carousel-item  mb-2">
                    @endif

                    <div class="card mb-3 text-center">
                        @if ($posts[$i]->image)
                        <div style="max-height: 150px; overflow:hidden;">
                            <img src="{{ asset('storage/'.$posts[$i]->image) }}" class="img-fluid mt-3"
                                alt="{{ $posts[$i]->category->name }}">
                        </div>

                        @else
                        <img src="https://source.unsplash.com/400x80/?{{ $posts[$i]->category->name }}"
                            class="card-img-top" alt="{{ $posts[$i]->category->name }}">
                        @endif

                        <div class="card-body">
                            <h3 class="card-title"><a href="/post/{{ $posts[$i]->slug }}"
                                    class="text-decoration-none">{{ $posts[$i]->title }}</a></h3>
                            <p>
                                <small class="text-muted">
                                    <p>By. <a href="/posts?author={{ $posts[$i]->author->username }}"
                                            class="text-decoration-none">{{ $posts[$i]->author->name }}</a>
                                        in <a href="/posts?category={{ $posts[$i]->category->slug }}"
                                            class="text-decoration-none">{{ $posts[$i]->category->name }}</a>
                                        {{ $posts[$i]->created_at->diffForHumans() }}</p>
                                </small>
                            </p>
                            <p class="card-text">{{ $posts[$i]->excerpt }}</p>

                            <a href="/post/{{ $posts[$i]->slug }}" class="text-decoration-none btn btn-primary">Read
                                more...</a>
                            <p class="card-text">

                            </p>
                        </div>
                    </div>
                </div>

                @endfor

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

    @else
    {{-- <p class="text-center fs-4">No post found.</p> --}}
    @endif

    <div class="container">

        <div class="row">
            @if ($posts->count() > 3)
            @php
            $skip = 3
            @endphp
            @else
            @php
            $skip = 0
            @endphp
            @endif

            @foreach ($posts->skip($skip) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 1, 0.445)">
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-white text-decoration-none">{{ $post->category->name }}</a></div>

                    @if ($post->image)
                    <div style="max-height: 500px; overflow:hidden;">
                        <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mt-3"
                            alt="{{ $post->category->name }}">
                    </div>

                    @else
                    <img src="https://source.unsplash.com/200x200/?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}">
                    @endif

                    <div class="card-body">
                        <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </a>
                        <p>
                            <small class="text-muted">
                                <p>By. <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a>

                                    {{ $post->created_at->diffForHumans() }}</p>
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    @if($posts->count() == 0)
    <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

    @endsection
