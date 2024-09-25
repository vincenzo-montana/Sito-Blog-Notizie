<x-main>
    @foreach ($articles as $article)
        <div class="col-sm-6 mb-3 mb-sm-0 mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                </div>
            </div>
        </div>
    @endforeach
</x-main>
