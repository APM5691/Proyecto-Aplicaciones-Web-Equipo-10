<?php

require_once './conexion.php';

$nombre="";

$nombre=$_GET['nombre'];

unlink ("./backup/".$nombre);

header('Location: sql.php?info=Se borro '.$nombre);

?>