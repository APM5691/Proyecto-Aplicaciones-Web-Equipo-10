<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Direcciones formulario</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>

<body>
<?php readfile('./menu.html'); ?>
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        Formulario para su direccion
      </div>
      <div class="card-body">
        <form action="direcciones_guardar.php" method="post">
          <div class="form-group">
            <label for="calle">Calle</label>
            <input type="text" class="form-control form-control-sm" id="calle" name="calle"
              aria-describedby="calle_help" />
            <small id="calle_help" class="form-text text-muted">Escribe el nombre de tu calle</small>
          </div>

          <div class="form-group">
            <label for="numero">Numero</label>
            <input type="text" class="form-control form-control-sm" id="numero" name="numero"
              aria-describedby="numero_help" />
            <small id="numero_help" class="form-text text-muted">Escribe el número de tu dirección</small>
          </div>

          <div class="form-group">
            <label for="localidad">Localidad</label>
            <input type="text" class="form-control form-control-sm" id="localidad" name="localidad"
              aria-describedby="localidad_help" />
            <small id="localidad_help" class="form-text text-muted">Escribe el nombre de tu localidad</small>
          </div>
          
          <div class="form-group">
            <label for="municipio">Municipio</label>
            <input type="text" class="form-control form-control-sm" id="municipio" name="municipio"
              aria-describedby="municipio_help" />
            <small id="municipio_help" class="form-text text-muted">Escribe el municipio al que perteneces</small>
          </div>

          <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control form-control-sm" id="estado" name="estado"
              aria-describedby="estado_help" />
            <small id="estado_help" class="form-text text-muted">Escribe el estado al que perteneces</small>
          </div>
          
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Referencias de la dirección</label>
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