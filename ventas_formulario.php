<?php

session_start();

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

                Formulario Para Ventas

            </div>

            <div class="card-body">

                <form action="ventas_guardar.php" method="post">

                

                    <div class="form-group">

                        <label for="monto_total">Monto</label>

                        <input type="float" class="form-control form-control-sm" id="monto_total" name="monto_total"

                            aria-describedby="monto_total_help">

                        <small id="monto_total_help" class="form-text text-muted">Escribe el monto total</small>

                    </div>

                    <div class="form-group">

                        <label for="direcciones_id">direcciones_id</label>

                        <input type="int" class="form-control form-control-sm" id="direcciones_id" name="direcciones_id"

                            aria-describedby="direcciones_id_help">

                        <small id="direcciones_id" class="form-text text-muted">Escribir la direcciones_id</small>

                    </div>

                    <div class="form-group">

                        <label for="clientes_id1">clientes_id1</label>

                        <input type="int" class="form-control form-control-sm" id="clientes_id1" name="clientes_id1"

                            aria-describedby="clientes_id1_help">

                        <small id="clientes_id1_help" class="form-text text-muted">Escribe la clientes_id1</small>

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