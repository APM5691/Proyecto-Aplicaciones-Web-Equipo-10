<!doctype html>
<html lang="es-MX">

<head>
    <title>Catalogo de Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
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

<div class="bg"></div>
  <div class="jumbotron">
    <h1>Joyeria Luminosite</h1>
    <p class="lead">Eliga algun producto</p>
  </div>
  </div>
  
  <div class="container mt-3">
        <div class="row">

            <?php
            include_once "conexion_catalogo.php";
            $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
            if ($conexion != true) {
              die("Error de conexion " . mysqli_connect_error());
            }
            $sql = "SELECT `id_producto`, `nombre_producto`, `precio`, `foto_original`, `tipo_de_joya_id` FROM `producto`";
            $resultSet = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_row($resultSet)) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card border-warning mb-3" style="width: 18rem;">
                        <img src="img/productos/<?php echo $row[3]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $row[1]; ?></h6>
                            <p class="card-text">
                                Precio: $<?php echo $row[2]; ?> MXN
                            </p>
                        <a class="btn btn-primary"  href="detalle_producto.php?id_producto=<?php echo $row[0];?>" >Ver detalles</a>
                        <p><a class="btn btn-dark" href="carrito_compras.php?id_compra=<?php echo $row[0];?>" >Agregar al carrito</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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



    