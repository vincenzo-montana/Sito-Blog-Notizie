<x-main>
    @auth
        
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
            {{-- qua poi mettiamo la data  --}}
            {{-- <p class="card-text"><small>{{$article->created_at->format('d/m/Y')}} <br> da {{$article->user->name}}</small></p> --}}
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


@endauth
    
</x-main>