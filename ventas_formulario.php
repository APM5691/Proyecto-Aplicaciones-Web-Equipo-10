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
                        <label for="cantidad_productos">Cantidad de productos</label>
                        <input type="text" class="form-control form-control-sm" id="cantidad_productos" name="cantidad_productos"
                            aria-describedby="cantidad_productos_help">
                        <small id="cantidad_productos_help" class="form-text text-muted">Escribe la Cantidad de productos</small>
                    </div>
                    <div class="form-group">
                        <label for="monto_total">Monto</label>
                        <input type="text" class="form-control form-control-sm" id="monto_total" name="monto_total"
                            aria-describedby="monto_total_help">
                        <small id="monto_total_help" class="form-text text-muted">Escribe el monto total</small>
                    </div>
                    <div class="form-group">
                        <label for="subtotal">Subtotal</label>
                        <input type="text" class="form-control form-control-sm" id="subtotal" name="subtotal"
                            aria-describedby="subtotal_help">
                        <small id="subtotal_help" class="form-text text-muted">Escribe el monto total</small>
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