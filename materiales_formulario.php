<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiales formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
        <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Formulario Para Materiales
            </div>
            <div class="card-body">
                <form action="productos_guardar.php" method="post">
                    <div class="form-group">
                        <label for="id">Id del producto</label>
                        <input type="" class="form-control form-control-sm" id="id" name="id"
                            aria-describedby="id_help">
                        <small id="id_help" class="form-text text-muted">Escribe el id</small>127
                    </div>
                    <div class="form-group">
                        <label for="material_principal">Material Principal</label>
                        <select class="form-control" id="material_principal" name="material_principal">
                            <option>Seleccionar</option>
                            <option>Oro</option>
                            <option>Plata</option>
                            <option>Metal Bañado en Oro</option>
                            <option>Metal Bañado en Plata</option>
                        </select>
                        <small id="material_principal_help" class="form-text text-muted">Selecciona el Material Principal</small>
                    </div>
                    <div class="form-group">
                        <label for="material_secundario">Material Secundario</label>
                        <select class="form-control" id="material_secundario" name="material_secundario">
                            <option>Seleccionar</option>
                            <option>Oro</option>
                            <option>Plata</option>
                            <option>Metal Bañado en Oro</option>
                            <option>Metal Bañado en Plata</option>
                        </select>
                        <small id="material_secundario_help" class="form-text text-muted">Selecciona el Material Secundario</small>
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