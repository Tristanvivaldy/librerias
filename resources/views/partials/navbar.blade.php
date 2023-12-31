<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"> <i class="bi bi-book-half"></i> <b>Librarias</b></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('books*') ? 'active' : '' }}" href="/books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('category') ? 'active' : '' }}" href="/category">Category</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto me-5">
                @auth
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Welcome, {{ auth()->user()->name }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li>
                                        <form action="/dashboards" method="get">
                                            <button type="submit" class="text-light dropdown-item">
                                                <i class="bi bi-clipboard2-data"></i>
                                                Dashboard
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider bg-light">
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button class="text-light dropdown-item" type="submit">
                                                <i class="bi bi-box-arrow-right"></i>
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('session') ? 'active' : '' }}" href="/session"><i
                                class="bi bi-box-arrow-in-right"></i> &nbsp; Login </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
