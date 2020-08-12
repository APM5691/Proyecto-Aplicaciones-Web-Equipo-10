<?php

if (!isset($_REQUEST['id_producto']) && is_numeric($_REQUEST['id_producto'])) {
    header('Location:detalle_producto.php');
    echo $_REQUEST['id_producto'];
}

require_once './conexion.php';
$sql = <<<fin
select
    id_producto
    ,no_existencias
    ,precio
    ,precio_oferta
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
echo $_POST['cantidad_producto'];
$cantidad_producto = $_POST['cantidad_producto'];
echo $cantidad_producto;

    echo htmlentities($producto['precio_oferta']); 

?>