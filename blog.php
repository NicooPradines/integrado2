<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!--  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!--  Estilos -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<!--  Cuerpo de la pagina -->

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#abriMenu"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="imagenes/logo.jpg"></img></a>
                <div class="collapse navbar-collapse justify-content-center" id="abriMenu">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entrenamiento.php">Planes de Entrenamiento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comunidad.php">Comunidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tienda.php">Tienda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="titulo" style="background-image: url('imagenes/sitio/blog.gif'); background-position: center;
    background-size: cover;
    background-repeat:no-repeat ;
    max-width: 100%;">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Blog</h1>
                    <p style="color: black;">El blog es una sección importante de una página web de running. Aquí, se
                        pueden publicar artículos sobre
                        entrenamiento, nutrición, equipo y ropa para correr, y cualquier otra cosa relacionada con el
                        mundo del running</p>
                    <p>
                        <a href="#entrenamiento" class="btn btn-primary my-2">Entrenamiento</a>
                        <a href="#nutricion" class="btn btn-primary my-2">Nutricion</a>
                        <a href="#indumentaria" class="btn btn-primary my-2">Indumentaria</a>
                    </p>
                </div>
            </div>
        </section>
        <div class="container px-4 py-5" id="entrenamiento">
            <h1 class="pb-2 border-bottom" _msttexthash="533741" _msthash="23">Entrenamientos</h1>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/entrenamientos/negro.jpeg'); background-size: 100% 100%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="654680" _msthash="24">Cómo
                                hacer fartlek en tus entrenamientos de running</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                    <!-- Info https://www.asics.com/ar/es-ar/frontrunner/articles/como-hacer-fartlek-en-tus-entrenamientos-de-running#:~:text=%C2%BFQu%C3%A9%20es%20un%20fartlek%3F,acostumbrarse%20a%20la%20exigencia%20energ%C3%A9tica.-->
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/entrenamientos/test.jpg'); background-size: 100% 100%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="1798992" _msthash="28">Qué
                                es el test de Cooper, tabla y cómo hacerlo</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>

                                <!-- Info https://www.sport.es/labolsadelcorredor/que-es-el-test-de-cooper-tabla-y-como-hacerlo/-->

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/entrenamientos/tronco.jpg'); background-size: 100% 100%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="1065376" _msthash="32">Qué
                                es el test de Well y cómo hacerlo</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-4 py-5" id="nutricion">
            <h1 class="pb-2 border-bottom" _msttexthash="533741" _msthash="23">Nutricion</h1>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/nutricion/avena.jpg'); background-size: 110% 110%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="654680" _msthash="24">Descubre la avena y la importancia de incluirla en nuestra dieta diaria</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                    <!-- Info https://www.asics.com/ar/es-ar/frontrunner/articles/como-hacer-fartlek-en-tus-entrenamientos-de-running#:~:text=%C2%BFQu%C3%A9%20es%20un%20fartlek%3F,acostumbrarse%20a%20la%20exigencia%20energ%C3%A9tica.-->
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/nutricion/bebida.webp'); background-size: 110% 110%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="1798992" _msthash="28">Por qué se desaconseja el consumo de bebidas energizantes en menores de edad</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>

                                <!-- Info https://www.sport.es/labolsadelcorredor/que-es-el-test-de-cooper-tabla-y-como-hacerlo/-->

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/nutricion/alimentos-maraton.jpg'); background-size: 100% 110%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="1065376" _msthash="32">Qué comer después de correr una maratón</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-4 py-5" id="indumentaria">
            <h1 class="pb-2 border-bottom" _msttexthash="533741" _msthash="23">Indumentaria</h1>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/indumentaria/nike.gif'); background-size: 100% 100%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="654680" _msthash="24">Las
                                zapatillas Nike que no son de ‘running’ pero que vas a correr a por ellas</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                    <!-- Info https://www.cosmopolitan.com/es/moda/novedades-moda/a30804277/zapatillas-nike-running/-->
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/indumentaria/lompa.webp'); background-size: 100% 100%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="1798992" _msthash="28">
                                Pantalones de running de adidas 2023</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>

                                <!-- Info https://www.sport.es/labolsadelcorredor/que-es-el-test-de-cooper-tabla-y-como-hacerlo/-->

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('imagenes/indumentaria/JOMA.jpg'); background-size: 100% 100%;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" _msttexthash="1065376" _msthash="32">Las
                                remeras termicas JOMA retiene el calor corporal en tu interior</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="imagenes/logo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white" _mstalt="138918" _msthash="25">
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <button class="btn btn-success">Leer Más</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="www.google.com.ar"><i class="bi bi-facebook"
                        style="font-size: 2rem; color: cornflowerblue;"></i></a>
                <i class="bi bi-whatsapp" style="font-size: 2rem; color: green;"></i>
                <i class="bi bi-twitter" style="font-size: 2rem; color: skyblue;"></i>
                <i class="bi bi-instagram" style="font-size: 2rem; color: rgb(223, 16, 33);"></i>
                <i class="bi bi-linkedin" style="font-size: 2rem; color: blue;"></i>
                <i class="bi bi-github" style="font-size: 2rem; color: black;"></i>
            </p>
            <p class="mb-1">Pagina realizada por Nicolas Pradines</p>
        </div>
    </footer>


    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>