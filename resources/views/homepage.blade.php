<x-main>


    {{-- messaggio di non essere autorizzato ad accedere alla dashboard se non si è amministratore  --}}
    @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
    @endif
    {{-- messaggio di avvenuta creazione articolo --}}
    @auth
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    @endauth
    {{-- <div class="container">
        <!-- Page Heading -->
        @auth

            <div class="container pt-5 ">
                <div class="row justify-content-evenly">
                    @foreach ($articles as $article)
                        <div class="col-3  mb-3 mt-5 ">
                            <img src="{{ Storage::url($article->image) }}" class="cardImg" alt="...">
                            <div class="d-flex flex-column mt-1">
                                <h5 class="card-title"> {{ $article->title }}</h5>
                                <p class="card-subtitle">{{ $article->subtitle }}</p>
                                <p class="small text-muted"> Categoria: <a
                                        href="{{ route('bycategory', $article->category) }}"
                                        class="text-capitalize text-muted">{{ $article->category->name }}</a></p>
                                <div>
                                    <a href="{{ route('article.show', $article) }}" class="btn btn-primary">scopri di
                                        più </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endauth --}}
    <div class="container">

        <!-- Page Heading -->
        <h1 class=" mt-5">
            <small> Benvenuto nella homepage</small>
        </h1>
        <!-- Project One -->
        @foreach ($articles as $article)
            <div class="row mb-4">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md- cardImg" src="{{ Storage::url($article->image) }}"
                            alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>{{ $article->title }}</h3>
                    <h4>{{ $article->subtitle }}</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem
                        expedita
                        laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos
                        perspiciatis atque eveniet unde.</p>
                    <div class="d-flex">
                        <h5>Categoria : <a href="{{ route('bycategory', $article->category) }}">
                            {{ $article->category->name }}</h5>
                        </a>
                        {{-- da controllare perchè restituisce errore 404 --}}
                        {{-- <a href="{{route('user', Auth::user()->name )}}">{{Auth::user()->name}}</a> --}}
                    </div>
                    
                    <a class="btn btn-outline-secondary " href="{{ route('article.show', $article) }}">Scopri di più</a>
                </div>
            </div>
        @endforeach
        
        <p class="small text-mutend my-0">
            @foreach ($article->tags as $tag )
                #{{$tag->name}}
            @endforeach
        </p>




        {{-- carousel --}}
        {{-- <div class="container mt-5 p-5 -vh-50 bgHonolulu">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/small-private-plane1-removebg-preview.png') }}" class="d-block w-10"
                        alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="{{ asset('images/hatsune_miku_zatsune.jpg') }}" class="d-block w-10" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/small-private-plane1-removebg-preview.png') }}" class="d-block w-10"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}

</x-main>
