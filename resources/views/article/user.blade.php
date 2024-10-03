<x-main>
    @foreach ($articles as $article)
        <div class="col-sm-6 mb-3 mb-sm-0 mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                </div>
            </div>
        </div>
        
        @if ($article->$category)
                            
                        <div class="d-flex">
                            <h5>Categoria : <a href="{{ route('article.byCategory', $article->category) }}">
                                    {{ $article->category->name }}</h5></a>

                        @else
                            <h5 class="small text-muted">Nssuna categoria</h5>
                        </div>
                        @endif
        @endforeach

    <p class="small text-mutend my-0">
        @foreach ($article->tags as $tag )
            #{{$tag->name}}
        @endforeach
    </p>
</x-main>
