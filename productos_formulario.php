<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Productos
            </div>
            <div class="card-body">
                <form action="productos_guardar.php" method="post">
                    <div class="dropdown">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre_producto">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre_producto" name="nombre_producto"
                            aria-describedby="nombre_producto_help">
                        <small id="nombre_producto_help" class="form-text text-muted">Escribe el nombre del producto</small>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control form-control-sm" id="precio" name="precio"
                            aria-describedby="precio_help">
                        <small id="precio_help" class="form-text text-muted">Escribe el precio del producto</small>
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