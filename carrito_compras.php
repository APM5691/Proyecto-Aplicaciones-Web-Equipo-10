<?php
    session_start(); 
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
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="foto">Image</th>
                    <th class="nombre_producto">Producto</th>
                    <th class="precio">Precio</th>
                  </tr>
                </thead>
                <?php
            include_once "conexion_catalogo.php";
            $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
            if ($conexion != true) {
              die("Error de conexion " . mysqli_connect_error());
            }
            $sql = "SELECT `id_producto`, `nombre_producto`, `precio`, `foto_original`, `tipo_de_joya_id` FROM `producto`";
            $resultSet = mysqli_query($conexion, $sql);
                while ($row = mysqli_fetch_row($resultSet)) {
                echo <<<fin
                <tbody>
                  <tr>
                    <td class="foto">
                      <img src="img/productos/<?php echo $row[3]; ?>" class="card-img-top">
                    </td>
                    <td class="nombre_producto">
                      <h2 class="h5 text-black"><?php echo $row[1]; ?></h2>
                    </td>
                    <td>$<?php echo $row[4]; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
        ";
                }
        ";
                }
        ?>
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <button href="catalogo.php" class="btn btn-outline-primary btn-sm btn-block" >Continuar Comprando</button>
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
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location=''">Comprar</button>
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

</body>
</html>