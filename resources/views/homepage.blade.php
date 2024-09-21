<x-main>
    <div class="container">
      @auth
        <!-- Page Heading -->
        <div>
          <h1 class="mt-5">Ultime notizie</h1>
          <!-- Project One -->
          <div class="row bgAsia">
            <div class="col-md-7">
              <a href="#">
                @foreach ($article as $articles)
                  {{$articles->title}} 
                
                
                {{-- <img class="img-fluid rounded mb-3 mb-md-0" src="{{Storage::url($article->image)}} " alt=""> --}}
                @endforeach
              </a>
            </div>
            <div class="col-md-5">
              <h3>10 Cose da vedere in provincia di Palermo che forse non conosci</h3>
              <p>In questo articolo ti consigliamo 10 cose da vedere in provincia di Palermo, che secondo noi sono imperdibili (non è una classifica ma soltanto una lista).
              </p>
              <a class="btn btn-primary" href="#">View Project</a>
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
                  <img src="{{ asset('images/small-private-plane1-removebg-preview.png') }}" class="d-block w-10" alt="...">
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