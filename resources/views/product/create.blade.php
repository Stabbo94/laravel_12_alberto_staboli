<x-layout>
    
    <section class="text-bg-primary py-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-3 text-center">
                    <h1 class="text-center mb-3">Carica il tuo prodotto / pacchetto viaggio!</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus mt-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pb-4">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">                    
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome del prodotto / pacchetto viaggio;</label>
                            <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione del prodotto / pacchetto viaggio;</label>
                            <textarea name="description" id="description" rows="6" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo del prodotto / pacchetto viaggio €;</label>
                            <input name="price" type="number" class="form-control" value="{{ old('price') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="img" class="form-label">Immagine del prodotto / pacchetto viaggio;</label>
                            <input name="img" type="file" class="form-control" id="img">
                        </div>             
                        
                        <button type="submit" class="btn btn-light w-100 mt-3 d-flex align-items-center justify-content-center">
                            Aggiungi allo shop
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    
</x-layout>
