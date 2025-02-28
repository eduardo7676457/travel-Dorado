<?php

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "login");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$usuario = $_POST["usuario"] ?? null;
$clave = $_POST["clave"] ?? null;

// Verificar si los datos no están vacíos
if ($usuario && $clave) {
    // Escapar los datos para prevenir SQL Injection
    $usuario = $conexion->real_escape_string($usuario);
    $clave = $conexion->real_escape_string($clave);

    // Consulta SQL
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
    
    // Ejecutar la consulta
    $resultado = $conexion->query($query);

    // Verificar si la consulta se ejecutó correctamente
    if ($resultado) {
        if ($resultado->num_rows > 0) {
            echo "¡Inicio de sesión exitoso!";
            // Aquí puedes redirigir a otra página, por ejemplo:
            header("Location: Pespeciales.html");
            exit();
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }
} else {
    echo "Por favor, completa todos los campos.";
}


?>


<!doctype html>
<html lang="en">
<head>
    <title>El Dorado Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css"> 
</head>



<body>


    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">El Dorado<span> Travel</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.html">Próximamente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contacto</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta-btn">
                            <a class="nav-link" href="member.php">Próximamente un login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    

    <section class="home-slider-loop-false inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('img/paris-at-spring.webp');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>Miembros</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END slider -->

    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="form-wrap overlap element-animate">
                    <h2 class="h2">Log in</h2>
                    <form method="post" action="" class="mx-auto">
                    
                  

                        <div class="form-group">
                            <input type="text" class="form-control" name="usuario" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="clave" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <p>¿Olvidaste tu contraseña? <a href="https://www.youtube.com/watch?v=yXhjFOvNyR4">Haz clic aquí</a></p>
                        </div>
                        <div class="form-group">
                            <input  type="submit" class="btn btn-primary btn-block py-3" value="Ingresar">
                        </div>
                    </form>

                  

                </div>
            </div>
        </div>
    </div>

    <!-- Loader -->
    <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/>
        </svg>
    </div>



    <!-- Scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
