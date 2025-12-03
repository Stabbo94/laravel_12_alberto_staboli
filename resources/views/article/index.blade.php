
<x-layout>
    
    <section class="text-bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-5 text-center">
                    <h1 class="text-center my-0">Leggi gli articoli pubblicati!</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-newspaper mt-3" viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                        <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            
            @foreach ($articles as $article)
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
                <div class="card mt-4 mx-2">
                    
                    <div class="ratio ratio-1x1">
                        @if(!$article->img)
                        <img src="https://picsum.photos/200/300"
                        class="w-100 h-100 object-fit-cover"
                        alt="immagine di default">
                        @else
                        <img src="{{ asset('storage/' . $article->img) }}"
                        class="w-100 h-100 object-fit-cover"
                        alt="immagine di {{ $article->title }}">
                        @endif
                    </div>
                    
                    <div class="card-body">
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary my-3 w-100">Vai all'articolo completo!</a>
                        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary my-3 w-100">Modifica articolo</a>
                        <h5 class="card-title fs-4 fw-bold">{{$article->title}}</h5>
                        <p class="card-text fst-italic">{{$article->subtitle}}</p>
                        
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
</x-layout>