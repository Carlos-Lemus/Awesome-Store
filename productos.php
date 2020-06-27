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

  <?php include "header.php" ?>
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

  <section class="container product">
    <div class="frases">
      <h1>Teléfonos</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
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
                <a href="#" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
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
                <a href="#" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="frases">
      <h1>Tablets</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 center-image">
              <img src="https://images.samsung.com/is/image/samsung/nz-galaxy-tab-a-2019-101-sm-t510nzsdxnz-frontsilver-thumb-162007695" class="card-img" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Galaxy Tab A10</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                <a href="#" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 center-image">
              <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-air-select-201911_FMT_WHH?wid=2000&amp;hei=2000&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1573800147324" class="card-img" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Apple Ipad Air</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                <a href="#" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="frases">
      <h1>Computadoras</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 center-image">
              <img src="https://www.cqnetcr.com/74964-large_default/laptop-lenovo-ideapad-s340-156-ryzen-5-8gb-2tb.jpg" class="card-img" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Laptop Lenovo Ideapad S430</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                <a href="#" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 center-image">
              <img src="https://media.nidux.net/pull/599/800/3310/123114-product-5e1657ea2bd97-nbhp6qw11la-1.jpg" class="card-img" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Laptop Portatil Hp 14</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                <a href="#" class="btn btn-primary btn-block">Ver más</a>
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