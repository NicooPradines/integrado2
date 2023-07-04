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
    <section class="titulo">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Planes de entrenamiento</h1>
          <h4 class="fw-light">Todos nuestros planes son vistos por un profesional</h4>
          <form class="row g-3 needs-validation"> 
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Seleccione una distancia</label>
              <select class="form-select" id="validationCustom04" required>
                <option>3K</option>
                <option>5K</option>
                <option>10K</option>
                <option>15K</option>
                <option>21K</option>
                <option>30K</option>
                <option>42K</option>
              </select>
              <br>
              <label for="validationCustom04" class="form-label">Seleccione un promedio</label>
              <select class="form-select" id="validationCustom04" required>
                <option>3 - 3:30 por km</option>
                <option>4 - 4:30 por km</option>
                <option>5 - 5:30 por km</option>
                <option>6 - 6:30 por km</option>
                <option>7 - 7:30 por km</option>
                <option>8 - 8:30 por km</option>
              </select>
        
            </div>
         
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </section>
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