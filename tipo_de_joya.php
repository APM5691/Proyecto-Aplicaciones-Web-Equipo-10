<?php

session_start();

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

                Tipos de joya

                <a href="tipo_de_joya_formulario.php"class="btn btn-success float-right">Agregar</a>

            </div>

            <div class="card-body">

                <table class="table table-dark table table-hover">

                    <thead class="thead-light">

                        <tr>

                            <th style="width: 90%;" scope="col">Tipo</th>

                            <th style="width: 10%;" scope="col">Editar</th>

                            <th style="width: 10%;" scope="col"></th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                        $sql = 'select id_tipo_de_joya, tipo_joya from tipo_de_joya order by id_tipo_de_joya asc';

                        foreach ($conexion->query($sql) as $registro) {

                            $registro['tipo_joya'] = htmlentities($registro['tipo_joya']);

                            $registro['id_tipo_de_joya'] = htmlentities($registro['id_tipo_de_joya']);

                            

                        echo <<<fin



                        <tr>

                            <td scope="row">{$registro['tipo_joya']}</td>

                            <td>

                                <a class="btn btn-outline-danger btn-sm" href="tipo_de_joya_borrar.php?id_tipo_de_joya={$registro['id_tipo_de_joya']}"><i class="fa fa-trash-alt"></i></a>

                            </td>

                            <td>

                                <a class="btn btn-secondary btn-sm" href="tipo_de_joya_editar.php?id_tipo_de_joya={$registro['id_tipo_de_joya']}"><i class="fa fa-edit"></i></a>

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