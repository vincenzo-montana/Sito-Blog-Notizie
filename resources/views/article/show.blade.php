<x-main>



    <div class=" row pt-5 mb-5 justify-content-center">
        <div class="col-6 col-md-6 d-flex flex-column align-items-center">
            <h1>{{ $article->title }}</h1>
            {{ $article->subtitle }}
            <img class="cardInfo rounded" src="{{ Storage::url($article->image) }}" alt="sesso e samba">
            {{ $article->body }}
            <p>{{ $article->body }}</p>

        @if (Auth::user() && Auth::user()->is_revisor)
        <div class="container my-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-evenly">
                    <form action="{{ route('revisor.acceptArticle', $article) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Accetta l'articolo</button>
                    </form>
                    <form action="{{ route('revisor.rejectArticle', $article) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Rifiuta l'articolo</button>
                    </form>
                </div>
            </div>
        </div>
        @endif

        </div>

        @if ($article->$category)
                            
            <div class="d-flex">
                    <h5>Categoria : <a href="{{ route('article.byCategory', $article->category) }}">
                        {{ $article->category->name }}</h5></a>

        @else
                    <h5 class="small text-muted">Nssuna categoria</h5>
            </div>
        @endif

        <p class="small text-mutend my-0">
            @foreach ($article->tags as $tag )
                #{{$tag->name}}
            @endforeach
        </p>
    </div>
</x-main>
