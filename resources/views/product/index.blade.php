<x-layout>
    
    @if (session('alert'))
    <script>
        alert("{{ session('alert') }}");
    </script>
    @endif
    
    <!-- Sezione blu -->
    <section class="text-bg-primary py-5">
        <div class="container text-center">
            <h1 class="mb-3">Consulta la lista dei nostri prodotti e pacchetti viaggi!</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018"/>
                <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11"/>
            </svg>
        </div>
    </section>
    <!-- Fine Sezione blu -->
    
    <!-- Area con tutte le card -->
    <div class="container py-4">
        <div class="row g-4 justify-content-center">
            
            @foreach ($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card productcard w-100 h-100">
                    
                    <div class="ratio ratio-1x1">
                        @if(!$product->img)
                        <img src="https://picsum.photos/200/300"
                        class="w-100 h-100 object-fit-cover"
                        alt="immagine di default">
                        @else
                        <img src="{{Storage::url($product->img)}}"
                        class="w-100 h-100 object-fit-cover"
                        alt="immagine di {{$product}}">
                        @endif
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-3 text-body-secondary fw-bolder">€ {{ number_format($product->price,2,',','.')}}</h6>
                        <p class="card-text mb-3">{{$product->description}}</p>
                        <p class="card-text fst-italic mb-3">Creato da: {{$product->user->name}}</p>
                    </div>
                    
                    @auth
                    @if($product->user_id == Auth::id())
                    <div class="d-flex justify-content-center pb-3">                        
                        <a href="{{ route('product.edit', compact('product')) }}" class="btn btn-outline-primary w-75">
                            Modifica elemento
                        </a> 
                    </div>
                    @endif
                    @endauth
                    
                    
                    <div class="d-flex justify-content-center pb-3">
                        @auth
                        @if($product->user_id == Auth::id())                       
                        <form
                        action="{{ route('product.delete', compact('product')) }}"
                        method="POST"
                        class="w-75 m-0 p-0">
                        @csrf
                        @method('DELETE')
                        
                        <button
                        type="submit"
                        class="btn btn-danger w-100">
                        Elimina elemento
                    </button>
                    @endif
                    @endauth               
                </form>
                
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<!-- Fine Area con tutte le card -->

<!-- Nota su prezzi -->
<section class="elements container py-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div>
                <p class="text-center text-justify fst-italic">
                    N.B. I prezzi esposti sono da considerare IVA Inclusa
                </p>
            </div>  
        </div>
    </div>
</section>
<!-- Fine Nota su prezzi -->

</x-layout>
