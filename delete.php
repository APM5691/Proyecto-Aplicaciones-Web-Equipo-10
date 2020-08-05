<?php
require_once './conexion.php';

$sql=$conexion->query("Drop database aplicaciones_web");

header('Location: sql.php?info=base de datos borrada');
?>