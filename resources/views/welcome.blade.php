<x-layout>
    
    <section>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome del prodotto;</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione del prodotto;</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo del prodotto in EUR;</label>
                            <input name="price" type="number" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Aggiungi immagine del prodotto;</label>
                            <input name="img" type="file" class="form-control" id="img">
                        </div>             
                        <button type="submit" class="btn btn-light w-100 mt-3 d-flex align-items-center justify-content-center">
                            Aggiungi allo shop
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus ms-auto" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg>
                        </button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    
    
</x-layout>
