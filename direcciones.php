<?php
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>direcciones</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>

        <?php readfile('./menu.html'); ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Direcciones
                <a href="direcciones_formulario.php"class="btn btn-success float-right">Agregar</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 10%;" scope="col">Cliente</th>
                            <th style="width: 20%;" scope="col">Calle</th>
                            <th style="width: 20%;" scope="col">Numero</th>
                            <th style="width: 15%;" scope="col">Localidad</th>
                            <th style="width: 15%;" scope="col">Municipio</th>
                            <th style="width: 15%;" scope="col">Estado</th>
                            <th style="width: 5%;" scope="col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = 'select id_direccion, clientes_id, calle, numero, localidad, municipio_id, estado_id from direccion order by id_direccion asc';
                        foreach ($conexion->query($sql) as $registro) {
                            $registro['clientes_id'] = htmlentities($registro['clientes_id']);
                            $registro['calle'] = htmlentities($registro['calle']);
                            $registro['numero'] = htmlentities($registro['numero']);
                            $registro['localidad'] = htmlentities($registro['localidad']);
                            $registro['municipio_id'] = htmlentities($registro['municipio_id']);
                            $registro['estado_id'] = htmlentities($registro['estado_id']);
                        echo <<<fin
                        <tr>
                            <td scope="row">{$registro['clientes_id']}</td>
                            <td scope="row">{$registro['calle']}</td>
                            <td scope="row">{$registro['numero']}</td>
                            <td scope="row">{$registro['localidad']}</td>
                            <td scope="row">{$registro['municipio_id']}</td>
                            <td scope="row">{$registro['estado_id']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="direcciones_editar.php?id={$registro['id_direccion']}"><i class="fa fa-edit"></i></a>
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