<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART SHOP</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('css/about.css') }}" rel="stylesheet" />


</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <!-- Logo -->
            <a class="navbar-brand" href="#!">
                <img src="{{ asset('path/to/your/logo.png') }}" alt="Your Logo" height="30" />
            </a>
            
            <!-- Navigation links -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">Contact</a></li>
                </ul>
                <!-- Login button -->
                <a class="btn btn-outline-dark" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </nav>

    
    <header>
        <h1>À Propos de SMART SHOP</h1>
    </header>

    <section>
        <h2>Notre Histoire</h2>
        <p>Bienvenue chez SMART SHOP, votre destination ultime pour les produits électroniques intelligents et innovants. Fondé en [année de fondation], nous sommes passionnés par la technologie et nous nous engageons à fournir à nos clients les dernières innovations.</p>

        <h2>Notre Mission</h2>
        <p>Notre mission est de simplifier la vie de nos clients en proposant des produits électroniques de haute qualité à des prix abordables. Nous croyons que la technologie devrait être accessible à tous, et c'est pourquoi nous nous efforçons de rendre les dernières avancées technologiques disponibles à chacun.</p>

        <h2>Nos Produits</h2>
        <p>SMART SHOP propose une large gamme de produits, notamment des smartphones, des gadgets intelligents, des accessoires électroniques et bien plus encore. Nous sélectionnons soigneusement chaque produit pour nous assurer qu'il répond aux normes de qualité les plus élevées et aux attentes de nos clients.</p>
    </section>

    <footer>
        &copy; 2024 SMART SHOP - Tous droits réservés
    </footer>

</body>
</html>
