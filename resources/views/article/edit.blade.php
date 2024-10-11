<x-main>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-5">Modifica l'articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('article.update', $article)}}" method="POST" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" value="{{old('title', $article->title)}}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" value="{{old('subtitle', $article->subtitle)}}" class="form-control">
                        @error('subtitle')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" class="form-control">
                            <option value="">Seleziona una categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($category->id == $article->category_id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" value="{{old('tags', $article->tags->implode('name', ', ') )}}" class="form-control">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                        @error('tags')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                        <textarea name="body" rows="7" class="form-control">{{old('body', $article->body)}}</textarea>
                        @error('body')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-primary shadow">Modifica l'articolo</button>
                        <a href="{{route('homepage')}}" class="btn btn-secondary ms-2">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>