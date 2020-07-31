<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Joya Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Tipo de joya</div>
            <div class="card-body">
                <form action="tipo_de_joya_guardar.php" method="post">
                <div class="dropdown"></div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"></div>
                    <div class="form-group">
                        <label for="tipo_joya">Tipo de joya</label>
                        <input type="text" class="form-control form-control-sm" id="tipo_joya" name="tipo_joya" aria-describedby="tipo_joya_help" />
                        <small id="tipo_joya_help" class="form-text text-muted">Escribe el nombre de tu tipo de joya</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comentarios </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button class="btn btn-success btn-sm" type="submit">
                        <i class="fa fa-save"></i> Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>