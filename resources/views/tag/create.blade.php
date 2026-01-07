<x-layout>
    
    <!-- Sezione blu -->
    <section class="text-bg-primary py-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-3 text-center">
                    <h1 class="text-center mb-3">Inserisci il tuo tag!</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- Fine Sezione blu -->
    
    <!-- Form per caricare -->    
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
                    
                    
                    <form action="{{route('tag.submit')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="tag" class="form-label">Inserisci il tag;</label>
                            <input name="name" type="text" class="form-control" id="tag" value="{{old('name')}}">
                        </div>
                        
                        <button type="submit" class="btn btn-light w-100 mt-4 d-flex align-items-center justify-content-center">
                            Inserisci tag
                        </button>
                        
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Form per caricare -->    
    
</x-layout>
