<x-layout>
    
    <section class="text-bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-5 text-center">
                    <h1 class="text-center my-0">Pubblica il tuo articolo!</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-book-half mt-3" viewBox="0 0 16 16">
                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container mt-4">
            <div class="row justify-content-center">
                @if ($errors->any())
                <div class="alert alert-danger col-12 text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-12 col-md-6">
                    
                    <form action="{{route('article.update', compact('article'))}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo dell'articolo;</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{$article->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sottotitolo dell'articolo;</label>
                            <input name="subtitle" type="text" value="{{$article->subtitle}}" id="subtitle" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Contenuto dell'articolo;</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Aggiungi immagine;</label>
                            <input name="img" type="file" class="form-control" id="img">
                        </div>             
                        <button type="submit" class="btn btn-light w-100 mt-4 d-flex align-items-center justify-content-center">
                            Modifica articolo
                        </button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    
    
</x-layout>
