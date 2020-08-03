<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiales</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>     
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Materiales
                <a href="productos_formulario.php"class="btn btn-success float-right">Agregar</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                    </tbody>
                </table>
                <a href="materiales.php" class="btn btn-success float-right"> Materiales</a>
            </div>
        </div>
    </div>
    <div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Materiales
                <a href="materiales_formulario.php"class="btn btn-success float-right">Agregar</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 45%;" scope="col">Material</th>
                            <th style="width: 10%;" scope="col">Editar</th>
                            <th style="width: 90%;" scope="col">
                            </th>
                        </tr>
                    <tbody>
                        <?php
                        $sql = 'select id_material, nombre, tipo_material from material order by id_material asc';
                        foreach ($conexion->query($sql) as $registro) {
                            $registro['nombre'] = htmlentities($registro['nombre']);
                            $registro['tipo_material'] = htmlentities($registro['tipo_material']);
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['nombre']}</td>
                            <td scope="row">{$registro['tipo_material']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="material_editar.php?id={$registro['id_material']}"><i class="fa fa-edit"></i></a>
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
    