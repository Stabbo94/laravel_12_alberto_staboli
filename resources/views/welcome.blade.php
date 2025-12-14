<x-layout>
    
    <!-- Link Splide per CDN esterna -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- Fine Link Splide per CDN esterna -->
    
    <!-- Sezione blu con scritta e icona Home -->
    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Benvenuto nella nostra Home Page!</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house mt-3" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
        </div>
    </section>
    <!-- Fine Sezione blu con scritta e icona Home -->
    
    <!-- Parte alert -->
    <div class="container-fluid">
        
        @if(session()->has('successMessage'))
        <div class="alert alert-success pt-5">
            {{session('successMessage')}}
        </div>
        @endif
        
        @if(session()->has('errorMessage'))
        <div class="alert alert-danger pt-5">
            {{session('errorMessage')}}
        </div>
        @endif
    </div>
    <!-- Fine arte alert -->
    
    <!-- Sezione Immagine travel -->
    <section>
        <div class="midsection bg-cover d-flex align-items-center justify-content-center">
            <p class="mid-text">Lo shopping online per i tuoi viaggi!</p>
        </div>
    </section>
    <!-- Fine Sezione Immagine travel -->
    
    <!-- Slider con star e recensioni (2 sezioni)-->
    <section class="text-center my-5">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Dicono di noi...</h2>
            <p class="mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>         
            </p>
        </div>
    </section>
    
    <section class="elements">
        <div id="image-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">La migliore agenzia di viaggi online!</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Alberto P.</p>
                    </li>
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">Una garanzia per le ferie e gli spostamenti.</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Rosaria L.</p>
                    </li>
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">Viaggi e pacchetti sempre aggiornati!</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Mauro S.</p>
                    </li>
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">Servizio clienti fantastico ed impeccabile.</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Veronica H.</p>
                    </li>
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">Il mio sito preferito per organizzare vacanze last-minute!</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Fabrizio S.</p>
                    </li>
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">Pacchetti viaggi, ma user experience fantastica!</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Ivana L.</p>
                    </li>
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">Come sempre ottimi acquisti e prezzi convenienti!</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Ferruccio M.</p>
                    </li>
                    <li class="splide__slide d-flex flex-column align-items-center py-4 ps-3 pe-0 text-center min-vh-25 h-100">
                        <p class="h5 mb-2">I migliori nel settore!</p>
                        <p class="fst-italic text-muted mb-0 mt-auto">Michela I.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Fine Slider con star e recensioni (2 sezioni)-->
    
    
    
    <!-- Slider con paesi (2 sezioni)-->
    <section class="text-center my-5">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">...Dove viaggiamo...</h2>
            <p class="mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
                    <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849m.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1s-.458.158-.678.599"/>
                </svg>     
            </p>
        </div>
    </section>
    
    <section class="elements">
        <div id="countries-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/china.png')}}" alt="China" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Cina
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/azerbaijan.png')}}" alt="Azerbaijan" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Azerbaijan
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/united-states.png')}}" alt="USA" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            USA
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/qatar.png')}}" alt="Qatar" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Qatar
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/south-korea.png')}}" alt="South Korea" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Corea del Sud
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/brazil.png')}}" alt="Brazil" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Brasile
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/nicaragua.png')}}" alt="Nicaragua" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Nicaragua
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/cuba.png')}}" alt="Cuba" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Cuba
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/iceland.png')}}" alt="Iceland" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Islanda
                        </p>
                    </li>
                    <li class="splide__slide text-center">
                        <img src="{{asset('images_countries/switzerland.png')}}" alt="Switzerland" class="country-icon">
                        <p class="text-center text-justify fst-italic mt-3">
                            Svizzera
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>   
    <!-- Fine Slider con paesi (2 sezioni)-->
    
    <!-- Slider con servizi (2 sezioni)-->
    <section class="text-center my-5">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">...E quali servizi offriamo!</h2>
            <p class="mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
                </svg>   
            </p>
        </div>
    </section>
    
    <section class="elements container py-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 mb-2">
                <div class="service-box">
                    <p class="text-center text-justify mb-3">
                        Assistenza clienti disponibile H24 durante il viaggio
                    </p>
                    <p class="text-center text-justify mb-3">
                        Assicurazione sanitaria inclusa per i paesi di destinazione
                    </p>
                    <p class="text-center text-justify mb-3">
                        Trasferimenti aeroportuali gratuiti
                    </p>
                    <p class="text-center text-justify mb-3">
                        Accesso prioritario a escursioni e attrazioni locali
                    </p>
                    <p class="text-center text-justify mb-3">
                        Guida in lingua italiana per le visite pianificate ed extra
                    </p>
                    <p class="text-center text-justify mb-0">
                        Sim virtuali pronte ed attive prima della partenza incluse nel pacchetto
                    </p>
                </div>  
            </div>
        </div>
    </section>
    <!-- Fine Slider con servizi (2 sezioni)-->
    
    <!-- Sezione contattaci -->
    <section class="text-center my-5 pb-5">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Per tutte le altre informazioni contattaci!</h2>
            <p class="mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
                </svg>     
            </p>
        </div>
    </section>
    
    
    <section class="elements container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div>
                    <p class="text-center text-justify fst-italic">
                        Il nostro Customer Service è a completa disposizione per preventivi, informazioni e supporto per il viaggio.
                    </p>
                </div>  
            </div>
        </div>
    </section>
    <!-- Fine Sezione contattaci -->
    
    <!-- Script per collegamento alla CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <!-- Fine per collegamento alla CDN -->
    
    
</x-layout>
