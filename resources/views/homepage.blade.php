<x-main>
    <div class="container">
      <!-- Page Heading -->
      @auth
      <div class="row justify-content-between top">
        <!-- Project One -->
        <div class="row bgAsia col-md-8 ">
          <h1 class="m-1">Ultime notizie</h1>
          @foreach ($articles as $article)
          <div class="card col-md-12">
            <div class="card text-bg-dark"> 
              <img src="{{Storage::url($article->image)}}" class="card-img" alt="...">
              <div class="card-img-overlay">
                  <h3 class="card-title">
                    <a class="btn text-light" href="#">
                    10 Cose da vedere in provincia di Palermo che forse non conosci</a>
                  </h3>
                  <p>In questo articolo ti consigliamo 10 cose da vedere in provincia di Palermo, che secondo noi sono imperdibili (non è una classifica ma soltanto una lista).</p>
                  <p class="card-text"><small>Last updated 3 mins ago</small></p>
                  @if (session('message'))
                    <div class="alert alert-success">
                      {{session('message')}}
                    </div>     
                  @endif
              </div>
            </div>
          </div>  
          @endforeach
        </div>
          <!-- Project Two -->
        <div class="card col-md-3">
          <div class="card text-bg-dark">
            <img src="{{asset('images/hatsune_miku_zatsune.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is
              {{--  a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. --}}
            </p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      @endauth

        @auth
            <a href="{{route('article.create')}}"><button class="btn btn-success">aggiungi</button></a>
            
        @endauth

          </div>
        </div>
        {{-- carousel --}}
        <div class="container mt-5 p-5 -vh-50 bgHonolulu">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/small-private-plane1-removebg-preview.png') }}" class="d-block w-10" alt="...">
            </div>
            <div class="carousel-item">
                  <img src="{{ asset('images/hatsune_miku_zatsune.jpg') }}" class="d-block w-10" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/small-private-plane1-removebg-preview.png') }}" class="d-block w-10" alt="...">
              </div>
            </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>
      
</x-main>