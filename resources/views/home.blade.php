<x-main>
    
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
    
</x-main>