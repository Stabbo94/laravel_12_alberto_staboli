<x-layout>
    
    <section class="text-bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-5 text-center">
                    <h1 class="text-center mb-3">Modifica il tuo prodotto / pacchetto viaggio</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                    </svg>
                </svg>
            </div>
        </div>
    </div>
</section>

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
                <form action="{{route('product.update', compact('product'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto / pacchetto viaggio;</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{$product->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del prodotto / pacchetto viaggio;</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto / pacchetto viaggio €;</label>
                        <input name="price" type="number" class="form-control" id="name" value="{{$product->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine del prodotto / pacchetto viaggio;</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>             
                    <button type="submit" class="btn btn-light w-100 mt-5 d-flex align-items-center justify-content-center">
                        Modifica prodotto / pacchetto viaggio
                    </button>
                    
                </form>
                
            </div>
        </div>
    </div>
</section>


</x-layout>
