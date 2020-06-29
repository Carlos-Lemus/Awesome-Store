<?php session_start() ?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />

  <link rel="manifest" href="site.webmanifest" />
  <link rel="apple-touch-icon" href="icon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- Boostrap4 -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/bootstrap-4.5.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/all.min.css" />

  <!-- Estilos Propios -->
  <link rel="stylesheet" href="./css/style.css" />
  <meta name="theme-color" content="#fafafa" />
</head>

<body>
  <div class="container-fluid bg-light fixed-top">
    <div class="container">
      <nav class="navbar text-center navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="logotipo" class="img-fluid" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-item nav-link" href="#"><i class="fas fa-home"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="productos.php"><i class="fas fa-mobile"></i> Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="contacto.php">
                <i class="fas fa-address-book"></i> Contactenos</a>
            </li>

            <?php if (isset($_SESSION['admin'])) : ?>
              <li class="nav-item">
                <a title="Logout" class="nav-item nav-link text-danger" href="cerrar.php">
                <i class="fas fa-sign-out-alt"></i>
                </a>
              </li>
            <?php endif ?>

            <?php if (!isset($_SESSION['admin'])) : ?>
              <li class="nav-item">
                <a id="iniciar" title="Sign in" class="text-primary nav-item nav-link" href="#" data-toggle="modal" data-target="#staticBackdrop">
                  <i class="fas fa-sign-in-alt">Iniciar Sesion</i>
                </a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- fin del container -->

  <section class="slider">
    <div class="content-center">
      <h1>Visita todos nuestros Productos</h1>
      <p>
        Te ofrecemos una amplia variedad de dispositivos tecnologicos que van
        desde telefonos inteligentes, hasta computadoras con exelente
        rendimiento, no esperes más y échales un vistazo a nuestros productos.
        <br />!Te Esperamos¡
      </p>
      <a href="productos.php" class="btn btn-lg btn-outline-light">
        Explora Ahora <i class="far fa-caret-square-right"></i>
      </a>
    </div>
  </section>

  <section class="">
    <div class="bg-light">
      <div class="frases">
        <h2 class="mb-4" style="font-weight: 600; font-size: 48px;">
          Elige la mejor calidad
        </h2>
        <p>
            Somos una empresa dedicada a la tecnologia, por eso queremos
            ofrecerte la mejor calidad a precios accesibles.
            Puedes visitar nuestra página de productos para visualizar a
            detalle todos los productos que podemos ofrecerte.
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-5 text-center align-self-center">
          <div>
            <h1 class="font-weight-bolder">
              Disfruta de lo mejor en tecnología
            </h1>
            <p class="lead">
              Somos una empresa dedicada a la tecnologia, por eso queremos
              ofrecerte la mejor calidad a precios accesibles.
            </p>
            <p class="lead">
              Puedes visitar nuestra página de productos para visualizar a
              detalle todos los productos que podemos ofrecerte.
            </p>
            <a href="productos.php" class="btn btn-primary btn-lg">Explorar</a>
          </div>
        </div>

        <div class="col-md-7">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img_slider1.jpeg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Productos Nuevos</h5>
                  <p>
                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img_slider2.jpeg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Los Mejores precios</h5>
                  <p>
                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img_slider3.jpeg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Las Mejores Ofertas</h5>
                  <p>
                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                  </p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-dark registro">
    <div class="container">
      <h2 class="text-center text-white display-4 font-weight-normal">
        Registrate
      </h2>

      <form action="registro.php" method="POST">
        <div class="row pt-3">
          <div class="col-md-3">
            <div class="form-group">
              <input type="text" name="username" class="form-control form-control-lg" placeholder="Ingresa tu nombre" />
            </div>
          </div>
          <div class="col-md-3">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Ingresa tu email" />
          </div>
          <div class="col-md-3">
            <input type="password" name="contraseña" class="form-control form-control-lg" placeholder="Ingresa contraseña" />
          </div>
          <div class="col-md-3">
            <input type="submit" value="Enviar" class="btn btn-success btn-block btn-lg" />
          </div>
        </div>
      </form>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/tablet.jpeg" alt="" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">
              Tablets
            </h5>
            <p>
              Ofrecemos Telefonos de las siguientes marcas:
              <!-- Ofrecemos telefonos con exelentes caracteristicas, tanto en hardware como en software, en nuestras sucursales contamos con las siguientes marcas:   -->
            </p>
            <ul>
              <li>Accer</li>
              <li>Ipad</li>
              <li>Samsung</li>
            </ul>
            <a href="productos.php #tablets" class="btn btn-primary btn-block">Ver más</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/computadora.jpeg" alt="" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">
              Computadoras
            </h5>
            <p>
              Ofrecemos computadoras de las siguientes marcas:
              <!-- Ofrecemos telefonos con exelentes caracteristicas, tanto en hardware como en software, en nuestras sucursales contamos con las siguientes marcas:   -->
            </p>
            <ul>
              <li>Hp</li>
              <li>Lenovo</li>
              <li>Dell</li>
            </ul>
            <a href="productos.php #laptops" class="btn btn-primary btn-block">Ver más</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/telefono.jpeg" alt="" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">
              Teléfonos
            </h5>
            <p>
              Ofrecemos Telefonos de las siguientes marcas:
              <!-- Ofrecemos telefonos con exelentes caracteristicas, tanto en hardware como en software, en nuestras sucursales contamos con las siguientes marcas:   -->
            </p>
            <ul>
              <li>Sansung</li>
              <li>Apple</li>
              <li>Xiomi</li>
            </ul>
            <a href="productos.php #telefonos" class="btn btn-primary btn-block">Ver más</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php" ?>
  <?php include "registro.php" ?>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="css/bootstrap-4.5.0/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <script>
    $(document).ready(function() {
      $('#registro').click(function(e) {
        e.preventDefault();
        $('#collapseExample').removeClass('show');
        $('.modal-header').css({
          background: 'red',
          color: 'white'
        });
        $('.modal-title').text('Regístrate');
      });

      $('#iniciar').click(function(e) {
        e.preventDefault();
        $('.modal-title').text('Iniciar Sesión');
        $('.modal-header').css({
          background: 'blue',
          color: 'white'
        });
      });

      $('#login').click(function(e) {
        e.preventDefault();
        $('#collapseExample2').removeClass('show');
        $('.modal-header').css({
          background: 'blue',
          color: 'white'
        });
      });
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("set", "anonymizeIp", true);
    ga("set", "transport", "beacon");
    ga("send", "pageview");
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
