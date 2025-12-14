<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder littletitle" href="#">Around The World Travel!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link mx-2" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('product.index')}}">Prodotti e pacchetti disponibili</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('article.index')}}">Articoli pubblicati</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('product.create')}}">Inserisci prodotto / pacchetto viaggio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('article.create')}}">Pubblica articolo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao; {{Auth::user()->name}}!
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a>
              <form action="{{route('logout')}}" method="POST" style="display: none" id="form-logout">
                @csrf
              </form>
            </li>
            <li>
              <a href="{{route('user.profile')}}"class="dropdown-item">Profilo utente</a>
            </li>
          </ul>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mx-2" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Ciao Nuovo Visitatore!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          </ul>
        </li>
        @endauth
      </li>
    </ul>
  </div>
</div>
</nav>