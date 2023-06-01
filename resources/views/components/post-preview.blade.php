<div class="card mb-4">
    @if ($post->getThumbnail())
        <a href="{{ route('posts.show', $post) }}">
            <img src="{{ $post->getThumbnail() }}" class="card-img-top" alt="{{ __('Post Image') }}">
        </a>
    @endif
    <div class="card-body">
        <h2 class="mb-0"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
        <div class="mb-2">
            @foreach ($post->categories as $category)
                <a href="{{ route('posts.byCategory', $category) }}"
                    class="link-secondary me-2">{{ $category->name }}</a>
            @endforeach
        </div>
        <p class="text-muted fs-6 mt-1 mb-2">
            {{ __('Published at') . ' ' . $post->published_at->diffForHumans() . ' ' . __('by') }}
            <a href="{{ route('posts.byWriter', $post->user) }}">{{ $post->user->name }}</a>
        </p>
        <p class="fs-4">{{ $post->contentPreview(30) }}</p>
    </div>
</div>
