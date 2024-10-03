<x-main>

    <div class="container-fluid p-5 bg-secondary-subtitle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1"> Bentornato, Amministratore {{ Auth::user()->name }}
                </h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success" id="message">
            {{ session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>
    <script>
        var delayInMilliseconds = 5000; //1 second
        setTimeout(function() {
            let message = document.querySelector('#message')
            message.remove()
            //your code to be executed after 1 second
        }, delayInMilliseconds);
    </script>

    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Tutti i tags</h2>
                <x-metainfo-table :metaInfos="$tags" mateType="tags"/>
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Tutte le categorie</h2>
                <x-metainfo-table :metaInfos="$categories" mateType="categorie"/>
            </div>
        </div>
    </div>
</x-main>
