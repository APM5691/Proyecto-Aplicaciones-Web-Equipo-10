<?php
require('./vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

try {
    $conexion = new PDO('mysql:host=' . $_ENV['DB_HOST_ADMIN'] . ';charset=utf8;port=' . $_ENV['DB_PORT'] . ';dbname=' . $_ENV['DB_DATABASE_ADMIN'], $_ENV['DB_USERNAME_ADMIN'], $_ENV['DB_PASSWORD_ADMIN']);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexion establecida';
    
} catch(PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>