<x-main>


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
        {{-- messaggio di non essere autorizzato ad accedere alla dashboard se non si è amministratore  --}}
        @if (session('alert'))
            <div class="alert alert-danger" id="alert">
                {{ session('alert') }}
            </div>
        @endif
        {{-- messaggio di avvenuta creazione articolo --}}
        @auth
            @if (session('message'))
                <div class="alert alert-success" id="message">
                    {{ session('message') }}
                </div>
            @endif
        @endauth
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
                        <h5>Categoria : <a href="{{ route('article.byCategory', $article->category) }}">
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
        {{-- eliminazione messaggi con js  --}}
        <script>
            var delayInMilliseconds = 5000; //1 second
            setTimeout(function() {
                let message = document.querySelector('#message')
                let alert = document.querySelector('#alert')
                message.remove()
                alert.remove()
                //your code to be executed after 1 second
            }, delayInMilliseconds);
        </script>

</x-main>
