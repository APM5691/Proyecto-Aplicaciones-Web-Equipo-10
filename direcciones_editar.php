<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location: direcciones.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id_direccion
    , clientes_id
    , calle
    , numero
    , localidad
    , estado_id
    , municipio_id
from
    direccion
where
    id_direccion = :id
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$direccion = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $direccion) {
    header('Location: direcciones.php?info=No se encontró la dirección');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de direcciones</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="direcciones.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                <i class="fa fa-users"></i> direcciones
            </div>
            <div class="card-body">
                <form action="direcciones_actualizar.php" method="post">
                    <div class="form-group">
                        <label for="clientes_id">clientes_id</label>
                        <input type="int" class="form-control form-control-sm" id="clientes_id" name="clientes_id" aria-describedby="clientes_id_help" value="<?php echo htmlentities($direccion['clientes_id']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="calle">Calle</label>
                        <input type="text" class="form-control form-control-sm" id="calle" name="calle" aria-describedby="calle_help" value="<?php echo htmlentities($direccion['calle']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="numero">Numero</label>
                        <input type="int" class="form-control form-control-sm" id="numero" name="numero" aria-describedby="numero_help" value="<?php echo htmlentities($direccion['numero']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="localidad">Localidad</label>
                        <input type="text" class="form-control form-control-sm" id="localidad" name="localidad" aria-describedby="localidad_help" value="<?php echo htmlentities($direccion['localidad']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="estado_id">Número del estado</label>
                        <input type="int" class="form-control form-control-sm" id="estado_id" name="estado_id" aria-describedby="estado_id_help" value="<?php echo htmlentities($direccion['estado_id']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="municipio_id">Número del municipio</label>
                        <input type="int" class="form-control form-control-sm" id="municipio_id" name="municipio_id" aria-describedby="municipio_id_help" value="<?php echo htmlentities($direccion['municipio_id']);?>" required>
                    </div>
                    
                    
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id_direccion" value="<?php echo $direccion['id_direccion'];?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>