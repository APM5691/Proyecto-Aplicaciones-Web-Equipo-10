<?php
require_once './conexion-admin.php';
echo"<br>";
$nombre="";
$nombre=$_GET['nombre'];

 $sql=$conexion->query("CREATE DATABASE aplicaciones_web;");
 $sql2=$conexion->query("use database aplicaciones_web");
exec ('C:\\xampp\\mysql\\bin\\mysql.exe --user='.$_ENV['DB_USERNAME'].'  --password='.$_ENV['DB_PASSWORD'].' '.' '.' '.' '.' aplicaciones_web < C:\xampp\htdocs\Proyecto-Aplicaciones-Web\backup/'.$nombre);

header('Location: sql.php?info=Restauracion completa');
?>