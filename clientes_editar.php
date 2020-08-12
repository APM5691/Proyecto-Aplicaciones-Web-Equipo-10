<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location: clientes.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id_cliente
    , nombre_cliente
    , primer_apellido
    , segundo_apellido
    , telefono
    , correo_electronico
    , password
    , perfil
    , sexo
    , estatus
from
    cliente
where
    id_cliente = :id
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$cliente = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $cliente) {
    header('Location: clientes.php?info=No se encontró el cliente');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de usuarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <?php require_once('./menu.php'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="clientes.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                <i class="fa fa-users"></i> Clientes
            </div>
            <div class="card-body">
                <form action="clientes_actualizar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre_cliente" name="nombre_cliente" aria-describedby="nombre_cliente_help" value="<?php echo htmlentities($cliente['nombre_cliente']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help" value="<?php echo htmlentities($cliente['primer_apellido']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help" value="<?php echo htmlentities($cliente['segundo_apellido']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono de oficina</label>
                        <input type="text" class="form-control form-control-sm" id="telefono" name="telefono" aria-describedby="telefono_oficina_help" value="<?php echo htmlentities($cliente['telefono']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control form-control-sm" id="correo_electronico" name="correo_electronico" aria-describedby="correo_help" value="<?php echo htmlentities($cliente['correo_electronico']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password" aria-describedby="password_help" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirma">Contraseña (confirma)</label>
                        <input type="password" class="form-control form-control-sm" id="password_confirma" name="password_confirma" aria-describedby="password_help" required>
                    </div>
                    <div class="form-group">
                        <label for="perfil">Perfil</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="perfil" id="perfil1" value="Administrador" <?php echo 'Administrador' == $cliente['perfil'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="perfil1">Administrador</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="perfil" id="perfil2" value="Técnico" <?php echo 'Técnico' == $cliente['perfil'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="perfil2">Técnico</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="perfil" id="perfil3" value="Staff" <?php echo 'Staff' == $cliente['perfil'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="perfil3">Staff</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="estatus">Estatus</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="Activo" <?php echo 'Activo' == $cliente['estatus'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="estatus1">Activo</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="Inactivo" <?php echo 'Inactivo' == $cliente['estatus'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="estatus2">Inactivo</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Hombre" <?php echo 'Hombre' == $cliente['sexo'] ? 'checked' : ''; ?> />
                            <label class="form-check-label" for="sexo">Hombre</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Mujer" <?php echo 'Mujer' == $cliente['sexo'] ? 'checked' : ''; ?> />
                            <label class="form-check-label" for="sexo">Mujer</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Indeterminado" <?php echo 'Indeterminado' == $cliente['sexo'] ? 'checked' : ''; ?> />
                            <label class="form-check-label" for="sexo">Indeterminado</label>
                        </div>
                        <div class="form-group">
                            <input type='file' name='imagen'>
                            <br>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id_cliente" value="<?php echo $cliente['id_cliente']; ?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>