<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$contrasena = "ciUb4OEq6eG]m]yN";
$basededatos = "runnick";

$conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se pudo conectar al servidor");
$db = mysqli_select_db($conexion, $basededatos) or die("No se pudo conectar a la base de datos");

if (isset($_POST['registro'])) {
  $nombre = $_POST['nombre'];
  $password = $_POST['password'];
  $email = $_POST['correo'];

  // Validar si el usuario o el correo ya existen en la base de datos
  $query = "SELECT * FROM usuario WHERE nombre_Usuario = '$nombre' OR correo = '$email'";
  $result = mysqli_query($conexion, $query);
  $count = mysqli_num_rows($result);

  if ($count > 0) {
    echo "El usuario o correo electrónico ya están en uso";
  } else {
    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO usuario (nombre_Usuario, password, correo) VALUES ('$nombre', '$password', '$email')";
    $insertResult = mysqli_query($conexion, $sql);

    if ($insertResult) {
      echo "Registro exitoso";
    } else {
      echo "Error al registrar";
    }
  }
}

if (isset($_POST['login'])) {
  $nombreUsuario = $_POST['nombre_usuario'];
  $password = $_POST['password'];

  // Verificar las credenciales del usuario en la base de datos
  $query = "SELECT * FROM usuario WHERE nombre_Usuario = '$nombreUsuario' AND password = '$password'";
  $result = mysqli_query($conexion, $query);
  $count = mysqli_num_rows($result);
  $_SESSION['nombre_usuario'] = $nombreUsuario;
  if ($count > 0) {
    session_start();

    // Asignar la variable de sesion
    $_SESSION["nombre_Usuario"] = $nombreUsuario;


    $var = "Inicio de sesión exitoso";
    echo "<script> alert('" . $var . "'); </script>";
    header("Location: php/publicaciones.php");
  } else {
    echo "Usuario o contraseña incorrectos";
  }
}

?>


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

    .titulo {
      border-radius: 50% 20% / 10% 40%;
      width: 80%;
      display: flex;
      justify-content: center;

      background: rgb(189, 189, 189);
      background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(255, 143, 38, 1) 0%, rgba(150, 126, 197, 1) 48%, rgba(0, 255, 222, 1) 100%);
      background-size: 300% 100%;
      animation: gradient 15s ease infinite;


    }

    .titulo div,
    input {

      float: left;
      background-color: #051937;
    }

    .titulo img {
      opacity: 4;
    }


    /* efectos para el contenedor de pantalla completa */
    #contenedor {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 70vh;
    }

    /* contenedor del login a la izquierda */
    #contenedorcentrado {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: row;

      min-width: 380px;
      max-width: 900px;
      width: 90%;

      background-image: url('../runnick-main/imagenes/sitio/foto.webp');
      background-position: center;
      background-size: cover;

      border-radius: 10px 10px 10px 10px;
      -moz-border-radius: 10px 10px 10px 10px;
      -webkit-border-radius: 10px 10px 10px 10px;

      -webkit-box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.15);
      box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.15);

      padding: 30px;
      box-sizing: border-box;
    }


    /* formulario de login */
    #login {
      width: 100%;
      max-width: 320px;
      min-width: 320px;
      padding: 30px 30px 50px 30px;

    }

    #login label {
      display: block;
      font-family: 'Overpass', sans-serif;
      font-size: 120%;
      color: #3c4245;

      margin-top: 15px;
    }

    #login input {
      font-family: 'Overpass', sans-serif;
      font-size: 110%;


      display: block;
      width: 100%;
      height: 40px;

      margin-bottom: 10px;
      padding: 5px 5px 5px 10px;

      box-sizing: border-box;

      border: none;
      border-radius: 3px 3px 3px 3px;
      -moz-border-radius: 3px 3px 3px 3px;
      -webkit-border-radius: 3px 3px 3px 3px;
    }

    #login input::placeholder {
      font-family: 'Overpass', sans-serif;

    }

    #login button {
      font-family: 'Overpass', sans-serif;
      font-size: 110%;

      width: 100%;
      height: 40px;
      border: none;

      border-radius: 3px 3px 3px 3px;
      -moz-border-radius: 3px 3px 3px 3px;
      -webkit-border-radius: 3px 3px 3px 3px;

      background-color: #dfcdc3;

      margin-top: 10px;
    }

    #login button:hover {
      background-color: #3c4245;

    }

    #derecho {
      text-align: center;
      width: 100%;



      padding: 20px 20px 20px 50px;
      box-sizing: border-box;
    }

    .titulo {
      font-size: 300%;

    }

    .logo-empresa img {
      width: 60%;
    }

    hr {
      border-top: 1px solid #8c8b8b;
      border-bottom: 1px solid #dfcdc3;

    }

    .pie-form {
      font-size: 90%;
      text-align: center;
      margin-top: 15px;
    }

    .pie-form a {
      display: block;
      text-decoration: none;
      color: #dfcdc3;
      margin-bottom: 3px;
    }

    .pie-form a:hover {
      color: #719192;
    }
  </style>
</head>
<!--  Cuerpo de la pagina -->

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#abriMenu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
    <div id="contenedor">

      <div id="contenedorcentrado">

        <div id="login">
          <h1>
            Login
          </h1>
          <form action="comunidad.php" method="post">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="nombre_usuario" placeholder="Ingrese su usuario" required>
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Ingrese su contraseña" required>
                  </div>
                  <br>
                  <div class="text"><a href="#">Olvido su contraseña</a></div>
                  <br>
                  <div class="button input-box">
                    <input type="submit" value="Enviar" name="login">
                  </div>
                </div>
              </form>

        </div>
        <div id="derecho">
          <h1>
            Registro
          </h1>
          <hr>
          <div class="pie-form">
            <form action="comunidad.php" method="post">
              <div class="input-boxes">
                <br>
                <div class="row gx-2">
                  <div class="form-floating col-md mb-3">
                    <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" required>
                    <label for="nombre">Nombre de usuario</label>
                  </div>
                </div>
                <div class="row gx-2">
                  <div class="form-floating col-md mb-3">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" required>
                    <label for="password">Contraseña</label>
                  </div>
                </div>
                <div class="row gx-2">
                  <div class="form-floating col-md mb-3">
                    <input name="correo" id="correo" type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                    <label for="correo">Correo</label>
                  </div>
                </div>

                <br>
                <div class="button input-box">
                  <input type="submit" value="Enviar" name="registro">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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