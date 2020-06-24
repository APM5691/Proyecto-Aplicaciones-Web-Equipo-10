<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ventas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
</head>

<body>
<?php readfile('./menu.html'); ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Ventas
        </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 30%;" scope="col">Cantidad de productos</th>
                            <th style="width: 30%;" scope="col">Monto total</th>
                            <th style="width: 30%;" scope="col">Subtotal</th>
                            <th style="width: 10%;" scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">5</th>
                            <th scope="row">51020</th>
                            <th scope="row">40000</th>
                            <td>
                                <a class="btn btn-primary" href="ventas_formulario.html"><i class="fas fa-plus-square"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <th scope="row">2120</th>
                            <th scope="row">12200</th>
                            <td>
                                <a class="btn btn-primary" href="ventas_formulario.html"><i class="fas fa-plus-square"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="detalle_venta.php" class="btn btn-success float-right">Detalle de las ventas</a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Detalles de la venta
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 90%;" scope="col">Detalle de venta</th>
                            <th style="width: 10%;" scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Luminosete</th>
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