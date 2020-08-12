<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location: Productos.php');
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
    <?php require_once('./menu.php'); ?>
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
                    <?php
                    require_once './conexion.php';
                    $sql = 'select id_material, nombre, tipo_material from materiales order by id_material asc';
                
                    echo <<<fin
                    <div class="form-group">
                        <label for="tipo_material_id">Tipo Material</label>
                        <select multiple class="form-control" id="tipo_material_id" name="tipo_material_id">
fin;
                    foreach ($conexion->query($sql) as $registro) {
                    echo <<<fin
                            <option>$registro[tipo_material]</option>
fin;
                    }
                    echo <<<fin
                    <small id="tipo_material_help" class="form-text text-muted">Eligue el tipo de material</small>
                        </select>
                    </div>
fin;
                 
                    ?>
                    <div class="form-group">
                        <label for="no_existencias">Existencias</label>
                        <input type="text" class="form-control form-control-sm" id="no_existencias" name="no_existencias" aria-describedby="no_existencias_help" value="<?php echo htmlentities($cliente['no_existencias']); ?>" required>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control form-control-sm" id="precio" name="precio" aria-describedby="precio_help" value="<?php echo htmlentities($cliente['precio']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control form-control-sm" id="descricio" name="descricio" aria-describedby="descricio_help" value="<?php echo htmlentities($cliente['descripcion']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="medida">Medida</label>
                        <input type="text" class="form-control form-control-sm" id="medida" name="medida" aria-describedby="medida_help" value="<?php echo htmlentities($cliente['medida']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precio_oferta">Precio de Oferta</label>
                        <input type="number" class="form-control form-control-sm" id="precio_oferta" name="precio_oferta" aria-describedby="precio_oferta_help" value="<?php echo htmlentities($cliente['precio_oferta']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precio_oferta">Precio de Oferta</label>
                        <input type="image" class="form-control form-control-sm" id="precio_oferta" name="precio_oferta" aria-describedby="precio_oferta_help" value="<?php echo htmlentities($cliente['precio_oferta']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precio_oferta">Precio de Oferta</label>
                        <input type="image" class="form-control form-control-sm" id="precio_oferta" name="precio_oferta" aria-describedby="precio_oferta_help" value="<?php echo htmlentities($cliente['precio_oferta']); ?>" required>
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