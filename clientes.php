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
                <a href="clientes_formulario.php"class="btn btn-success float-right">Agregar</a>
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
                                <a class="btn btn-outline-primary" href="clientes_formulario.php"><i
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
                                <a class="btn btn-primary" href="clientes_formulario.php"><i class="fas fa-plus-circle"></i></a>
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
                                <a class="btn btn-primary" href="clientes_formulario.php"><i class="fas fa-plus-circle"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="direcciones.php" class="btn btn-success float-right">Direcciones</a>
            </div>
        </div>
    </div>
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
                            <th style="width: 15%;" scope="col">Calle</th>
                            <th style="width: 20%;" scope="col">Numero</th>
                            <th style="width: 20%;" scope="col">Localidad</th>
                            <th style="width: 20%;" scope="col">Municipio</th>
                            <th style="width: 20%;" scope="col">Estado</th>
                            <th style="width: 5%;" scope="col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Independencia</th>
                            <th scope="row">16</th>
                            <th scope="row">San Lucas</th>
                            <th scope="row">Metepec</th>
                            <th scope="row">México</th>
                            <td>
                                <a class="btn btn-primary" href="direcciones_formulario.php><i class="fas fa-plus-circle"></i></a>
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