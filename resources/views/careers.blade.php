<x-main>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Lavora con noi</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <form action="{{route('careers.submit')}}" method="POST" class="card p-5 shadow">
                    @csrf
                    <!-- Seleziona Ruolo -->
                    <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="" selected disabled>Seleziona il ruolo</option>
                        @if (!Auth::user()->is_admin)
                            <option value="admin">Amministratore</option>
                        @endif
                        @if (!Auth::user()->is_revisor)
                            <option value="revisor">Revisore</option>
                            @endif
                        @if (!Auth::user()->is_writer)
                            <option value="writer">Redattore</option>
                        @endif
                    </select>
                    
                    @error('role')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="my-5"></div>

                    <!-- Email -->
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                    
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="my-5"></div>

                    <!-- Messaggio di presentazione -->
                    <label for="message" class="form-label">Perché vuoi candidarti per questo ruolo? Raccontacelo</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="d-flex justify-content-center my-5">
                        <button type="submit" class="btn btn-outline-secondary">Invia candidatura</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-4 p-5">
                <h2>Lavoro come amministratore</h2>
                <p>Selezionando il lavoro come amministratore, ti occuperai di gestire le richieste di lavoro e di aggiungere o modificare le categorie.</p>
                <h2>Lavoro come revisore</h2>
                <p>Se scegli di lavorare come revisore, deciderai se un articolo può essere pubblicato o meno sulla piattaforma.</p>
                <h2>Lavoro come redattore</h2>
                <p>Se scegli di lavorare come redattore, potrai scrivere gli articoli che saranno pubblicati.</p>
            </div>
        </div>
    </div>
</x-main>
