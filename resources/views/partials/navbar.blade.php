<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Padhil | {{ $title }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if ($active === 'home')active @endif" href="/">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ($active === 'about')active @endif" href="/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ($active === 'posts')active @endif" href="/posts">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ($active === 'categories')active @endif" href="/categories">category</a>
                </li>
            </ul>


            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link @if ($active === 'login')active @endif"><i
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
