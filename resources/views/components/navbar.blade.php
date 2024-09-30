
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('homepage')}}">AulabPost</a>

          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button type="button" class="btn btn-outline-light">Search</button>
          </form>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-dark">
              <h5 class="offcanvas-title  " id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body bg-dark">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('article.create')}}">Crea</a>
                    </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('archivio')}}">Archivio</a>
                </li>

                @auth
                    @if (Auth::user()->is_admin)

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                        
                    @endif
                @endauth

                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                        </a>
                    <ul class="dropdown-menu bg-dark">
                        @foreach ($categories as $category)

                            <li><a href="{{route('bycategory', $category)}}">{{$category->name}}</a></li>
                                
                        @endforeach
                    </ul>
                </li>

                <ul class="navbar-nav ms-auto">
                    
                    @if (Auth::user() && Auth::user()->is_revisor)

                    <li> 
                        <a href="{{route('revisor.dashboard')}}">Dashboard Revisor</a>
                    </li>
                        
                    @endif


                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        
                            
                        
                        @endguest
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
                        </li>
                        <span class="nav-link margin-0">
                            <p>
                                Benvenuto {{Auth::user()->name}}
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

