<?php

require_once './checar_sesion.php';

?>

<!DOCTYPE html>

<html lang="es-MX">



<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

                Detalles de la venta

                <a href="detalle_venta_formulario.php"class="btn btn-success float-right">Agregar</a>

            </div>

            <div class="card-body">

                <table class="table table-dark table table-hover">

                    <thead class="thead-light">

                        <tr>

                            <th style="width: 90%;" scope="col">Detalle de venta</th>

                            <th style="width: 10%;" scope="col">Editar</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <th scope="row">Luminosete</th>

                            <td>

                                <a class="btn btn-primary"><i class="fas fa-plus-square"></i></a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
        <?php include('./pie_pagina.php');
?>
    </div>



    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>



</html>