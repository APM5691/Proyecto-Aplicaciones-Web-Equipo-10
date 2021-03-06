<?php

require_once './checar_sesion.php';

require_once './conexion.php';

?>



<!DOCTYPE html>

<html lang="es-MX">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Luminosite <?php echo ($_SESSION['nombre']); ?></title>

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



  $use = $_SESSION['id'];



  $sql = "select id_cliente, nombre_cliente,telefono,estatus, primer_apellido,sexo,segundo_apellido,perfil, foto_perfil from cliente where id_cliente = $use";



  foreach ($conexion->query($sql) as $registro) {

    $registro['id_cliente'] = htmlentities($registro['id_cliente']);

    $registro['nombre_cliente'] = htmlentities($registro['nombre_cliente']);

    $registro['primer_apellido'] = htmlentities($registro['primer_apellido']);

    $registro['segundo_apellido'] = htmlentities($registro['segundo_apellido']);

    $registro['foto_perfil'] = htmlentities($registro['foto_perfil']);

    $registro['perfil'] = htmlentities($registro['perfil']);

    $registro['sexo'] = htmlentities($registro['sexo']);

    $registro['telefono'] = htmlentities($registro['telefono']);

    $registro['estatus'] = htmlentities($registro['estatus']);
  }



  ?>

  <div class="container mt-4">

    <div class="card text-center">

      <div class="row no-gutters">

        <div class="col-md-4">

          <img src="./<?php echo ($registro['foto_perfil']); ?>" class="card-img" alt="...">

        </div>

        <div class="col-md-8">

          <div class="card-body">

            <h5 class="card-title"> <?php echo ($_SESSION['nombre']); ?> </h5>

            <h5 class="card-text"><?php echo ($registro['primer_apellido']); ?></h5>

            <h5 class="card-text"><?php echo ($registro['segundo_apellido']); ?></h5>

            <p class="card-text">Perfil: <?php echo ($registro['perfil']); ?></p>

            <p class="card-text">Sexo: <?php echo ($registro['sexo']); ?></p>

            <p class="card-text">Telefono: <?php echo ($registro['telefono']); ?></p>

            <p class="card-text">Estatus: <?php echo ($registro['estatus']); ?></p>





          </div>

        </div>



      </div>



    </div>

    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Activar restauracion de contraseña</h5>
        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a> -->
        <a href="codigo.php" class="card-link">Generar Codigo QR</a>
      </div>
    </div>

    <?php include('./pie_pagina.php');
    ?>

  </div>

  <script src="js/jquery-3.5.1.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

</body>



</html>