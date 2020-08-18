<?php
require_once './checar_sesion.php';

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

    <title>Luminosite</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

</head>



<body>

    <?php require_once('./menu.php'); ?>

    <div class="container mt-4">

        <div class="card">

            <div class="card-header">

                <a class="btn btn-light btn-sm float-right" href="materiales.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                    <i class="fa fa-gem"></i> Formulario editar Materiales

            </div>

            <div class="card-body">

                <form action="materiales_actualizar.php" method="post">

                    <div class="form-group">

                    <label for="nombre">Nombre del Material</label>

                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre"

                            aria-describedby="id_help">

                    </div>

                    <div class="form-group">

                    <label for="tipo_material">Tipo de Material de Material</label>

                        <input type="text" class="form-control form-control-sm" id="tipo_material" name="tipo_materialid" 
                        aria-describedby="tipo_material_help">

                    </div>

                        <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>

                    <input type="hidden" name="id_material" value="<?php echo $materiales['id_material']; ?>">

                </form>

            </div>

        </div>
        <?php include('./pie_pagina.php');
?>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>