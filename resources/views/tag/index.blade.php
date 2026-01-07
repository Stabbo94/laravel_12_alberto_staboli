<x-layout>
    @if (session('alert'))
    <script>
        alert("{{ session('alert') }}");
    </script>
    @endif
    
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
        
        <section class="text-bg-primary py-5 w-100">
            <div class="container text-center">
                <h1 class="mb-4 fw-bold">Esplora articoli per tags</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z"/>
                </svg>
            </div>
        </section>
        
        <div class="container-fluid py-5">
            <div class="row g-5 justify-content-center align-items-center text-center">
                @foreach($tags as $tag)
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <a href="{{route('tag.show', compact('tag'))}}" class="text-decoration-none">
                        <div class="card text-bg-secondary py-5 d-flex align-items-center justify-content-center shadow-sm px-0">
                            <h3 class="text-uppercase fw-semibold m-0 fs-5">
                                # {{$tag->name}}
                            </h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</x-layout>
