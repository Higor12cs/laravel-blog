<nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm border border-1">
    <div class="container-fluid justify-content-center">
        <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#categoriesNavbar"
            aria-controls="categoriesNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="ms-1 fs-6">Categories</span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="categoriesNavbar">
            <ul class="navbar-nav mb-2 mb-lg-0">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 nav-link fs-5" aria-current="page"
                            href="{{ route('posts.byCategory', $category) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
