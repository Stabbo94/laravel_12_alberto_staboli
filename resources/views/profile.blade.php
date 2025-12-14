<x-layout>
    
    @if (session('alert'))
    <script>
        alert("{{ session('alert') }}");
    </script>
    @endif
    
    <!-- Sezione blu -->
    <section class="text-bg-primary py-5">
        <div class="container text-center">
            <h1 class="mb-3">Profilo utente di {{Auth::user()->name}}</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
        </div>
    </section>
    <!-- Fine Sezione blu -->
    
    <!-- Titolo prodotti inseriti-->
    <section class="text-center my-5">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Prodotti / pacchetti inseriti</h2>
        </div>
    </section>
    <!-- Fine Titolo prodotti inseriti-->
    
    <!-- Prodotti -->
    <section class="text-center my-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @forelse ($products as $product)
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
                            alt="immagine di {{$product->name}}">
                            @endif
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title mb-3 fw-bold">{{ $product->name }}</h5>
                            <h6 class="card-subtitle mb-3 text-body-secondary fw-bolder">€ {{number_format($product->price, 2, ',', '.')}}</h6>
                            <p class="card-text mb-3">{{ $product->description }}</p>
                        </div>
                        
                        <div class="d-flex justify-content-center pb-3">                        
                            <a href="{{route('product.edit',compact('product'))}}" class="btn btn-outline-primary w-75">
                                Modifica elemento
                            </a> 
                        </div>
                        
                        <div class="d-flex justify-content-center pb-3">                       
                            <form action="{{route('product.delete',compact('product'))}}" method="POST" class="w-75 m-0 p-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100">Elimina elemento</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                @empty
                <p class="text-center fst-italic">Non hai ancora pubblicato prodotti.</p>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Fine Prodotti -->
    
    <!-- Titolo per articoli-->
    <section class="text-center my-5">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Articoli pubblicati</h2>
        </div>
    </section>
    <!-- Fine Titolo per articoli-->
    
    <!-- Articoli pubblicati -->
    <section class="my-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                
                @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card articlecard w-100 shadow-sm">
                        
                        <div class="ratio ratio-1x1">
                            @if(!$article->img)
                            <img src="https://picsum.photos/400/400"
                            class="w-100 h-100 object-fit-cover"
                            alt="immagine di default">
                            @else
                            <img src="{{asset('storage/' . $article->img)}}"
                            class="w-100 h-100 object-fit-cover"
                            alt="immagine di {{$article->title}}">
                            @endif
                        </div>
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold mb-1">{{$article->title}}</h5>
                            <p class="card-text mb-3">{{$article->subtitle}}</p>
                                                        
                            <div class="mt-auto">
                                <a href="{{route('article.show',compact('article'))}}"
                                class="btn btn-primary w-100 mb-2">
                                Vai all'articolo completo
                            </a>
                            
                            <a href="{{route('article.edit', compact('article'))}}"
                            class="btn btn-outline-primary w-100">
                            Modifica articolo
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        @empty
        <p class="text-center fst-italic">
            Non hai ancora pubblicato articoli.
        </p>
        @endforelse
        
    </div>
</div>
</section>
<!-- Fine Articoli pubblicati -->




</x-layout>
