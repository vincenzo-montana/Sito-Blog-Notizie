<x-main>



    <div class=" row pt-5 mb-5 justify-content-center">
        <div class="col-6 col-md-6 d-flex flex-column align-items-center">
            <h1>{{ $article->title }}</h1>
            {{ $article->subtitle }}
            <img class="cardInfo rounded" src="{{ Storage::url($article->image) }}" alt="sesso e samba">
            {{ $article->body }}
        </div>
    </div>
</x-main>
