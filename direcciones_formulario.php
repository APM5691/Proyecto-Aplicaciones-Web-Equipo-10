<?php

if (!isset($_SESSION)) { require_once './checar_sesion.php'; }

require_once './conexion.php';

?>

<!DOCTYPE html>

<html lang="es-MX">



<head>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Lunimosite</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

</head>



<body>

<?php require_once('./menu.php'); ?>

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

            <input type="num" class="form-control form-control-sm" id="numero" name="numero"

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

            <label for="estado_id">Estado</label>

            <select class="form-control form-control-sm" name="estado_id" id="estado_id">

                <option value="" selected>Selecciona</option>

            <?php

                $sql = 'select id, estado from estados order by estado asc';

                foreach ($conexion->query($sql) as $registro) {

                echo <<<fin



                <option value="{$registro['id']}">{$registro['estado']}</option>

fin;

                }

                ?>

            </select>

        </div>



        <div class="form-group">

            <label for="municipio_id">Municipio</label>

            <select class="form-control form-control-sm" name="municipio_id" id="municipio_id">

                <option value="" selected>Selecciona un estado antes</option>

                <?php

                $sql = 'select id, municipio from municipios order by municipio asc';

                foreach ($conexion->query($sql) as $registro) {

                echo <<<fin



                <option value="{$registro['id']}">{$registro['municipio']}</option>

fin;

                }

                ?>

            </select>

        </div>





          <button class="btn btn-success btn-sm" type="submit">

            <i class="fa fa-save"></i> Guardar

          </button>

        </form>

      </div>

    </div>
    <?php include('./pie_pagina.php');?>
  </div>

  <script src="js/jquery-3.5.1.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script>

  $(function(e) {

      $('#estado_id').change(function (e) {

        //console.log($(this).val())

        $('#municipio_id').load('seleccionar_municipios.php?estado_id=' + $(this).val())

      })

  })

  </script>



</body>



</html>