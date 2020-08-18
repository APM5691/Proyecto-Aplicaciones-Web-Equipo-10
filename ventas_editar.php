<?php

session_start();

?>



<?php

if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {

    header('Location: ventas.php');

    exit;

}



require_once './conexion.php';

$sql = <<<fin

select

    id_venta

    , monto_total

    , direcciones_id

    , clientes_id1

from

    venta

where

    id_venta = :id

fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

$sentencia->execute([':id' => $_REQUEST['id']]);

$venta = $sentencia->fetch(PDO::FETCH_ASSOC);

if (false == $venta) {

    header('Location: ventas.php?info=No se encontró la venta');

    exit;

}



?>



    <!DOCTYPE html>

    <html lang="es-MX">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="wid_ventath=device-wid_ventath, initial-scale=1.0">

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

                    <a class="btn btn-light btn-sm float-right" href="ventas.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>

                    <i class="fa fa-users"></i> Ventas

                </div>

                <div class="card-body">

                    <form action="ventas_actualizar.php" method="post">

                        <div class="form-group">

                            <label for="monto_total">monto_total</label>

                            <input type="float" class="form-control form-control-sm" id="monto_total" name="monto_total" aria-describedby="monto_total_help" value="<?php echo htmlentities($venta['monto_total']);?>" required>

                        </div>

                        <div class="form-group">

                            <label for="direcciones_id">direcciones_id</label>

                            <input type="int" class="form-control form-control-sm" id="direcciones_id" name="direcciones_id" aria-describedby="direcciones_id_help" value="<?php echo htmlentities($venta['direcciones_id']);?>" required>

                        </div>

                        <div class="form-group">

                            <label for="clientes_id1">clientes_id1</label>

                            <input type="int" class="form-control form-control-sm" id="clientes_id1" name="clientes_id1" aria-describedby="clientes_id1_help" value="<?php echo htmlentities($venta['clientes_id1']);?>" required>

                        </div>

                        

                        

                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>

                        

                        

                    </form>

                </div>

            </div>
            <?php include('./pie_pagina.php');?>
        </div>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>