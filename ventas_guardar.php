<?php
print_r($_GET);

if (
    !isset($_GET['monto_total']) || empty($_GET['monto_total'])
) {
    header('Location: ventas_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert into venta set
    monto_total = :monto_total
    , clientes_id1 = :clientes_id1
fin;


$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':monto_total' => $_GET['monto_total']
     , ':clientes_id1' => $_GET['clientes_id1']
]);
header('Location: ventas.php?info=Venta creada exitosamente');
?>