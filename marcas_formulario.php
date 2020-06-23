<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Marcas formulario</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>

<body>
<?php readfile('./menu.html'); ?>

  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        Marcas
        <a type="button" class="btn btn-outline-dark float-right" href="marcas.php">Regresar</a>
      </div>
      <div class="card-body">
        <form action="marcas_guardar.php" method="post">
          <div class="form-group">
            <label for="marca">Nombre</label>
            <input type="text" class="form-control form-control-sm" id="marca" name="marca"
              aria-describedby="marca_help" />
            <small id="marca_help" class="form-text text-muted">Escribe el nombre del producto</small>
          </div>
          <button class="btn btn-success btn-sm" type="submit">
            <i class="fa fa-save"></i> Guardar
          </button>
        </form>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>