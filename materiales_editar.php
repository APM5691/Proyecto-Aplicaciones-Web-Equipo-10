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
    materiales
where
    id_material = :id
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$materiales = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $materiales) {
    header('Location: materiales.php?info=No se encontró el Material');
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
                <a class="btn btn-light btn-sm float-right" href="materiales.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                Materiales
            </div>
            <div class="card-body">
                <form action="materiales_actualizar.php" method="post">
                    <div class="form-group">
                    <label for="nombre">Nombre de Material</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre"
                            aria-describedby="id_help">
                    </div>
                    <div class="form-group">
                        <label for="tipo_material">Tipo de Joya</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material1" value="chapa_de_oro" <?php echo 'chapa_de_oro' == $materiales['tipo_material'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tipo_material1">Chapa de Oro</label> 
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material2" value="Oro_amarillo" <?php echo 'Oro_amarillo' == $materiales['tipo_material'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tipo_material2">Oro Amarillo</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material3" value="Oro_blanco" <?php echo 'Oro_blanco' == $materiales['tipo_material'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tipo_material3">Oro Blanco</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material4" value="plata" <?php echo 'plata' == $materiales['tipo_material'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tipo_material4">Plata</label>
                        </div>
                    </div>
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id_material" value="<?php echo $materiales['id_material']; ?>">
                    </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>