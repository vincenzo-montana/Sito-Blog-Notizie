<x-main>
    <div class=" containerbycat pt-5 mt-4">

        @foreach ($articles as $article)
            <div class="item">
                <div class="col-md-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ Storage::url($article->image) }}" alt="sesso e samba">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <h6>articolo : {{ $article->title }}</h6>
                        <a href="{{ route('article.discover', $article) }}" class="btn btn-primary">per saperne di
                            piu</a>
                    </div>
                    <p class="small text-mutend my-0">
                        @foreach ($article->tags as $tag)
                            # {{ $tag->name }}
                        @endforeach
                    </p>
                </div>
            </div>
        @endforeach
 </div>



</x-main>
