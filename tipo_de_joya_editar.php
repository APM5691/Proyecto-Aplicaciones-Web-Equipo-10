<?php

session_start();

if (!isset($_REQUEST['id_tipo_de_joya']) && is_numeric($_REQUEST['id_tipo_de_joya'])) {

    header('Location: tipo_de_joya.php');

    exit;

}

require_once './conexion.php';

$sql = <<<fin

select

    id_tipo_de_joya

    , tipo_joya

from

    tipo_de_joya

where

     id_tipo_de_joya = :id_tipo_de_joya

fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

$sentencia->execute([':id_tipo_de_joya' => $_REQUEST['id_tipo_de_joya']]);

$tipo_joya = $sentencia->fetch(PDO::FETCH_ASSOC);

if (false == $tipo_joya) {

    header('Location: tipo_de_joya.php?info=No se encontró el tipo de joya');

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

    <?php require_once './menu.php'; ?>

    <div class="container mt-4">

        <div class="card">

            <div class="card-header">

                <a class="btn btn-light btn-sm float-right" href="tipo_de_joya.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>

                <i class="fa fa-users"></i> tipo de joya

            </div>

            <div class="card-body">

                <form action="tipo_de_joya_actualizar.php" method="post">

                    <div class="dropdown"></div>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"></div>

                    <div class="form-group">

                        <label for="tipo_joya">Tipo de joya</label>

                        <input type="text" class="form-control form-control-sm" id="tipo_joya" name="tipo_joya" aria-describedby="tipo_joya_help" value="<?php echo htmlentities($tipo_joya['tipo_joya']); ?>" />

                        <small id="tipo_joya_help" class="form-text text-muted">Escribe el nombre de tu tipo de joya</small>

                    </div>

                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>

                    <input type="hidden" name="id_tipo_de_joya" value="<?php echo $tipo_joya['id_tipo_de_joya']; ?>">

                </form>

            </div>

        </div>
        <?php include('./pie_pagina.php');?>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>



</html>