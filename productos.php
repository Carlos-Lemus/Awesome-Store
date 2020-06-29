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
  <!-- <link rel="stylesheet" href="./css/style.css" /> -->
  <meta name="theme-color" content="#fafafa" />

  <style>
    .nav-link {
      margin: 10px;
    }

    .frases {
      max-width: 700px;
      text-align: center;
      padding: 40px 0;
      margin: auto;
    }

    .center-image {
      display: flex;
      align-items: center;
    }

    .frases h1 {
      font-size: 48px;
      font-weight: 600;
    }

    .slider {
      min-height: 650px;
      background-image: url("./img/bg-3.png");
      background-size: cover;
    }

    .content-center {
      max-width: 600px;
      margin: auto;
      color: white;
      text-align: center;
      padding: 165px 0;
    }

    .btn {
      border-radius: 0;
    }

    .content-center h1 {
      font-weight: 800;
      font-size: 50px;
    }

    .content-center p {
      font-size: 18px;
      margin: 20px 0;
    }

    .enlaces .list-inline-item>a {
      text-decoration: none;
      color: white;
      /* font-size: 18px;     */
      margin: 0 10px;
    }

    .enlaces .list-inline-item>a:hover {
      font-size: 18px;
    }
  </style>
</head>

<body>

  <?php include "header.php";
        include "conexion.php";
  ?>

  <?php if (isset($_SESSION['admin'])) : ?>
    <section class="slider">
      <div class="content-center">
        <h1>Siente la calidad de Nuestros Productos</h1>
        <h2 class="mt-3"> Te damos un vistazo de lo que ofrece de <span class="font-weight-bold">Amazing Store</span>
          <br>
          <span class="font-weight-bolder mt-4 badge badge-danger ">Mira lo que tenemos para ti</span>
        </h2>
      </div>
    </section>
  <?php endif ?>

  <?php if (!isset($_SESSION['admin'])) : ?>
    <section class="slider">
      <div class="content-center">
        <h1>¿Aún no te has Registrado?</h1>
        <p>
          Regístrate para mantenerte al tanto de todos nuestros productos y de
          nuestras ofertas exclusivas por tiempo limitado, no te los pierdas
          <br />!Regístrate ahora¡
        </p>
        <button class="btn btn-lg btn-danger" type="button" data-toggle="modal" data-target="#staticBackdrop">
          Regístrate
        </button>
      </div>
    </section>
  <?php endif ?>

  <section class="container product">
    <div class="frases" id = "telefonos">
      <h1>Teléfonos</h1>
    </div>
    <div class="row">

      <?php
            $stmt = $pdo->prepare("SELECT *  FROM productos WHERE categoriaP = 1");
                     $stmt->execute();
                    while ($row = $stmt->fetch()){
                       $imagen = 'img/'.$row["nombreimagenP"];
                       echo '<div class="col-md-6">
                         <div class="card mb-3" style="max-width: 540px;">
                           <div class="row no-gutters">
                             <div class="col-md-4 center-image">
                               <img src="'.$imagen.'" class="card-img" alt="..." />
                             </div>
                             <div class="col-md-8">
                               <div class="card-body">
                                <h5 class="card-title">'.$row["nombreP"].'</h5>
                                <p class="card-text">'.$row["descripcionP"].'</p>
                                <p class="card-text">
                                  <small class="text-muted">Modelo: '.$row["modeloP"].'</small><br>
                                  <small class="text-muted">Precio: '.$row["precioP"].'</small><br>
                                  <small class="text-muted">Stock: '.$row["stockP"].'</small>
                                </p>
                                <a href="#" class="btn btn-primary btn-block">Agregar al Carrito</a>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>';
                              }

                    ?>
    </div>

    <div class="frases" id = "tablets">
      <h1>Tablets</h1>
    </div>
    <div class="row">
      <?php

    $stmt = $pdo->prepare("SELECT *  FROM productos WHERE categoriaP = 2");

             $stmt->execute();

            while ($row = $stmt->fetch()){
         $imagen = 'img/'.$row["nombreimagenP"];
         echo '<div class="col-md-6">
           <div class="card mb-3" style="max-width: 540px;">
             <div class="row no-gutters">
               <div class="col-md-4 center-image">
                 <img src="'.$imagen.'" class="card-img" alt="..." />
               </div>
               <div class="col-md-8">
                 <div class="card-body">
                  <h5 class="card-title">'.$row["nombreP"].'</h5>
                  <p class="card-text">'.$row["descripcionP"].'</p>
                  <p class="card-text">
                    <small class="text-muted">Modelo: '.$row["modeloP"].'</small><br>
                    <small class="text-muted">Precio: '.$row["precioP"].'</small><br>
                    <small class="text-muted">Stock: '.$row["stockP"].'</small>
                  </p>
                  <a href="#" class="btn btn-primary btn-block">Agregar al Carrito</a>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>';
        }

      ?>
    </div>

    <div class="frases" id = "laptops">
      <h1>Computadoras</h1>
    </div>
    <div class="row">
      <?php
      $stmt = $pdo->prepare("SELECT *  FROM productos WHERE categoriaP = 3");

               $stmt->execute();

              while ($row = $stmt->fetch()){
     $imagen = 'img/'.$row["nombreimagenP"];
     echo '<div class="col-md-6">
       <div class="card mb-3" style="max-width: 540px;">
         <div class="row no-gutters">
           <div class="col-md-4 center-image">
             <img src="'.$imagen.'" class="card-img" alt="..." />
           </div>
           <div class="col-md-8">
             <div class="card-body">
              <h5 class="card-title">'.$row["nombreP"].'</h5>
              <p class="card-text">'.$row["descripcionP"].'</p>
              <p class="card-text">
                <small class="text-muted">Modelo: '.$row["modeloP"].'</small><br>
                <small class="text-muted">Precio: '.$row["precioP"].'</small><br>
                <small class="text-muted">Stock: '.$row["stockP"].'</small>
              </p>
              <a href="#" class="btn btn-primary btn-block">Agregar al Carrito</a>
              </div>
              </div>
              </div>
              </div>
              </div>';
    }

  ?>
    </div>
  </section>

  <?php include "footer.php" ?>
  <?php include "registro.php" ?>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="css/bootstrap-4.5.0/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/app.js"></script>


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
