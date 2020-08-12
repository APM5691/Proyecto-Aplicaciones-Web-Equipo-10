<?php
print_r($_GET);

if (
    !isset($_GET['sav']) || empty($_GET['sav']) 
   // ||  !isset($_GET['monto_total']) || empty($_GET['monto_total'])
) {
    header('Location: catalogo.php?error=Parámetros incorrectos');

    exit;
}

require_once './conexion.php';


$sql = <<<fin
insert into venta set
    sav = :sav
   , monto_total= :monto_total
   , clientes_id1 = :clientes_id1

fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':sav' => $_GET['sav'],
    ':monto_total' => $_GET['monto_total'],
    // ':direcciones_id' => $_GET['direcciones_id'],
    ':clientes_id1' => $_GET['clientes_id1']
    
]);
header('Location: catalogo.php?info=Carrito actualizado');
?>