<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luminosite</title>
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
                Productos
            </div>
            <div class="card-body">
                <form action="productos_guardar.php" method="post" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label for="nombre_producto">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre_producto" name="nombre_producto"
                            aria-describedby="nombre_producto_help">
                        <small id="nombre_producto_help" class="form-text text-muted">Escribe el nombre del producto</small>
                    </div>
                    <?php
                    require_once './conexion.php';
                    $sql = 'select id_material, nombre, tipo_material from materiales order by id_material asc';
                
                    echo <<<fin
                    <div class="form-group">
                        <label for="tipo_material_id">Tipo Material</label>
                        <select type="text" class="form-control" id="tipo_material_id" name="tipo_material_id">
fin;
                    foreach ($conexion->query($sql) as $registro) {
                    echo <<<fin
                            <option>$registro[tipo_material]</option>
fin;
                    }
                    echo <<<fin
                    <small id="tipo_material_help" class="form-text text-muted">Eligue el tipo de material</small>
                        </select>
                    </div>
fin;
                 
                    ?>
                    <div class="form-group">
                        <label for="no_existencias">Numero de existencias</label>
                        <input type="number" class="form-control form-control-sm" id="no_existencias" name="no_existencias"
                            aria-describedby="no_existencias_help">
                        <small id="no_existencias_help" class="form-text text-muted">Escribe el numero de existencias</small>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control form-control-sm" id="precio" name="precio"
                            aria-describedby="precio_help">
                        <small id="precio_help" class="form-text text-muted">Escribe el precio</small>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control form-control-sm" id="descripciom" name="descripcion"
                            aria-describedby="descripcion_help">
                        <small id="descripcion_help" class="form-text text-muted">Describe el producto</small>
                    </div>
                    <div class="form-group">
                        <label for="medida">Medida</label>
                        <input type="text" class="form-control form-control-sm" id="medida" name="medida"
                            aria-describedby="medida_help">
                        <small id="medida_help" class="form-text text-muted">Escribe las medidas</small>
                    </div>
                    <div class="form-group">
                        <label for="precio_oferta">Precio de oferta</label>
                        <input type="number" class="form-control form-control-sm" id="precio_oferta" name="precio_oferta"
                            aria-describedby="precio_oferta_help">
                        <small id="precio_oferta_help" class="form-text text-muted">Describe el producto</small>
                    </div>
                    <div class="form-group">
                    <input type='file' name='imagen' accept="image/*">
                    <br>
                    </div>
                        <a href="productos_guardar.php" class="btn btn-success float-right"> Siguiente</a>
                </form>
            </div>
        </div>
        <?php include('./pie_pagina.php');
?>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
