<?php
require_once './conexion.php';

$sql = <<<fin
insert into venta set
   sav=:sav

fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre_cliente' => $_POST['nombre_cliente']

    
]);

$_SESSION
?>