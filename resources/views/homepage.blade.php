<x-main>

    <div class="container">

        <!-- Page Heading -->
        <h1 class=" height">
            <small> Benvenuto nella homepage</small>
        </h1>
        {{-- messaggio di non essere autorizzato ad accedere alla dashboard se non si è amministratore  --}}
        @if (session('alert'))
            <div class="alert alert-danger" id="alert">
                {{ session('alert') }}
            </div>
        @endif
        {{-- messaggio di avvenuta creazione articolo --}}
        @auth
            @if (session('message'))
                <div class="alert alert-success" id="message">
                    {{ session('message') }}
                </div>
            @endif
        @endauth
        <!-- Project One -->
        @foreach ($articles as $article)
        <x-article-card :article="$article"/>
        @endforeach
        {{-- eliminazione messaggi con js  --}}
        
        <script>
            var delayInMilliseconds = 5000; //1 second
            setTimeout(function() {
                let message = document.querySelector('#message')
                let alert = document.querySelector('#alert')
                message.remove()
                alert.remove()
                //your code to be executed after 1 second
            }, delayInMilliseconds);
        </script>

</div>



</x-main>
