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
  <!-- fin del container -->

    <!-- SECCION DE LA TABLA -->
<section class="slider">

  <div class="content-center">
      <a type="submit" value="Modificar Productos" class="btn btn-outline-dark btn-lg" name = "Modificar"  href="#ingresar">Ingresar</a>
  <a type="submit" value="Modificar Productos" class="btn btn-outline-dark btn-lg" name = "Modificar"  href="#modificar">Modificar</a>

    <h1>Tabla Productos</h1>
  </div>
  <div class="mx-auto table-responsive" style="width: 80%;">
  <table class="table table-sm table-hover ">
  <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Modelo</th>
    <th scope="col">Categoria</th>
    <th scope="col">Precio</th>
    <th scope="col">Stock</th>
    <th scope="col">Nombre Imagen</th>
  </tr>
  </thead>
  <tbody>

  <?php

    $stmt = $pdo->prepare("SELECT * from productos");
             $stmt->execute();
            while ($mostrar = $stmt->fetch()){
  ?>

  <tr>
  <th scope="row"><?php echo $mostrar['id'] ?></th>
  <td><?php echo $mostrar['nombreP'] ?></td>
  <td><?php echo $mostrar['descripcionP'] ?></td>
  <td><?php echo $mostrar['modeloP'] ?></td>
  <td><?php echo $mostrar['categoriaP'] ?></td>
  <td><?php echo $mostrar['precioP'] ?></td>
  <td><?php echo $mostrar['stockP'] ?></td>
  <td><?php echo $mostrar['nombreimagenP'] ?></td>
  </tr>
  <?php
  }
  ?>

  </tbody>
  </table>
  </div>
</section>

    <!-- SECCION DE INGRESAR -->
<section >
  <div class="content-center" id="ingresar">

        <h1 style="color:black;">Ingresar Productos</h1>
      </div>
      <div class="container">
      <form action="AdministrarProductos.php" method="post" enctype="multipart/form-data" id = "ingresar_">
       <div class="form-group">
           <label>Nombre del Producto</label>
           <input type="text"  name="nombre" class="form-control" placeholder="Ingresa el Nombre"required>
       </div>
       <div class="form-group">
           <label>Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" required></textarea>
         </div>
       <div class="form-group">
           <label>Modelo del Producto</label>
           <input type="text"  name="modelo" class="form-control" placeholder="Ingresa el Modelo"required>
       </div> <div class="form-group">
           <label>Categoria</label>
           <select class="form-control" name ="_categoria">
           <option value="1">Telefonos</option>
           <option value="2">Tablets</option>
           <option value="3">Computadoras</option>
           </select>
       </div>
       <div class="form-group">
           <label>Precio</label>
           <input type="text" id ="precio_" name="precio" class="form-control" placeholder="Ingresa el Precio"required>
       </div>
       <div class="form-group">
           <label>Stock</label>
           <input type="text" id ="stock_" name="stock" class="form-control" placeholder="Ingresa la cantidad en Stock"required>
       </div>

          <div class="form-group">
        <h4>Seleccionar Imagen:</h4>
     <input  type="file" class="btn btn-default btn-file" name="Archivo"  required/>
      </div>

       <div class="form-group">
           <input type="submit" value="Ingresar" class="btn btn-info btn-block" name = "ingresar">
       </div>
        </form>
       <?php
       if (isset($_POST['ingresar']) && $_POST['ingresar'] == 'Ingresar')
       {
         $nombre_ = $_POST['nombre'];
         $descripcion_ = $_POST['descripcion'];
         $modelo_ = $_POST['modelo'];
         $cat_ = isset($_POST['_categoria']) ? $_POST['_categoria'] : false;
         //$cat_ = $_POST['categoria-'];
         $precio_ = $_POST['precio'];
         $stock_ = $_POST['stock'];

         if (isset($_FILES['Archivo']) && $_FILES['Archivo']['error'] === UPLOAD_ERR_OK)
         {

           $targetDir = "img/";
           $fileName = basename($_FILES["Archivo"]["name"]);
           $targetFilePath = $targetDir . $fileName;
           $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

           // comprueba si el archivo tiene una de las siguientes extensiones
               $allowTypes = array('jpg','png','jpeg','gif');

               if(in_array($fileType, $allowTypes)){
                   // Upload file to server
                   if(move_uploaded_file($_FILES["Archivo"]["tmp_name"], $targetFilePath)){

                        $sql = "INSERT INTO productos (id, nombreP, descripcionP, modeloP, categoriaP, precioP, stockP, nombreimagenP ) VALUES (NULL, '$nombre_', '$descripcion_', '$modelo_', '$cat_', '$precio_', '$stock_', '$fileName')";
                       //  $insert = $conn->query($sql);

                         if (mysqli_query($conn, $sql)) {

                          // $URL="http://localhost/Awesome-Store-master/productos.php";
                             $URL="http://localhost/Awesome/AdministrarProductos.php";

                           echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                           echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                           $statusMsg = "Producto Ingresado Correctamente, Presione Aquí para refrescar la tabla";
                           $tipo = "alert alert-success";
                                 } else {
                                   $statusMsg = "file ".$fileName."   n: ".$nombre_."   d: ".$descripcion_."   m: ".$modelo_."   c: ".$cat_."   p: ".$precio_."   st: ".$stock_ ;
                                   $tipo = "alert alert-warning";
                                   }


                   }else{
                       $statusMsg = "Ocurrió un error al subir el archivo";
                         $tipo = 'alert alert-warning';
                   }
               }else{
                   $statusMsg = 'Solo se permiten JPG, JPEG, PNG,  y GIF.';
                    $tipo = 'alert alert-warning';
               }
           }else{
               $statusMsg = 'Seleccione un archivo para subir.';
               $tipo = 'alert alert-danger';
           }}

    if (!empty($statusMsg))
      {
        echo '<p class="'.$tipo.'">'.$statusMsg.'</p>';
      }

       ?>

     </div>
</section>

<!-- SECCION DE Modificar-->
<section>
      <div class="content-center" id="modificar">
        <h1 style="color:black;">Modificar Datos</h1>
      </div>


      <div class="container">
      <form action="AdministrarProductos.php" method="post">
          <div class="form-group">
      <label>Seleccione el elemnto que desea modificar por id: </label>
            <select class="form-control" name ="idS_" id = "idS_" required>
               <option selected value="0"> Selecciona un ID</option>
      <?php

      $sql = "SELECT *  FROM productos";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            ?>
           <option value="<?php echo $row['id']; ?>"> <?php echo $row['id']; ?> --> <?php echo $row['nombreP']; ?></option>

            <?php
$idsss .=$row['id'];

          }
        }


      ?>
    </select>

     </div>

        <div class="form-group">
          <a href="#modificar">
          <input type="submit" value="Auto Llenar" class="btn btn-info" name = "_modificar">
          </a>
        </div>
        <?php
        $idSelect = "0";

            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['_modificar']))
                {
                  // Check if any option is selected
                  if(isset($_POST["idS_"]))
                  {
                    $idSelect = $_POST['idS_'];

                                if($idSelect == 0){
                                  echo '
                                  <div class="form-group">
                                  <p class="alert alert-warning">Seleccione Un elemento para Modificarlo</p>
                                     </div>';
                                }else {
                                  echo '
                                  <div class="form-group">
                                    <p class="alert alert-success">Datos del elemento Seleccionado id = '.$idSelect.' cargados. Favor Vuelva a Seleccionar el Elemento por ID</p>

                                     </div>';
                                }
                  //  <label>Datos del elemnto Seleccionado id = '.$idSelect.' cargados. Favor Vuelva a Seleccionar el Emento por ID</label>
                  }
                }

        ?>

 <div class="form-group">

<?php

$sql = "SELECT *  FROM productos WHERE id = $idSelect";
$idCopy = $idSelect;
$result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

          $_nom = $row['nombreP'];
          $_descrip = $row['descripcionP'];
          $_mod = $row['modeloP'];
          $_prec = $row['precioP'];
          $_sto = $row['stockP'];
  //  echo "<option value='".$row['id']."' >".$row['id']." --> ".$row['nombreP']."</option>";
  ?>
 <label>Nombre del Producto</label>
 <input type="text"  name="Nnombre" class="form-control" value="<?php echo $_nom;?>"  required>
</div>
<div class="form-group">
    <label>Descripcion</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Ndescripcion"   required><?php echo $_descrip;?></textarea>
  </div>
  <div class="form-group">
      <label>Modelo del Producto</label>
      <input type="text"  name="Nmodelo" class="form-control" value="<?php echo $_mod;?>"  required>
  </div>
  <div class="form-group">
      <label>Precio</label>
      <input type="text"  id ="Nprecio_" name="Nprecio" class="form-control" value= "<?php echo $_prec; ?>" required>
  </div>
  <div class="form-group">
      <label>Stock</label>
      <input type="text" id ="Nstock_" name="Nstock" class="form-control" value="<?php echo $_sto; ?>"  required>
  </div>

  <div class="form-group">
      <input type="submit" value="Modificar" class="btn btn-info btn-block" name = "Modificar_">
  </div>


<?php

}

  }else{
      echo '
    <div class="form-group">
        <p class="alert alert-danger">No ha seleccionado Ningun elemento</p>
    </div>';

  }

  if (isset($_POST['Modificar_']) && $_POST['Modificar_'] == 'Modificar')
  {
          // Check if any option is selected
          if(isset($_POST["idS_"]))
          {
            $idSelect = $_POST['idS_'];


            if($idSelect == 0){
              echo '
              <div class="form-group">
              <p class="alert alert-warning">Seleccione Un elemento para Modificarlo</p>
                 </div>';
            }else {
              echo '
              <div class="form-group">
                <p class="alert alert-success">Datos del elemnto Seleccionado id = '.$idSelect.' cargados. Favor Vuelva a Seleccionar el Emento por ID</p>
                <label>Datos del elemnto Seleccionado id = '.$idSelect.' cargados. Favor Vuelva a Seleccionar el Emento por ID</label>
                 </div>';
            }

          }
      else{
      $idSelect = "0";
       }
    $nombre_ = $_POST['Nnombre'];
    $descripcion_ = $_POST['Ndescripcion'];
    $modelo_ = $_POST['Nmodelo'];
    //$cat_ = $_POST['categoria-'];
    $precio_ = $_POST['Nprecio'];
    $stock_ = $_POST['Nstock'];

    $sqlUp = "UPDATE productos SET nombreP = '$nombre_', descripcionP = '$descripcion_', modeloP = '$modelo_', precioP = '$precio_', stockP = '$stock_' WHERE id = '$idSelect'";
   //  UPDATE `productos` SET `nombreP` = 'qqqqqqqq1', `descripcionP` = ', `modeloP` = , `precioP` = , `stockP` = ' WHERE `productos`.`id` = 14;

     if (mysqli_query($conn, $sqlUp)) {

      // $URL="http://localhost/Awesome-Store-master/productos.php";
         $URL="http://localhost/Awesome/AdministrarProductos.php";

        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

    // echo ' <div class="form-group">
    //  <label>'.$sqlUp.'</label>
      //   </div>';

             } else {
               $URL="http://localhost/Awesome/AdministrarProductos.php";

              echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
              echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
               echo ' <div class="form-group">
               <label>'.$sqlUp.'</label>
                  </div>';
               }



}

 ?>



      </form>
      </div>


</section>


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
