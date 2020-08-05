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
                        <input type="" class="form-control form-control-sm" id="nombre" name="nombre"
                            aria-describedby="id_help">
                        <small id="id_help" class="form-text text-muted">Escribe el nombre del material</small>
                    </div>
                    <div class="form-group">
                        <label for="tipo_material">Tipo de Joya</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material1" value="chapa_de_oro">
                            <label class="form-check-label" for="tipo_material1">  Chapa de Oro</label><br>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material2" value="Oro_amarillo">
                            <label class="form-check-label" for="tipo_material2">  Oro Amarillo</label><br>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material3" value="Oro_blanco">
                            <label class="form-check-label" for="tipo_material3">  Oro Blanco</label><br>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo_material" id="tipo_material4" value="plata">
                            <label class="form-check-label" for="tipo_material4">  Plata</label><br>
                        </div>
                        <small id="material_principal_help" class="form-text text-muted">Selecciona el Material</small>
                    </div>
                    <button class="btn btn-warning btn-sm" type="submit"> <i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>