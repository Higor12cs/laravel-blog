<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white px-3 fs-5">
    <div class="container-fluid">
        <a class="navbar-brand fs-4 me-4" href="{{ route('home') }}">{{ __('Higor Carneiro') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'home') active @endif"
                        href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'blog.index') active @endif"
                        href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'about.index') active @endif"
                        href="{{ route('about.index') }}">{{ __('About') }}</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://instagram.com/higor12cs" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://linkedin.com/in/higor12cs" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
