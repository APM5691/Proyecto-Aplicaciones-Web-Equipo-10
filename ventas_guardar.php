<?php
session_start();
?>

<?php
if (
    !isset($_POST['monto_total']) || empty($_POST['monto_total'])
) {
    header('Location: ventas_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert into venta set
    monto_total = :monto_total
    , direcciones_id = :direcciones_id
    , clientes_id1 = :clientes_id1
fin;


$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':monto_total' => $_POST['monto_total']
    , ':direcciones_id' => $_POST['direcciones_id']
     , ':clientes_id1' => $_POST['clientes_id1']
]);
header('Location: ventas.php?info=Venta creada exitosamente');
?>