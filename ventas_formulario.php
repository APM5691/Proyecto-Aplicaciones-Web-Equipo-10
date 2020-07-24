<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
        <?php readfile('./menu.html'); ?>
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
                        <input type="int" class="form-control form-control-sm" id="clientes_id1" name="clientes_idl"
                            aria-describedby="clientes_id1_help">
                        <small id="clientes_id1_help" class="form-text text-muted">Escribe la clientes_idl</small>
                    </div>

                    <button class="btn btn-success btn-sm" type="submit"> <i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>