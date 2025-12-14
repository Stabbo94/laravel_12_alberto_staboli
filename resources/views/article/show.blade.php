<x-layout>
    
    <section class="text-bg-primary py-4">
        <div class="container text-center">
            <h1 class="my-0">{{ $article->title }}</h1>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
            fill="currentColor" class="bi bi-newspaper mt-3" viewBox="0 0 16 16">
            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5z"/>
            <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
        </svg>
    </div>
</section>

<!-- IMMAGINE -->
<section class="py-3">
    <div class="container d-flex justify-content-center">
        <div class="rounded overflow-hidden border w-100" style="max-width: 700px;">
            <img
            src="{{ asset('storage/' . $article->img) }}"
            class="w-100 object-fit-cover"
            alt="immagine di {{ $article->title }}">
        </div>
    </div>
</section>

<!-- Articolo -->
<section class="py-3 mb-5">
    <div class="container d-flex justify-content-center">
        <div class="border border-white rounded p-4 w-100 text-start" style="max-width: 700px;">
            <p class="lead fst-italic fs-6 mb-0">
                {{ $article->body }}
            </p>
        </div>
    </div>
</section>

<!-- Bottone per eliminazione-->
<div class="row m-0 p-0 pb-5 mb-5">
    @auth
    @if($article->user_id == Auth::id())  
    <form
    action="{{ route('article.delete', compact('article')) }}"
    method="POST"
    class="d-flex justify-content-center m-0 p-0">
    @csrf
    @method('DELETE')
    
    <button
    type="submit"
    class="btn btn-danger w-25 d-flex align-items-center justify-content-center py-2">
    Elimina articolo
</button>
@endif
@endauth 
</form>
</div>

</x-layout>
