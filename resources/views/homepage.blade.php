<x-main>
    <div class="container">
      <!-- Page Heading -->
      @auth
      
      <div class="container pt-5 ">
        <div class="row justify-content-evenly"> 
            @foreach ($articles as $article )
            <div class="col-3  mb-3 mt-5 ">
   
        
    <div class="cardAnnunce " style="width: 18rem;">
        <img src="{{Storage::url($article->image)}}" class="cardImg" alt="...">
        <div class="cardInfo">
          <h5 class="card-title"> {{$article->title}}</h5>
          <p class="card-subtitle">{{$article->subtitle}}</p>
          <p class="small text-muted"> Categoria: <a href="" class="text-capitalize text-muted">{{$article->category->name}}</a></p>
        {{-- qua poi mettiamo la data  --}}
        {{-- <p class="card-text"><small>{{$article->created_at->format('d/m/Y')}} <br> da {{$article->user->name}}</small></p> --}}
       
        <a href="{{route('article.show', $article)}}" class="btn btn-primary">per saperne di piu </a>


       
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>



      <div class="row justify-content-between top">

        <!-- Project One -->

        {{-- <div class="row bgAsia col-md-8 ">
          <h1 class="m-1">Ultime notizie</h1>
          @foreach ($articles as $article)
          <div class="card col-md-12">
            <div class="card text-bg-dark"> 
              <img src="{{Storage::url($article->image)}}" class="card-img" alt="descrizione img">
              <div class="card-img-overlay">
                  <h3 class="card-title"> 
                    <a class="btn text-light" href="#">
                      {{$article->title}}</a>
                  </h3>
                  <p class="card-subtitle">{{$article->subtitle}}</p>
                  <p class="small text-muted"> Categoria: <a href="" class="text-capitalize text-muted">{{$article->category->name}}</a></p>

                  <p class="card-text"><small>{{$article->created_at->format('d/m/Y')}} <br> da {{$article->user->name}}</small></p>

                  @if (session('message'))
                    <div class="alert alert-success">
                      {{session('message')}}
                    </div>     
                  @endif
              </div>
            </div>
          </div>  
          @endforeach
        </div> --}}
          <!-- Project Two -->
        {{-- <div class="card col-md-3">
          <div class="card text-bg-dark">
            <img src="{{asset('images/hatsune_miku_zatsune.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is
            </p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> --}}
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