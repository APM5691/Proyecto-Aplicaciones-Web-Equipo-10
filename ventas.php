<?php
require_once './conexion.php';
?>
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
                <a href="ventas_formulario.php"class="btn btn-success float-right">Agregar</a>
        </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 90%;" scope="col">Monto total</th>
                            <th style="width: 10%;" scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = 'select monto_total,id_venta from venta order by monto_total asc';
                        foreach ($conexion->query($sql) as $registro) {
                            $registro['monto_total'] = htmlentities($registro['monto_total']);
                            $registro['id_venta'] = htmlentities($registro['id_venta']);
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['monto_total']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="ventas_editar.php?id={$registro['id_venta']}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
fin;
                }
                        ?>
                    </tbody>
                </table>
                <a href="detalle_venta.php" class="btn btn-success float-right">Detalle de las ventas</a>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>