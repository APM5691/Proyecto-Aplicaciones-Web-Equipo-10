<?php
require_once './conexion.php';
echo"<br>";
$nombre="";
$nombre=$_GET['nombre'];
unlink ("./backup/".$nombre);
header('Location: sql.php?info=Se borro '.$nombre);
?>