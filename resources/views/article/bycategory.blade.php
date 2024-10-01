<x-main>
    <div class="row">

        @foreach ($articles as $article)
        
            <div class="col-sm-6 mb-3 mb-sm-0 mt-5">
                <div class="card image ">
                    <div class="card-body d-flex flex-column text-center ">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <h6>articolo : {{$article->title}}</h6>
                        <a href="{{ route('article.show', $article) }}" class=" btn-primary">per saperne di piu </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


</x-main>
