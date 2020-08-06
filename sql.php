
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion Base de Datos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Copias de seguridad
                <a href="backup.php" class="btn btn-success float-right">Crear una nueva copia de seguridad</a>
                <a href="delete.php" class="btn btn-danger float-right">Borrar Base de Datos</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table table-hover">
                    <thead class="thead-light">
                        <tr>
                            
                            <th style="width: 8%;" scope="col">Numero</th>
                            <th style="width: 10%;" scope="col">Nombre</th>
                            <th style="width: 20%;" scope="col">Fecha y hora de la creacion del respaldo</th>
                            <th style="width: 5%;" scope="col">Restaurar</th>
                            
                            <th style="width: 5%;" scope="col">Borrar
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $angel = count(glob('backup/{*.txt,*.sql}', GLOB_BRACE));

                        $num = 0;
                        

                        if ($gestor = opendir('backup/')) {

                            while (false !== ($entrada = readdir($gestor))) {

                                if ($entrada != "." && $entrada != "..") {

                                    $fecha = date("F d Y H:i:s.", filectime('backup/'.$entrada));
                                    
                                    $num = $num + 1;

                                    echo <<<fin
                                    
                        <tr>
                            <td scope="row">{$num}</td>
                            <td scope="row">{$entrada}</td>
                            <td scope="row">{$fecha}</td>
                            <td>
                            <a class="btn btn-outline-primary  btn-block" href="restaurar.php?nombre={$entrada}"><i class="fa fa-undo"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-secondary" href="borrar.php?nombre={$entrada}"><i class="fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        
fin;
                                    
                                }
                            }
                            
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>