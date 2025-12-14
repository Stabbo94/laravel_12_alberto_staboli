<x-layout>
    
    <section class="text-bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-0 py-5 text-center">
                    <h1 class="text-center my-0">Accedi con il tuo account per visualizzare prodotti e pacchetti viaggi, e/o caricarli nello shop! Potrai anche pubblicare e modificare articoli! Se non hai un account registrati!</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right mt-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo e-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-light w-100 mt-5 d-flex align-items-center justify-content-center">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>