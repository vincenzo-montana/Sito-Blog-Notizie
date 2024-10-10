<!-- Project One -->
<div class="row mb-4">
    <div class="col-md-7">
        <img class="img-fluid rounded mb-3 mb-md- cardImg" src="{{ Storage::url($article->image) }}" alt="">
        </a>
    </div>
    <div class="col-md-5">

        <h3>{{ $article->title }}</h3>
        <h4>{{ $article->subtitle }}</h4>
        <p class="paragraph">{{ $article->body }}</p>

        <div class="">
            <div class="card-footer d-flex justify-content-start align-items-center">
                <div class="d-flex flex-column">
                    <p class="card-subtitle tex-muted fst-italic small">tempo di lettura {{ $article->readDuration() }}
                        min
                    </p>
                    <p>redatto il {{ $article->created_at->format('d/m/Y') }} <br>
                        da <a class="text-muted"
                            href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
                    </p>
                </div>
                <a class="btn btn-outline-secondary ms-3" href="{{ route('article.show', $article) }}">Scopri di più</a>

            </div>
            <div class="d-flex justify-content-evenly flex-column">
                <div class="d-flex">
                    <h5>Categoria : <a href="{{ route('article.byCategory', $article->category) }}">
                            {{ $article->category->name }}</h5>
                </div>
                <p class="small text-mutend my-0">
                    @foreach ($article->tags as $tag)
                        #{{ $tag->name }}
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>

