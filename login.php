<?php
session_start();
include_once "conexion.php";
$username = $_POST['usuario'];
$contraseña = $_POST['clave'];

$mostrar = $pdo->prepare('SELECT * FROM usuarios WHERE username=?');
$mostrar->execute(array($username));
$resultado = $mostrar->fetch();

$tipo_ = $resultado['tipo'];

if(!$resultado){
//  echo "<script type='text/javascript'>alert(' Este nombre de usuario no está registrado);</script>";
  header('location: index.php');
    die();
}else{
  if(password_verify($contraseña, $resultado['contraseña'])){
    if($tipo_ == 1){
      $_SESSION['admin'] = $username;
      $_SESSION['usertype'] = 1;
      header('location: index.php');

    }else{

      $_SESSION['admin'] = $username;
      $_SESSION['usertype'] = 2;
      header('location: index.php');
    }

  }else{
    //  echo 'No iguales';
    //   echo "<script type='text/javascript'>alert('Contraseña incorrecta');</script>";
        header('location: index.php');

      die();
  }
  /*
    if(password_verify($contraseña, $resultado['contraseña'])){
      $_SESSION['admin'] = $username;
      header('location: index.php');
        // echo 'Chivo';
    }else{
        echo 'No iguales';
        die();
    }*/
}
