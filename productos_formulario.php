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
                    <div class="form-group">
                            <label for="descripcion">Kilates</label>
                            <select class="form-control" id="descripcion" name="descripcion" >
                                <option>Seleccionar</option>
                                <option>6</option>
                                <option>10</option>
                                <option>12</option>
                                <option>24</option>
                                <option>32</option>
                            </select>
                            <small id="descripcion_help" class="form-text text-muted">Selecciona los Kilates</small>
                        </div>
                        <div class="form-group">
                            <label for="descripcion1">Estado</label>
                            <select class="form-control" id="descripcion1" name="descripcion1">
                                <option>Seleccionar</option>
                                <option>Casi nuevo</option>
                                <option>Casi usado</option>
                                <option>Usado</option>
                                <option>Semi Usado</option>
                                <option>Desgastado</option>
                                <option>Muy usado</option>
                                <option style="height: 50%;" class="alert alert-danger">Roto</option>
                            </select>
                            <small id="descripcion1_help" class="form-text text-muted">Selecciona el estado en el que se encuentra</small>
                        </div>
                        <a href="materiales_formulario.php" class="btn btn-success float-right"> Siguiente</a>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>