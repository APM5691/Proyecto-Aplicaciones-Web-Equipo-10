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

<?php readfile('./menu.html'); ?>
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
                                Precio $:<?php echo $row[2]; ?> MXN
                            </p>
                            <a href="detalle_producto.php?:id_producto" class="btn btn-primary">Ver detalles</a>
                        
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
</body>

</html> 



    