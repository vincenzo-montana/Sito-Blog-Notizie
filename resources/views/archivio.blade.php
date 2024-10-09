<x-main>
  
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="container">

            <!-- Page Heading -->
            <h1 class="my-5 pt-5">
                <small> Tutti gli articoli pubblicati</small>
            </h1>
            <!-- Project One -->
            @foreach ($articles as $article)
            <x-article-card :article="$article" />
                    
            @endforeach
        


</x-main>
