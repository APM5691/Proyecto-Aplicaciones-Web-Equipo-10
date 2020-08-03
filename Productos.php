<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Productos
                <a href="productos_formulario.php"class="btn btn-success float-right">Agregar</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 20%;" scope="col">Productos</th>
                            <th style="width: 20%;" scope="col">Medida</th>
                            <th style="width: 20%;" scope="col">Existencias</th>
                            <th style="width: 20%;" scope="col">Precio</th>
                            <th style="width: 20%;" scope="col">Precio Oferta</th>
                            <th style="width: 10%;" scope="col">
                            </th>
                        </tr>
                        <tbody>
                        <?php
                        $sql = 'select id_producto, tipo_de_joya_id, nombre_producto, no_existencias, precio, descripcion, medida, precio_oferta, foto, foto_original from producto order by id_producto asc';
                        foreach ($conexion->query($sql) as $registro) {
                            $registro['nombre_producto'] = htmlentities($registro['nombre_producto']);
                            $registro['no_existencias'] = htmlentities($registro['no_existencias']);
                            $registro['descripcion'] = htmlentities($registro['descripcion']);
                            $registro['medida'] = htmlentities($registro['medida']);
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['nombre_producto']}</td>
                            <td scope="row">{$registro['medida']}</td>
                            <td scope="row">{$registro['no_existencias']}</td>
                            <td scope="row">{$registro['precio']}</td>
                            <td scope="row">{$registro['precio_oferta']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="productos_editar.php?id={$registro['id_producto']}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
fin;
                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>