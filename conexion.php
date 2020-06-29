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
    