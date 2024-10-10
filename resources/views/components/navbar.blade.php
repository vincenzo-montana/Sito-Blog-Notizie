<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">AulabPost</a>

        <form action="{{ route('article.search') }}" method="GET" class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">

                <h5 class="offcanvas-title text-warning" id="offcanvasDarkNavbarLabel">Ombre dell'intelletto</h5>

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>

            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('article.create') }}">Crea</a>
                        </li>
                    @endauth

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('archivio') }}">Archivio</a>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            @foreach ($categories as $category)
                                <li><a class="text-white"
                                        href="{{ route('article.byCategory', $category) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                </ul>
                <ul class="navbar-nav ms-auto">



                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>



                    @endguest

                    {{-- REVISOR DASHBOARD --}}
                    @auth

                        @if (Auth::user() && Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
                            </li>
                        @endif

                        {{-- WRITER DASHBOARD --}}


                        @if (Auth::user() && Auth::user()->is_writer)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('writer.dashboard') }}">Dashboard Writer</a>
                            </li>
                        @endif
                        {{-- ADMIN DASHBOARD --}}


                        @if (Auth::user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                            </li>
                        @endif



                    @endauth


                    @auth
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('careers') }}">Lavora con noi</a>
                        </li>
                        <span class="nav-link margin-0">
                            <p class="text-warning">
                                Benvenuto {{ Auth::user()->name }}
                            </p>
                        </span>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <li class="nav-item">
                                <div>
                                    <button class="nav-link" type="submit">Logout</button>
                                </div>

                                {{-- <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">logout</a> --}}
                            </li>
                        </form>
                    @endauth

                </ul>


            </div>
        </div>
    </div>
</nav>
