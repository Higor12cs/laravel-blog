@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <x-header>
        {{ __('Higor Carneiro') }} 🤙
    </x-header>
    <x-categories-navbar />
    <div class="container mt-4">
        <div class="row">
            <h2 class="mb-3">{{ __('Latest Posts') }} 👇</h2>
            <div class="col-lg-8 mb-4">
                @foreach ($posts as $post)
                    <x-post-preview :post="$post" />
                @endforeach
                <div class="d-grid">
                    <a href="{{ route('blog.index') }}" class="btn btn-lg btn-primary">{{ __('All Posts') }}</a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <x-about-sidebar />
            </div>
        </div>
    </div>
@endsection
