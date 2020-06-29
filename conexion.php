<?php

$url = 'mysql:host=localhost; dbname=AmazingStore';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($url, $user, $password);
    echo 'Conectado';
} catch (PDOException $e) {
    print '¡Error!' + $e->getMessage() . '<br>';
}

function AbrirConexion()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "AmazingStore";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CerrarConexion($conn)
 {
 $conn -> close();
 }


  ?>
