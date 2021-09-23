@extends('layouts/main')
@section('container')

<div class="container my-5">
    <div class="row my-3 justify-content-center py-5">
        <div class="col-lg-8">
            <h1 class='mb-3 text-center'>{{ $post->title }}</h1>

            <p class="text-center">By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->Category->name }}</a></p>
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
            @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="btn btn-success"><i class="bi bi-arrow-left-square" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to all my posts"></i> Back to all posts</a>
        </div>
    </div>
</div>
@endsection