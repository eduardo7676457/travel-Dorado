<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$db = "dorado";

$enlace = mysqli_connect($servidor, $usuario, $clave, $db);

if (!$enlace) {
  die("Error en la conexión: " . mysqli_connect_error());
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

    <!-- Theme Style -->
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
    
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/paris-at-spring.webp');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contactanos</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->

    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Dudas</h2>
              <span class="back-text">Directo</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="#" name="dorado" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nombre</label>
                  <input type="text" name="nombre"  aplaceholder="nombre" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Celular</label>
                  <input type="text" name="celular"  aplaceholder="celular" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Correo</label>
                  <input type="email" name="correo"  aplaceholder="correo" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Escribe tu duda</label>
                  <input type="text" name="texto"  aplaceholder="texto" class="form-control " cols="30" rows="8">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" name="registro" class="btn btn-primary">
                  
                </div>
              </div>
            </form>
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">No Encontramos</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>34 Street Name, City Name Here, United States</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+52 45354325</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>TravelDorado@gmail.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>


    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <a href="https://www.youtube.com/watch?v=KEI4qSrkPAs&list=RD-RJSbO8UZVY&index=23" target="_blank">
              <img src="img/a.jpeg" alt="Imagen de ejemplo" width="350"></a>
          </div>
          <div class="col-md-4 mb-5">
            <a href="https://www.youtube.com/watch?v=KEI4qSrkPAs&list=RD-RJSbO8UZVY&index=23" target="_blank">
              <img src="img/a.jpeg" alt="Imagen de ejemplo" width="350"></a>
          </div> 
          <div class="col-md-4 mb-5">
            <a href="https://www.youtube.com/watch?v=KEI4qSrkPAs&list=RD-RJSbO8UZVY&index=23" target="_blank">
              <img src="img/a.jpeg" alt="Imagen de ejemplo" width="350"> </a>
          </div>
        <div class="col-md-3">
     </div>
     

        
     <div class="row">
      <div class="col-12 text-md-center text-left">
        <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos reservados <br> acerca de la pagina <a href="https://google.com" target="_blank">Eduardo</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> <br> Demostraciones</p>
      </div>
    </div>
  </div>
</footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
  </body>

  <?php
  if (isset($_POST['registro'])) {
    // Recuperar los datos del formulario y limpiar entradas
    $nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
    $celular = mysqli_real_escape_string($enlace, $_POST['celular']);
    $correo = mysqli_real_escape_string($enlace, $_POST['correo']);
    $texto = mysqli_real_escape_string($enlace, $_POST['texto']);

    $insertar = "INSERT INTO datos (nombre, celular, correo, texto) 
                 VALUES ('$nombre', '$celular', '$correo', '$texto')";

  $ejecutar = mysqli_query($enlace, $insertar);
    if ($ejecutar) {
        echo "<script>alert('Sus datos han sido enviados');</script>";
    } else {
        echo "<script>alert('Error en el registro: " . mysqli_error($enlace) . "');</script>";
    }
    
  }
?>


</html>