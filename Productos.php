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
                            <th style="width: 45%;" scope="col">Productos</th>
                            <th style="width: 45%;" scope="col">Precio</th>
                            <th style="width: 10%;" scope="col">
                                <a class="btn btn-outline-primary" href="productos_formulario.php"><i
                                        class="fa fa-plus"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Anillos</th>
                            <th scope="row">200$</th>
                            <td>
                                <a class="btn btn-primary"><i class="fas fa-plus-square"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">Diademas</th>
                            <th scope="row">350$</th>
                            <td>
                                <a class="btn btn-primary"><i class="fas fa-plus-square"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>