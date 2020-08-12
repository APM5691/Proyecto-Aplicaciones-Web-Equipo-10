<?php
    require_once './checar_sesion.php';
    include("./conexion.php");
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito </title>
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
  <?php include("./menu.php"); ?> 
  <div class="bg"></div>
  <div class="jumbotron">
    <h1>Joyeria Luminosite</h1>
    <p class="lead">Elija algun producto</p>
  </div>
  </div>

    <div class="site-section">
      <div class="container mt-4">
        <div class="row mb-5">
          
          <form class="col-md-12">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                  <th class="nombre_producto">Producto</th>
                  <th class="precio">Precio</th>
                    <th class="foto">Image</th>
                    
                    
                  </tr>
                </thead>

                <?php


                
                $array = array($_GET['id_compra']);
                

           $sql = 'select nombre_producto,precio_oferta,foto,foto_original,precio from producto where id_producto='.$_GET['id_compra'];
           foreach ($conexion->query($sql) as $registro) {
               $registro['nombre_producto'] = htmlentities($registro['nombre_producto']);
               $registro['precio'] = htmlentities($registro['precio']);
               $registro['precio_oferta'] = htmlentities($registro['precio_oferta']);

                echo <<<fin
                <tbody>
                  <tr>
                    <td class="nombre_producto">
                      <h2 class="h5 text-black">  {$registro['nombre_producto']} </h2>
                    </td>
                    <td>$ {$registro['precio']}</td>
                    <td class="foto">
                      <img src="img/productos/{$registro['foto_original']}"
                       class="card-img-top"  height="300" >
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>

fin;
          $use="";
          $use=$array[0];
          
           $total = $registro['precio_oferta']*1.16;
                 }

        ?>
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <a href="guardar_carrito.php?sav=<?php echo($use); ?>&monto_total= <?php echo($total) ?>&clientes_id1= <?php echo($_SESSION['id']) ?>" class="btn btn-outline-primary btn-sm btn-block" >Continuar Comprando</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo($registro['precio_oferta']) ?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black" name="monto_total" value=""><?php echo($total) ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    
                   
                    <a class="btn btn-success btn-lg py-3 btn-block" href="ventas_guardar.php?monto_total=<?php echo($total) ?> & clientes_id1=<?php echo($_SESSION['id']) ?>" role="button">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
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