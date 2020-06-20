<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>

        <?php readfile('./menu.html'); ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Usuarios
                <a href="clientes_formulario.html"class="btn btn-success float-right">Agregar</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 20%;" scope="col">Nombre</th>
                            <th style="width: 20%;" scope="col">Correo</th>
                            <th style="width: 15%;" scope="col">Perfil</th>
                            <th style="width: 15%;" scope="col">Estatus</th>
                            <th style="width: 10%;" scope="col">
                                <a class="btn btn-outline-primary" href="productos_formulario.php"><i
                                        class="fa fa-plus"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Angel</th>
                            <th scope="row">angel_palacios5691@outlook.com</th>
                            <th scope="row">Tecnico</th>
                            <th scope="row">Activo</th>
                            <td>
                                <a class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">Angel</th>
                            <th scope="row">angel_palacios5691@outlook.com</th>
                            <th scope="row">Tecnico</th>
                            <th scope="row">Activo</th>
                            <td>
                                <a class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
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