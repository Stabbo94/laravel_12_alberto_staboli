<x-layout>
    
    <!-- Header Tag -->
    <section class="text-bg-primary py-5">
        <div class="container text-center">
            <h1 class="mb-3">Articoli per tag: <span>{{ $tag->name }}</span></h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-newspaper" viewBox="0 0 16 16">
            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
            <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
        </svg>
    </div>
</section>

<!-- Articoli -->
<div class="container my-5">
    <div class="row g-4 justify-content-center">
        
        @forelse($articles as $article)
        <div class="col-12 col-md-6 col-lg-4 d-flex">
            <div class="card articlecard w-100 shadow-sm">
                <div class="ratio ratio-1x1">
                    @if(!$article->img)
                    <img src="https://picsum.photos/400/400"
                    class="w-100 h-100 object-fit-cover"
                    alt="immagine di default">
                    @else
                    <img src="{{ asset('storage/' . $article->img) }}"
                    class="w-100 h-100 object-fit-cover"
                    alt="{{ $article->title }}">
                    @endif
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold mb-1">{{ $article->title }}</h5>
                    <p class="card-text mb-3">{{ $article->subtitle }}</p>
                    <div class="mt-auto d-grid gap-2">
                        <a href="{{ route('article.show', compact('article')) }}"
                        class="btn btn-primary w-100">
                        Vai all'articolo completo
                    </a>
                    <a href="{{ route('article.edit', compact('article')) }}"
                    class="btn btn-outline-primary w-100">
                    Modifica articolo
                </a>
            </div>
        </div>
    </div>
</div>
@empty
<div class="col-12 d-flex justify-content-center align-items-center min-vh-50">
    <p class="text-center fst-italic min-vh-100">
        Non ci sono articoli collegati a questo tag.
    </p>
</div>
@endforelse

</div>
</div>

</x-layout>
