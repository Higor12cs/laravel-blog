<div class="card">
    <ul class="list-group list-group-flush">
        @foreach ($categories as $category)
            <li class="list-group-item fs-5"><a href="{{ route('posts.byCategory', $category) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
