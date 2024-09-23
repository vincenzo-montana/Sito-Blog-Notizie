<x-main>



<div class=" container pt-5 mb-5">
<h1> maamma</h1>
{{$article->title}}
{{$article->subtitle}}
{{$article->body}}
{{Storage::url($article->image)}}

</div>
</x-main>