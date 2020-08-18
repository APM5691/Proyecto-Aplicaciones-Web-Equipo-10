<?php

require_once './conexion.php';

$id_cliente=$_GET['cambiar'];

$sql = <<<fin
update cliente set
 password = :password

where
    id_cliente = :id_cliente
fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([

 ':password' => password_hash( $_POST['password'], PASSWORD_BCRYPT,['cost'=>12])
 , ':id_cliente' => $_POST['id_cliente']

]);
 header('Location: inicio.php?info=Contraseña actualizado exitosamente');
 ?>