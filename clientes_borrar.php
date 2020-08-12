<?php
if (
    !isset($_GET['id_cliente']) || empty($_GET['id_cliente'])
) {
    header('Location: clientes_formularios.php?error=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';

$sql = <<<fin
delete from cliente where id_cliente=:id_cliente
fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':id_cliente' => $_GET['id_cliente']
    
]);
header('Location: clientes.php?info=Usuario borrado exitosamente');
?>