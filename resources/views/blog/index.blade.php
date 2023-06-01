@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <x-header>
        {{ __('Blog') }} 📒
    </x-header>
    <x-categories-navbar />
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-4">
                <h2 class="mb-3">{{ __('All Posts') }} 👇</h2>
                @foreach ($posts as $post)
                    <x-post-preview :post="$post" />
                @endforeach

                <div class="fs-5">
                    {{ $posts->links() }}
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <h2 class="mb-3">{{ __('Top Categories') }} 👇</h2>
                <x-categories-sidebar />
            </div>
        </div>
    </div>
@endsection
