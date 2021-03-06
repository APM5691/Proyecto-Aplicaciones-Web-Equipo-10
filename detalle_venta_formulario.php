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

                Formulario Para Detalle de Ventas

            </div>

            <div class="card-body">

                <form action="detalle_venta_guardar.php" method="post">

                    <div class="form-group">

                        <label for="marca">Id del cliente</label>

                        <input type="text" class="form-control form-control-sm" id="marca" name="marca"

                            aria-describedby="marca_help">

                        <small id="marca_help" class="form-text text-muted">Escribe el id</small>

                    </div>

                    <div class="form-group">

                        <label for="exampleFormControlTextarea1">Example textarea</label>

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                    </div>

                    <button class="btn btn-success btn-sm" type="submit"> <i class="fa fa-save"></i> Guardar</button>

                </form>

            </div>

        </div>
<?php include('./pie_pagina.php');?>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>



</html>