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
                <form action="materiales_guardar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre de Material</label>
                        <input type="" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="id_help">
                        <small id="id_help" class="form-text text-muted">Escribe el nombre del material</small>
                    </div>
                    <div class="form-group">

                    <label for="nombre">Tipo de Material de Material</label>
                        <input type="" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="id_help">

                        <small id="material_principal_help" class="form-text text-muted">Selecciona el Material</small>
                    </div>
                    <button class="btn btn-warning " type="submit"> <i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>