<?php

if (!isset($_SESSION)) {

  session_start();
}

?>

<!doctype html>

<html lang="es-MX">



<head>

  <title>Lunimosite Catalogo de Productos</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>
  <style>
    .bg {

      background: url(https://p4.wallpaperbetter.com/wallpaper/478/514/546/diamonds-glow-brilliant-sparkle-wallpaper-preview.jpg);

      position: fixed;

      width: 100%;

      height: 600px;

      /*same height as jumbotron */

      top: 15;

      left: 0;

      z-index: -1;

    }



    .jumbotron {

      height: 600px;

      color: white;

      text-shadow: #444 0 1px 1px;

      background: transparent;

    }
  </style>

</head>



<body>



  <?php require_once('./menu.php'); ?>





  <div class="container mt-4">

    <h1 class="text-center">Joyeria luminose

    </h1>

  </div>

  </div>

  <div class="card-body">

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">

        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active">

          <a> <img src="img/joyas4.jpg" class="rounded mx-auto d-block">

            <div class="carousel-caption d-none d-md-block " alt="Responsive image">

              <h5> Tenemos lo que necesitas</h5>

              <p>Puedes encontrar anillos</p>

            </div>

        </div>



        <div class="carousel-item">

          <a> <img src="img/joyas2.jpg" class="rounded mx-auto d-block">

            <div class="carousel-caption d-none d-md-block text-dark">

              <h5>Tenemos lo que necesitas</h5>

              <p>Puedes encontrar collares</p>

            </div>

        </div>

        <div class="carousel-item">

          <a> <img src="img/joyas3.jpg" class="rounded mx-auto d-block">

            <div class="carousel-caption d-none d-md-block ">

              <h5>Tenemos lo que necesitas</h5>

              <p>Puedes encontrar relojes</p>

            </div>

        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        <span class="sr-only">Previous</span>

      </a>

      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>

        <span class="sr-only">Next</span>

      </a>

    </div>



    <form action="carrito_compras.php" method="post">

      <div class="container mt-3">

        <div class="row">



          <?php

          include_once "conexion_catalogo.php";

          $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);

          if ($conexion != true) {

            die("Error de conexion " . mysqli_connect_error());
          }




          $sql = 'SELECT `id_producto`, `nombre_producto`, `precio`, `foto_original`, `tipo_de_joya_id`,`precio_oferta` FROM `producto`';
          foreach ($conexion->query($sql) as $registro) {
            $registro['id_producto'] = htmlentities($registro['id_producto']);
            $registro['nombre_producto'] = htmlentities($registro['nombre_producto']);
            $registro['precio'] = htmlentities($registro['precio']);
            $registro['foto_original'] = htmlentities($registro['foto_original']);
            $registro['tipo_de_joya_id'] = htmlentities($registro['tipo_de_joya_id']);
            $registro['precio_oferta'] = htmlentities($registro['precio_oferta']);

            
          ?>


            <div class="col-lg-4 col-md-6 col-sm-12">

              <div class="card border-warning mb-3 text-center" style="width: 18rem;">

                <img src="img/productos/<?php echo $registro['foto_original'] ?>" class="card-img-top" alt="...">

                <div class="card-body">

                  <h6 class="card-title"><?php echo $registro['nombre_producto'] ?></h6>

                  <s class="card-text">

                    Precio: $<?php echo $registro['precio'] ?> MXN

                  </s>

                  <p class="card-text">

                    Precio Oferta: $ <?php echo $registro['precio_oferta'] ?> MXN

                  </p>
                   <div>
                  <a class="btn btn-primary" href="detalle_producto.php?id_producto=<?php echo $registro['id_producto'] ?>">Ver detalles</a>
                  
</div>
<div class="card-footer">
                  <a class="btn btn-primary" href="carrito_compras.php?id_compra=<?php echo $registro['id_producto'] ?>">Agregar al carrito</a>
                  
</div>


                </div>

              </div>

            </div>

          <?php
              


          }
               $id = $registro['id_producto']; 
               
               if($id==9){

                $id=0;
    
               }
          
          if (!isset($_SESSION['carrito']) ) {

            $_SESSION['carrito'] = $id;

           }

          ?>


    </form>

  </div>
  <?php include('./pie_pagina.php');
?>
  </div>

  

  <script>
    var jumboHeight = $('.jumbotron').outerHeight();



    function parallax() {

      var scrolled = $(window).scrollTop();

      $('.bg').css('height', (jumboHeight - scrolled) + 'px');

    }



    $(window).scroll(function(e) {

      parallax();

    });
  </script>

</body>



</html>