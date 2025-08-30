<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos - Heladería Dulce Luna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('styleproductos.css') }}">
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
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-3 shadow-sm ">
                    <h5 class="mb-3">Filtrar Productos</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="#" class="text-decoration-none">Precio</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-decoration-none">Categoría</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-decoration-none">Nombre</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-decoration-none">Sabor</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Productos</h2>
                    <div class="d-flex align-items-center">
                        <span class="me-2">Ordenar</span>
                        <i class="fas fa-filter"></i>
                    </div>
                </div>
                {{-- lista productos --}}
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col">
                        <div class="card h-100 product-card">
                            <img src="{{ asset('img/crepa trop.png') }}" class="card-img-top" alt="Crepa Tropical">
                            <div class="card-body text-center">
                                <h5 class="card-title">Crepa Tropical</h5>
                                <p class="card-text">₡2700</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card">
                            <img src="img/crepas-especiales.jpg" class="card-img-top" alt="Crepas Especiales">
                            <div class="card-body text-center">
                                <h5 class="card-title">Crepas Especiales</h5>
                                <p class="card-text">₡3000</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card">
                            <img src="img/cheesecake.jpg" class="card-img-top" alt="Cheesecake">
                            <div class="card-body text-center">
                                <h5 class="card-title">Cheesecake</h5>
                                <p class="card-text">₡1900</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card placeholder-card">
                            <div class="placeholder-img"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastel de Churchill</h5>
                                <p class="card-text">₡1900</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card placeholder-card">
                            <div class="placeholder-img"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastel Napolitano</h5>
                                <p class="card-text">₡1900</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card placeholder-card">
                            <div class="placeholder-img"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastel de Zanahoria</h5>
                                <p class="card-text">₡1000</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card placeholder-card">
                            <div class="placeholder-img"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Tres Leches</h5>
                                <p class="card-text">₡1500</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card placeholder-card">
                            <div class="placeholder-img"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Enchilada</h5>
                                <p class="card-text">₡900</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 product-card placeholder-card">
                            <div class="placeholder-img"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastel de Pollo/Carne</h5>
                                <p class="card-text">₡900</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- lista productos --}}
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
