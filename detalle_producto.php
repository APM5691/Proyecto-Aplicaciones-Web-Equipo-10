<!doctype html>
<html lang="es-MX">

<head>
    <title>Catalogo de Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
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
    ,descricio
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
<?php readfile('./menu.html'); ?>

  <div class="container mt-4">

        <div class="card-deck">
                <div class="card border-primary mb-100" style="width: 18rem;">
                    <img src="img/productos/<?php echo htmlentities($producto['foto_original']);?>" class="card-img-top" alt="...">
                    
                </div>
                    <div class="card" style="width: 13rem;">
                        <h2 class="text-xl-center" class="card-title"><?php echo htmlentities($producto['nombre_producto']);?></h2>
                            <p class="card-text" class="text-enter">
                                <h2 class="text-center">
                                Precio de Oferta: $ <?php echo htmlentities($producto['precio_oferta']);?> MXN
                                </h2>
                            </p>
                            <p class="card-text" class="text-center">
                            <h4 class="text-center">Precio: $<?php echo htmlentities($producto['precio']);?></h4>
                                
                            </p>
                            <p class="card-text">
                                <h4 class="text-center">Descripción: <br> <?php echo htmlentities($producto['descricio']);?></h4>
                            </p>
                            <p class="card-text" class="text-center">
                            <h4 class="text-center">Medida disponible: <?php echo htmlentities($producto['medida']);?></h4>
                            </p>
                    </div>
        </div>
  
    </div>

        
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html> 