<x-main>


    
        <div class="container-fluid p-5 bg-secondary-subtle text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1">Bentornato, Redattore {{Auth::user()->name}}</h1>
                </div>
            </div>
        </div>
    
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Articoli in attesa di revisione</h2>
                    <x-writer-articles-table :articles="$unrevisionedArticles"/>
                </div>
            </div>
        </div>
    
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Articoli pubblicati</h2>
                    <x-writer-articles-table :articles="$acceptedArticles"/>
                </div>
            </div>
        </div>
    
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Articoli respinti</h2>
                    <x-writer-articles-table :articles="$rejectedArticles"/>
                </div>
            </div>
        </div>
    
    


</x-main>