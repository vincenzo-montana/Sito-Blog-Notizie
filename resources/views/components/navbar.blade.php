
    <nav class="navbar p-0 fixed-top d-flex navbar-expand-lg bgAsia" id="navbar">
        <div class="container-fluid">

            <a class="navbar-brand p-0 custom-text-color" href="#">
                <img src="{{ asset('images/small-private-plane1-removebg-preview.png') }}" alt="plane" class="logo">
                Post Aulab
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    @auth
                    @endauth
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
                        @auth
                        <span class="nav-link margin-0">
                            <h5>
                                Benvenuto {{Auth::user()->name}}
                            </h5>
                        </span>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <li class="nav-item">
                                <div>
                                    <button class="nav-link" type="submit"><i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i></button> 
                                </div>
                                {{-- <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">logout</a> --}}
                            </li>
                        </form>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
