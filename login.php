<?php
session_start();
include_once "conexion.php";
$username = $_POST['usuario'];
$contraseña = $_POST['clave'];

$mostrar = $pdo->prepare('SELECT * FROM usuarios WHERE username=?');
$mostrar->execute(array($username));
$resultado = $mostrar->fetch();

if(!$resultado){
    echo 'No existe usuario';
    die();
}else{
    if(password_verify($contraseña, $resultado['contraseña'])){    
        $_SESSION['admin'] = $username;
        header('location: index.php');
        // echo 'Chivo';
    }else{
        echo 'No iguales';
        die();
    } 
}
