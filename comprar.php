
<?php
if (!isset($_REQUEST['id_producto']) && is_numeric($_REQUEST['id_producto'])) {
    header('Location:detalle_producto.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id_producto
    ,nombre_producto
    ,no_existencias
    ,precio
    ,descripcion
    ,medida
    ,precio_oferta
    ,foto_original
    
from
    producto
where
    id_producto = :id_producto
fin;
  $sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
  $sentencia->execute([':id_producto' => $_REQUEST['id_producto']]);
  $producto = $sentencia->fetch(PDO::FETCH_ASSOC);
  if (false == $producto) {
      header('Location: detalle_producto.php?info=No se encontro datos de este producto');
      exit;
}
$p=htmlentities($producto['precio_oferta']);


require_once './conexion.php';
$sql = <<<fin
insert into venta set
    monto_total = $p
    , direcciones_id = 2
    , clientes_id1 = 2
fin;

    


$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':monto_total' => $_POST['monto_total']
    , ':direcciones_id' => $_POST['direcciones_id']
     , ':clientes_id1' => $_POST['clientes_id1']
]);
header('Location: ventas.php?info=Venta creada exitosamente');
?>