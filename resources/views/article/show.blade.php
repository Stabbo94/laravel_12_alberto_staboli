
<x-layout>
    
    <section class="text-bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-5 text-center">
                    <h1 class="text-center my-0">{{$article->title}}</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-newspaper mt-3" viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                        <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pt-5">
        <div class="container d-flex justify-content-center">
            <div class="rounded overflow-hidden border" style="width: 300px; height: 300px;">
                <img src="{{ asset('storage/' . $article->img) }}"
                class="w-100 h-100 object-fit-cover"
                alt="immagine di {{ $article->title }}">
            </div>
        </div>
    </section>
    
    <section class="d-flex flex-column min-vh-100 mb-1">
        <div class="container flex-grow-1 d-flex align-items-center justify-content-center my-0">
            <div class="text-center border border-white rounded p-3">
                <p class="lead fst-italic fs-6">{{$article->body}}</p>
            </div>
        </div>
        
    </section>
    
    <div class="row pb-2">
        <form action="{{route('article.delete', compact('article'))}}" method="POST" class="d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-light w-25 mx-0 d-flex align-items-center justify-content-center">
                Elimina articolo
            </button>
        </form>
    </div>
    
    
    
</x-layout>