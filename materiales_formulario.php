<?php

require_once './checar_sesion.php';

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

            <i class="fa fa-gem"></i> Formulario Para Materiales

            </div>

            <div class="card-body">

                <form action="materiales_guardar.php" method="post">

                    <div class="form-group">

                        <label for="nombre">Nombre de Material</label>

                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="id_help">

                        <small id="id_help" class="form-text text-muted">Escribe el nombre del material</small>

                    </div>

                    <div class="form-group">

                    <label for="tipo_material">Tipo de Material de Material</label>

                        <input type="text" class="form-control form-control-sm" id="tipo_material" name="tipo_material" 
                        aria-describedby="tipo_material_help">

                        <small id="material_principal_help" class="form-text text-muted">Escribe el tipo del Material</small>

                    </div>

                    <button class="btn btn-warning " type="submit"> <i class="fa fa-save"></i> Guardar</button>

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