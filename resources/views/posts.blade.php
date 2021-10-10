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
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count() > 3)
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> --}}
    <div class="carousel-inner">
        <div class="carousel-item active mb-2" data-bs-interval="5000">
            <div class="card mb-3 text-center">
                <img src="https://source.unsplash.com/400x80/?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
                <div class="card-body">
                    <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}"
                            class="text-decoration-none">{{ $posts[0]->title }}</a></h3>
                    <p>
                        <small class="text-muted">
                            <p>By. <a href="/posts?author={{ $posts[0]->author->username }}"
                                    class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                                in <a href="/posts?category={{ $posts[0]->category->slug }}"
                                    class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                                {{ $posts[0]->created_at->diffForHumans() }}</p>
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>

                    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
                    <p class="card-text">

                    </p>
                </div>
            </div>
        </div>
        
        <div class="carousel-item mb-2" data-bs-interval="4000">
            <div class="card mb-3 text-center">
                <img src="https://source.unsplash.com/400x80/?{{ $posts[1]->category->name }}" class="card-img-top"
                    alt="{{ $posts[1]->category->name }}">
                <div class="card-body">
                    <h3 class="card-title"><a href="/post/{{ $posts[1]->slug }}"
                            class="text-decoration-none">{{ $posts[1]->title }}</a></h3>
                    <p>
                        <small class="text-muted">
                            <p>By. <a href="/posts?author={{ $posts[1]->author->username }}"
                                    class="text-decoration-none">{{ $posts[1]->author->name }}</a>
                                in <a href="/categories/{{ $posts[1]->category->slug }}"
                                    class="text-decoration-none">{{ $posts[1]->category->name }}</a>
                                {{ $posts[1]->created_at->diffForHumans() }}</p>
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[1]->excerpt }}</p>

                    <a href="/post/{{ $posts[1]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
                    <p class="card-text">

                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item  mb-2">
            <div class="card mb-3 text-center">
                <img src="https://source.unsplash.com/400x80/?{{ $posts[2]->category->name }}" class="card-img-top"
                    alt="{{ $posts[2]->category->name }}">
                <div class="card-body">
                    <h3 class="card-title"><a href="/post/{{ $posts[2]->slug }}"
                            class="text-decoration-none">{{ $posts[2]->title }}</a></h3>
                    <p>
                        <small class="text-muted">
                            <p>By. <a href="/posts?author={{ $posts[2]->author->username }}"
                                    class="text-decoration-none">{{ $posts[2]->author->name }}</a>
                                in <a href="/categories/{{ $posts[2]->category->slug }}"
                                    class="text-decoration-none">{{ $posts[2]->category->name }}</a>
                                {{ $posts[2]->created_at->diffForHumans() }}</p>
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[2]->excerpt }}</p>

                    <a href="/post/{{ $posts[2]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
                    <p class="card-text">

                    </p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- <div class="card mb-3 text-center">
    <img src="https://source.unsplash.com/400x80/?{{ $posts[0]->category->name }}" class="card-img-top"
alt="{{ $posts[0]->category->name }}">
<div class="card-body">
    <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a>
    </h3>
    <p>
        <small class="text-muted">
            <p>By. <a href="/authors/{{ $posts[0]->author->username }}"
                    class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                in <a href="/categories/{{ $posts[0]->category->slug }}"
                    class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}</p>
        </small>
    </p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>

    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
    <p class="card-text">

    </p>
</div>
</div> --}}
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
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 1, 0.445)"><a
                        href="/posts?category={{ $post->category->slug }}"
                        class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/200x200/?{{ $post->category->name }}" class="card-img-top"
                    alt="{{ $post->category->name }}">
                <div class="card-body">
                    <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </a>
                    <p>
                        <small class="text-muted">
                            <p>By. <a href="/posts?author={{ $post->author->username }}"
                                    class="text-decoration-none">{{ $post->author->name }}</a>

                                {{ $posts[0]->created_at->diffForHumans() }}</p>
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
