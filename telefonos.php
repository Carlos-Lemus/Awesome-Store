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
    <link rel="stylesheet" href="./css/style2.css" />
    <meta name="theme-color" content="#fafafa" />
</head>

<body>

    <?php include "header.php" ?>
    <section class="product container">
        <div class="frases">
            <h1>Conoce nuestro catálogo de Teléfonos Celulares</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 center-image">
                            <img src="https://falabella.scene7.com/is/image/FalabellaCO/3820957_1?q=i?wid=800&hei=800&qlt=70" class="card-img" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Samsung Galaxy S10</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                                <a href="#" class="btn btn-primary btn-block">Adquirir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters card-deck">
                        <div class="col-md-4 center-image">
                            <img src="https://samsungmx.vteximg.com.br/arquivos/ids/160779-600-600/SM-N975FZKDACR-2000_1.jpg?v=637030332057570000" class="card-img" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sansung Galaxy Note10</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                                <a href="#" class="btn btn-primary btn-block">Adquirir</a>
                            </div>
                        </div>
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