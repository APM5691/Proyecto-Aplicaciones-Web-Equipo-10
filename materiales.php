<?php

require_once './checar_sesion.php';

require_once './conexion.php';

?>

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

            <i class="fa fa-gem"></i> Materiales

                <a href="materiales_formulario.php"class="btn btn-success float-right">Agregar</a>

            </div>

            <div class="card-body">

                <table class="table table-dark table table-hover">

                    <thead class="thead-light">

                        <tr>

                            <th style="width: 45%;" scope="col">Nombre Material</th>

                            <th style="width: 45%;" scope="col">Tipo Material</th>

                            <th style="width: 45%;" scope="col">Editar</th>

                            <th style="width: 90%;" scope="col">

                            </th>

                        </tr>

                    <tbody>

                        <?php

                        $sql = 'select id_material, nombre, tipo_material from materiales order by id_material asc';

                        foreach ($conexion->query($sql) as $registro) {

                            $registro['nombre'] = htmlentities($registro['nombre']);

                            $registro['tipo_material'] = htmlentities($registro['tipo_material']);

                        echo <<<fin



                        <tr>

                            <td scope="row">{$registro['nombre']}</td>

                            <td scope="row">{$registro['tipo_material']}</td>

                            <td>

                                <a class="btn btn-secondary btn-sm" href="materiales_editar.php?id={$registro['id_material']}"><i class="fa fa-edit"></i></a>

                            </td>

                        </tr>

fin;

                }

                        ?>

                    </tbody>

                </table>

            </div>

        </div>
        <?php include('./pie_pagina.php');?>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>

    