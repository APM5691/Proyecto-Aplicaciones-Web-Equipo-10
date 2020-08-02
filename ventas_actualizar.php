<?php
if (
    !isset($_POST['id_venta'])
    || !isset($_POST['monto_total']) || empty($_POST['monto_total'])
    || !isset($_POST['direcciones_id']) || empty($_POST['direcciones_id'])
    || !isset($_POST['clientes_id1']) || empty($_POST['clientes_id1'])
    )
 {
    header('Location: ventas.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
update venta set
   monto_total = :monto_total
   , direcciones_id = :direcciones_id
   , clientes_id1 = :clientes_id1

where
   id_venta = :id_venta
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
   ':id_venta' => $_POST['id_venta']
   ,':monto_total' => $_POST['monto_total']
   , ':direcciones_id' => $_POST['direcciones_id']
   , ':clientes_id1' => $_POST['clientes_id1']
]);
 header('Location: ventas.php?info=Venta actualizada exitosamente');
 ?>