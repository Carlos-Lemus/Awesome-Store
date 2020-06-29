<?php session_start()

?>
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
  <?php
  include "header.php";
  include "conexion.php";

  $conn = AbrirConexion();
  ?>

  <section >
    <div class="content-center" id="ingresar">

          <h1 style="color:black;">Habla con Nosotros!</h1>
          <h5 style="color:black;">Enviamos tus mensajes completando el siguiente formulario</h5>
        </div>
        <div class="container">
        <form action="contacto.php" method="post" enctype="multipart/form-data" id = "ingresar_">
         <div class="form-group">
             <label>Nombre Completo</label>
             <input type="text"  name="nombreC" class="form-control" placeholder="Ingresa tu Nombre Completo" required>
         </div>

        <div class="form-group">
             <label>Tipo de Mesaje</label>
             <select class="form-control" name ="tipoMSG">
             <option value="Sugerencia">Sugerencia</option>
             <option value="Pregunta">Pregunta</option>
             </select>
         </div>

         <div class="form-group">
             <label>Escribe tu Mensaje</label>
              <textarea class="form-control" id="ControlTextarea1" rows="5" name="Msg" required></textarea>
           </div>
         <div class="form-group">
             <label>Ingresa tu Correo electronico</label>
             <input type="email"  name="email_" class="form-control" placeholder="ejemplo@ejemplo.com" required>
         </div>

         <div class="form-group">
             <input type="submit" value="Enviar" class="btn btn-outline-dark btn-lg btn-block" name = "enviar">
         </div>
          </form>


       </div>
  </section>

<?php
include_once "conexion.php";

if (isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar')
{


if(isset($_POST['tipoMSG']))
{

  $nombreCompleto = $_POST['nombreC'];
  $tipomsg = $_POST['tipoMSG'];
  $msg = $_POST['Msg'];
  $email = $_POST['email_'];
  $sql_agregar = 'INSERT INTO mensajes(nombrecompleto, tipomsg, mensaje, email) VALUES(?, ?, ?, ?)';
  $agregar = $pdo->prepare($sql_agregar);
  $agregar->execute(array($nombreCompleto, $tipomsg, $msg, $email));
  echo "<script type='text/javascript'>alert('Gracias por enviarnos tu mensaje!');</script>";
}

}
 ?>
<?php include "footer.php" ?>
<script type="text/javascript" src="js/validaciondeinput.js"></script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="css/bootstrap-4.5.0/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/app.js"></script>
</body>

</html>
