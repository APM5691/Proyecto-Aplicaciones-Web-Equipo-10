<?php

if (isset($_SESSION)) { require_once './checar_sesion.php'; }

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

  <?php require_once('./menu.php'); 
  $id=$_GET['paso'];
  ?>

  <div class="container mt-4">

    <div class="card">

      <div class="card-header">

        Formulario Para Clientes

      </div>

      <div class="card-body">

        <form action="cambiar_password.php?cambiar=<?php  echo($id) ?>" method="post" enctype='multipart/form-data'>

         
          <div class="form-group">

            <label for="password">Contraseña</label>

            <input type="password" class="form-control form-control-sm" id="password" name="password" aria-describedby="password" required />

            <small id="password_help" class="form-text text-muted">Escribe tu Contraseña</small>

          </div>

          <div class="form-group">

            <label for="password">Confirmar Contraseña</label>

            <input type="password" class="form-control form-control-sm" id="password2" name="password2" aria-describedby="password2" required />

            <small id="password_help" class="form-text text-muted">Confirmar tu Contraseña</small>

          </div>


          <button class="btn btn-success btn-sm" type="submit">

            <i class="fa fa-save"></i> Guardar

          </button>

        </form>

      </div>

    </div>

  </div>

  
  <?php include('./pie_pagina.php');?>

  <script src="js/jquery-3.5.1.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  
  <script src="https://unpkg.com/@popperjs/core@2"></script>

</body>



</html>
