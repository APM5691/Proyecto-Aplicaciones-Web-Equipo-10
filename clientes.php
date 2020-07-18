<?php
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>

        <?php readfile('./menu.html'); ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Clientes
                <a href="clientes_formularios.php"class="btn btn-success float-right">Agregar</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 20%;" scope="col">Nombre</th>
                            <th style="width: 30%;" scope="col">Correo</th>
                            <th style="width: 25%;" scope="col">Perfil</th>
                            <th style="width: 25%;" scope="col">Estatus</th>
                            <th style="width: 10%;" scope="col">Editar</th>
                            <th style="width: 10%;" scope="col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = 'select id_cliente, nombre_cliente, primer_apellido, correo_electronico, telefono,perfil,estatus from cliente order by primer_apellido, nombre_cliente asc';
                        foreach ($conexion->query($sql) as $registro) {
                            $registro['nombre_cliente'] = htmlentities($registro['nombre_cliente']);
                            $registro['primer_apellido'] = htmlentities($registro['primer_apellido']);
                            $registro['correo_electronico'] = htmlentities($registro['correo_electronico']);
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['nombre_cliente']}</td>
                            <td scope="row">{$registro['correo_electronico']}</td>
                            <td scope="row">{$registro['perfil']}</td>
                            <td scope="row">{$registro['estatus']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="usuarios_editar.php?id={$registro['id_cliente']}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
fin;
                }
                        ?>
                    </tbody>
                </table>
                <a href="direcciones.php" class="btn btn-success float-right">Direcciones</a>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>