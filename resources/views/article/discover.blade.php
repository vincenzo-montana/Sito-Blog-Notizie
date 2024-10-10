<x-main>



    <div class=" row pt-5 mb-5 justify-content-center">
        <div class="col-6 col-md-6 d-flex flex-column align-items-center">
            <h1>{{ $article->title }}</h1>
            {{ $article->subtitle }}
            <img class="cardInfo rounded" src="{{ Storage::url($article->image) }}" alt="sesso e samba">
            <p class="pt-5">{{ $article->body }}</p>
            

       

        </div>

        @if ($article->category)
                            
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
