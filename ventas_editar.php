<?php

require_once './conexion.php';
$sql = <<<fin
select
    monto_total
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
        <title>Alta/edición de ventas</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>
        <?php readfile('./menu.html'); ?>
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
                            <input type="int" class="form-control form-control-sm" id="clientes_id1" name="clientes_id1" aria-describedby="clientes_id1_help" value="<?php echo htmlentities($venta['clientes_id1']);?>">
                        </div>
                        
                        
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                        <input type="hid_ventaden" name="id_venta" value="
                        <?php 
                        echo $venta['id_venta'];?>">
                    </form>
                </div>
            </div>
        </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>