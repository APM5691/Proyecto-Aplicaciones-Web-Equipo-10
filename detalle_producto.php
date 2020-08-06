<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location: catalogo.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id_producto
    ,nombre_producto
    ,no_existencias
    ,precio
    ,descricio
    ,precio_oferta
    ,foto_original
from
    producto
where
    id_producto = :id
fin;
  $sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
  $sentencia->execute([':id' => $_REQUEST['id_producto']]);
  $producto = $sentencia->fetch(PDO::FETCH_ASSOC);
  if (false == $venta) {
      header('Location: catalogo.php?info=No se encontro datos de este producto');
      exit;
}
?>
<div class="container mt-3">
        <div class="card mb-3">
        <img src="img/productos/<?php echo $foto_original; ?>" class="card-img-top" alt="..." value="<?php echo htmlentities($producto['foto_original']);?>" required>
        <div class="card-body">
            <h5 class="card-title"> <?php echo $nombre_producto; ?></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
  </div>