<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina principal</title>
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
  
    <div class="album py-5">
   
      <div class="container" id="noticias">
        <h1>Noticias</h1>
        <div class="container mt-4">
          <div class="row">
            <div class="col-lg-9">
              <!-- Productos -->
              <h3>Productos Destacados</h3>
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <img src="imagenes/tienda/pack.png" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                      <h5 class="card-title">Pack De Soquetes Sox, En Caja De 7 Pares</h5>
                      <p class="card-text">Siete pares del art. JE101C para hombre o DA246C para damas Puño doble elastizado, sin caña, tejido liso, talón en “Y”elastizado, remallado plano, talón y puntera reforzados. Ajuste y calce perfectos gracias al agregado de Spandex.</p>
                      <b>Precio: $5000</b>
                      <br><br>
                      <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <img src="imagenes/tienda/cuello.png" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                      <h5 class="card-title">Cuello Salomon - Necktube Nasa - Ski - Running - Multifunción</h5>
                      <p class="card-text">

                        Cuello multifuncional súper liviano. Te acompañarán tanto para un día de ski en la montaña como para correr por donde quieras.
                        
                        Diferentes funciones
                        Producto que se puede utilizar tanto para tu cuello como para tu cabeza. Probá las diferentes maneras.
                        
                        Confort
                        Tela con estiramiento en las cuatro direcciones para mayor comodidad.
                        
                        Diseño
                        Estampa que le dan un diseño diferente para el consumidor.
                        
                      </p>
                      <b>Precio: $2000</b>
                      <br><br>
                      <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <img src="imagenes/tienda/guantes.png" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                      <h5 class="card-title">Guantes Running Entrenamiento Nike Drifit Light</h5>
                      <p class="card-text">La tecnología Dri-FIT te ayuda a mantenerte seco y cómodo.
                        El tejido Fleece ligero ofrece calidez que no te detendrá.
                        El material compatible con la pantalla táctil en el índice y el pulgar facilita el uso de su teléfono mientras corre.
                        El puño ajustado ayuda a retener el calor.</p>
                      <b>Precio: $25000</b>
                      <br><br>
                      <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="www.google.com.ar"><i class="bi bi-facebook" style="font-size: 2rem; color: cornflowerblue;"></i></a>
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