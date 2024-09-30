<x-main>
  
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="container">

            <!-- Page Heading -->
            <h1 class="my-5">
                <small> Tutti gli articoli pubblicati</small>
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
                        </div>
                        <a class="btn btn-outline-secondary" href="{{ route('article.show', $article) }}">Scopri di più</a>
                    </div>
                </div>
            @endforeach
        


</x-main>
