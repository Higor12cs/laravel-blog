@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center fs-4">
            <div class="col-md-10">
                <div class="card mb-4">
                    @if ($post->getThumbnail())
                        <img src="{{ $post->getThumbnail() }}" class="card-img-top img-fluid" alt="{{ __('Post Image') }}">
                    @endif
                    <div class="card-body">
                        <h1 class="mb-1"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h1>
                        <div class="mb-2 fs-6">
                            @foreach ($post->categories as $category)
                                <a href="{{ route('posts.byCategory', $category) }}"
                                    class="link-secondary me-1">{{ $category->name }}</a>
                            @endforeach
                        </div>
                        <p class="text-muted fs-6 mt-1 mb-3">
                            {{ __('Published at') . ' ' . $post->published_at->diffForHumans() . ' ' . __('by') }}
                            <a href="{{ route('posts.byWriter', $post->user) }}">{{ $post->user->name }}</a>
                        </p>
                        <div class="post-content">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
