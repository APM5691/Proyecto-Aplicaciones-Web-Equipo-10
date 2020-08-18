<?php
require_once './conexion.php';

echo'<br>';

$sql=$conexion->query("Drop database aplicaciones_web");

header('Location: sql.php?info=base de datos borrada');
?>