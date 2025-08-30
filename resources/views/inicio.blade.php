<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heladería Dulce Luna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('styleInicio.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/4.png') }}" alt="Logo" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotross</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/1.jpg') }}" class="d-block w-100 rounded-5" alt="Imagen 1 del carrusel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/2.jpg') }}" class="d-block w-100 rounded-5" alt="Imagen 2 del carrusel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/3.jpg') }}" class="d-block w-100 rounded-5" alt="Imagen 3 del carrusel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/logo t.png') }}" alt="Heladería Dulce Luna Logo" class="img-fluid">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="fs-2">¿Antojo de algo refrescante y delicioso?</h3>
                <p class="fs-3">En Heladería Dulce Luna, creamos momentos mágicos con cada cucharada. Date el gusto
                    que mereces y
                    déjate llevar por la experiencia más dulce.</p>
                <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>

    <div class="container my-5 text-center">
        <h2>Categorías</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/h1.png') }}" class="card-img-top" alt="Helados">
                    <div class="card-body">
                        <h5 class="card-title">Helados</h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/b1.png') }}" class="card-img-top" alt="Batidos">
                    <div class="card-body">
                        <h5 class="card-title">Batidos</h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/p1.png') }}" class="card-img-top" alt="Postres">
                    <div class="card-body">
                        <h5 class="card-title">Postres</h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section py-4 mt-5">
        <div class="container text-center">
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-map-marker-alt me-2"></i> <span>Siquirres, Limon</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-phone me-2"></i> <span>8888 8888</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope me-2"></i> <span>Correo@gmail.com</span>
                </div>

                <div class="social-icons d-flex align-items-center">
                    <a href="#" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
