<x-main>



<div class=" container pt-5 mb-5">
<h1>{{$article->title}}</h1>
{{$article->subtitle}}
{{$article->body}}
<img src="{{Storage::url($article->image)}}" alt="sesso">

</div>
</x-main>