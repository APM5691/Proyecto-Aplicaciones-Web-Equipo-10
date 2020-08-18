<?php

session_start();

?>





<!doctype html>

<html lang="es-MX">



<head>

    <title>Luminosite</title>

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

</head>

<body>

<?php

if (!isset($_REQUEST['id_producto']) && is_numeric($_REQUEST['id_producto'])) {

    header('Location:catalogo.php');

    exit;

}

require_once './conexion.php';

$sql = <<<fin

select

    id_producto

    ,nombre_producto

    ,no_existencias

    ,precio

    ,descripcion

    ,medida

    ,precio_oferta

    ,foto_original

    

from

    producto

where

    id_producto = :id_producto

fin;

  $sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

  $sentencia->execute([':id_producto' => $_REQUEST['id_producto']]);

  $producto = $sentencia->fetch(PDO::FETCH_ASSOC);

  if (false == $producto) {

      header('Location: catalogo.php?info=No se encontro datos de este producto');

      exit;

}

?>

<?php require_once('./menu.php'); ?>





  <div class="container mt-4">



        <div class="card-deck">

                <div class="card border-primary mb-100" style="width: 18rem;">

                    <img src="img/productos/<?php echo htmlentities($producto['foto_original']);?>" class="card-img-top" alt="...">

                    

                </div>

                    <div class="card" style="width: 13rem;">

                        <h1 class="text-xl-center" class="card-title"><?php echo htmlentities($producto['nombre_producto']);?></h1>

                            <p class="card-text" class="text-enter">

                                <h2 class="text-center">

                                Precio de Oferta: $ <?php echo htmlentities($producto['precio_oferta']);?> MXN

                                </h2>

                            </p>

                            <p class="card-text" class="text-center">

                            <h4 class="text-center">Precio: $<?php echo htmlentities($producto['precio']);?></h4>

                                

                            </p>

                            <p class="card-text">

                                <h4 class="text-center">Descripción: <br> <?php echo htmlentities($producto['descripcion']);?></h4>

                            </p>

                            <p class="card-text" class="text-center">

                            <h4 class="text-center">Medida disponible: <?php echo htmlentities($producto['medida']);?></h4>

                            </p>

                            <p class="card-text" class="text-center">

                            <h4 class="text-center">Cantidad de productos disponibles: <?php echo htmlentities($producto['no_existencias']);?></h4>

                            </p>

                            

                            <!-- <form  action="calcular_subtotal.php">

                                <div class="form-row align-items-center">

                                    <div class="col-auto my-1">

                                    <label class="mr-sm-2 sr-only" for="cantidad_producto">Preference</label>



                                    <select class="custom-select mr-sm-2" id="cantidad_producto" name="cantidad_producto">

                                        <option selected value ="4">¿Cuantos quieres comprar?</option>

                                       

                                        <option value="1">1</option>

                                        <option value="2">2</option>

                                        <option value="3">3</option>

                                    </select>

                                    </div>

                                </div> 

                                <input type="submit" value="Calcular total a pagar" href="calcular_subtotal.php?id_producto=<?php echo htmlentities($producto['id_producto']);?>">

                            </form> -->



                            

                            

                            

                            <!-- <form action="calcular_subtotal.php" method="post">

                            

                                <div class="form-group">

                                    <label for="cantidad_producto">Introduce la cantidad</label>

                                    <input type="int" class="form-control form-control-sm" id="cantidad_producto" name="cantidad_producto"

                                        aria-describedby="cantidad_producto_help">

                                    <small id="cantidad_producto_help" class="form-text text-muted">¿Cuantos deseas comprar?</small>

                                </div>



                                <br>

                                <a  href="calcular_subtotal.php?id_producto=<?php echo ($producto['id_producto']);?>"></a>

                                <a class="btn btn-primary" href="calcular_subtotal.php?id_producto=<?php echo htmlentities($producto['id_producto']);?>" role="button">Calcular el precio</a>

                                </form> -->

                             <br>

                            <a  href="calcular_subtotal.php?id_producto=<?php echo ($producto['id_producto']);?>"></a>

                                <a class="btn btn-primary" href="comprar.php?id_producto=<?php echo htmlentities($producto['id_producto']);?>" role="button">

                                <h2>COMPRAR       <i class="fas fa-check"></i></i></h2>

                                </a>

                                <br>

                                <a  href="calcular_subtotal.php?id_producto=<?php echo ($producto['id_producto']);?>"></a>

                                <a class="btn btn-secondary" href="carrito_compras.php?id_compra=<?php echo htmlentities($producto['id_producto']);?>" role="button" >

                                Agregar al carrito      <i class="fas fa-shopping-cart"></i> 

                                 </a>

                            



                            

                            

                    </div>

        </div>

  
        <?php include('./pie_pagina.php');?>
    </div>



        

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    

</body>



</html> 