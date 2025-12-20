<x-layout>
    
    <section class="text-bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-5 text-center">
                    <h1 class="text-center my-0">Pubblica il tuo articolo!</h1>
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
                        <label for="" class="form-label">Tags dell'articolo;</label>
                        @foreach($tags as $tag)
                        <div class="form-check my-2">
                            <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="checkDefault" name="tags[]" 
                            @if($article->tags->contains($tag))
                            checked 
                            @endif>
                            <label class="form-check-label" for="checkDefault">
                                {{$tag->name}}
                            </label>
                        </div>
                        @endforeach
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
