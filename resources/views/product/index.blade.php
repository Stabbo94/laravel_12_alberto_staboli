<!-- 
    Index.blade.php & Welcome.blade.php inseriti in cartella product come visto a lezione
-->

<x-layout>
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex flex-wrap">
                @foreach ($products as $product)
                <div class="card mt-2 mb-2 mx-2" style="width: 18rem;">
                    @if(!$product->img)
                    <img src="https://picsum.photos/200/300" class="card-img-top cardImg img-fluid" alt="immagine di default">
                    @else
                    <img src="{{Storage::url($product->img)}}" class="card-img-top cardImg img-fluid" alt="immagine di {{$product}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">€ {{$product->price}}</h6>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</x-layout>