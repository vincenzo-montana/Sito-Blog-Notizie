<x-main>

    @auth


        <div class="container mt-5 ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-container">
                        <h2 class="form-title mb-4">Crea un nuovo articolo</h2>
                        <form action="{{ route('article.store') }}" class="card p-5 shadow" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <!-- Titolo Articolo -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title"
                                    placeholder="Inserisci il titolo dell'articolo" value="{{ old('name') }}" required>
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                            {{-- sottotitolo --}}
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">Sottotitolo</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                    value="{{ old('subtitle') }}" placeholder="Inserisci il sottotitolo dell'articolo"
                                    required>
                                @error('subtitle')
                                    {{ $message }}
                                @enderror
                            </div>
                            <!-- Contenuto Articolo -->
                            <div class="mb-3">
                                <label for="body" class="form-label">Contenuto</label>
                                <textarea class="form-control" id="body" name="body" value="{{ old('body') }}" rows="6"
                                    placeholder="Scrivi qui il contenuto dell'articolo" required></textarea>
                                @error('body')
                                    {{ $message }}
                                @enderror
                            </div>
                            <!-- Categoria Articolo -->
                            <select class="form-select mb-3" aria-label="default select" name="category_id">
                                <option selected>Select category </option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror


                            <!-- Upload Immagine -->
                            <div class="mb-1 d-flex flex-column">
                                <label for="formFile" class="form-label">Carica un'immagine</label>
                                <input class="form-control" name="image" type="file" id="image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="featured">
                                <label class="form-check-label" for="featured">
                                    Imposta come articolo in evidenza
                                </label>
                            </div>

                            {{-- aggiunta tags della user 5 salvo --}}
                            <div class="mb-3">
                                <label for="tags" class="form-label"> Tags</label>
                                <input type="text" name="tags" class="form-control" id="tags">
                                <span class="small text-muted fst_muted fst-italic"> Dividi il tag con una virgola - ce
                                    scritto come esempio - bysalvo</span>
                                @error('tags')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Bottone di invio -->
                            <button type="submit" class="btn btn-custom w-100 bg-warning">Pubblica Articolo</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    @endauth

</x-main>
