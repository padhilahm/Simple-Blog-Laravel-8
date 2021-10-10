{{-- @extends('layouts.main') --}}

{{-- @section('container') --}}
@include('partials/header')
@include('partials/navbar')
<div class="container mt-4">
    <h1>Halaman blog</h1>
    <h3>{{ $name }}</h3>
    <h3>{{ $email }}</h3>
    <h2>{{ $email }}</h2>
    <img src="img/{{ $image }}" alt="{{ $image }}" width="200" class="img-thumbnail rounded-circle">
</div>

@include('partials/footer')
{{-- @endsection --}}
