<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location: clientes.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id_producto
    , nombre_producto
    , tipo_de_joya_id
    , no_existencias
    , precio
    , descripcion
    , medida
    , precio_oferta
    , foto
    , foto_original
from
    producto
where
    id_producto = :id
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$cliente = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $cliente) {
    header('Location: Productos.php?info=No se encontró el producto');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de Productos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="productos.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                <i class="fa fa-users"></i> Productos
            </div>
            <div class="card-body">
                <form action="productos_actualizar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" class="form-control form-control-sm" id="nombre_producto" name="nombre_producto" aria-describedby="nombre_producto_help" value="<?php echo htmlentities($cliente['nombre_cliente']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_de_joya_id">Tipo de joya</label>
                        <input type="text" class="form-control form-control-sm" id="tipo_de_joya_id" name="tipo_de_joya_id" aria-describedby="tipo_de_joya_id_help" value="<?php echo htmlentities($cliente['nombre_cliente']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_existencias">Existencias</label>
                        <input type="text" class="form-control form-control-sm" id="no_existencias" name="no_existencias" aria-describedby="no_existencias_help" value="<?php echo htmlentities($cliente['primer_apellido']); ?>" required>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control form-control-sm" id="precio" name="precio" aria-describedby="precio_oficina_help" value="<?php echo htmlentities($cliente['telefono']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descricion">Descripcion</label>
                        <input type="text" class="form-control form-control-sm" id="descricion" name="descricion" aria-describedby="descricion_help" value="<?php echo htmlentities($cliente['correo_electronico']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="medida">Medida</label>
                        <input type="text" class="form-control form-control-sm" id="medida" name="medida" aria-describedby="medida_help" value="<?php echo htmlentities($cliente['correo_electronico']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precio_oferta">Precio de Oferta</label>
                        <input type="text" class="form-control form-control-sm" id="precio_oferta" name="precio_oferta" aria-describedby="precio_oferta_help" value="<?php echo htmlentities($cliente['correo_electronico']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="oferta">Foto</label>
                        <input type="text" class="form-control form-control-sm" id="oferta" name="oferta" aria-describedby="oferta_help" value="<?php echo htmlentities($cliente['correo_electronico']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_original">Foto original</label>
                        <input type="text" class="form-control form-control-sm" id="foto_original" name="foto_original" aria-describedby="foto_original_help" value="<?php echo htmlentities($cliente['correo_electronico']); ?>" required>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id_producto" value="<?php echo $cliente['id_producto']; ?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>