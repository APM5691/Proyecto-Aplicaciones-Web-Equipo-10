<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location: materiales.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id_material
    , nombre
    , tipo_material
from
    material
where
    id_material = :id
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$cliente = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $cliente) {
    header('Location: materiales.php?info=No se encontró el cliente');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de Materiales</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="clientes.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                Materiales
            </div>
            <div class="card-body">
                <form action="materiales_actualizar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre del Material</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help" value="<?php echo htmlentities($cliente['nombre_cliente']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_material">Tipo de Material</label>
                        <input type="text" class="form-control form-control-sm" id="tipo_material" name="tipo_material" aria-describedby="tipo_material_help" value="<?php echo htmlentities($cliente['primer_apellido']); ?>" required>
                    </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id_material" value="<?php echo $cliente['id_material']; ?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>