<?php
if (
    !isset($_POST['nombre_cliente']) || empty($_POST['nombre_cliente'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
     || !isset($_POST['segundo_apellido']) || empty($_POST['segundo_apellido'])
     || !isset($_POST['telefono']) || empty($_POST['telefono'])
     || !isset($_POST['correo_electronico']) || empty($_POST['correo_electronico']) || !filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)
     || !isset($_POST['perfil']) || !in_array($_POST['perfil'], ['Administrador', 'Técnico', 'Staff'])
     || !isset($_POST['estatus']) || !in_array($_POST['estatus'], ['Activo', 'Inactivo'])
     || !isset($_POST['password']) || empty($_POST['password']) || strlen($_POST['password']) < 8
) {
    header('Location: clientes_formularios.php?info=Parámetros incorrectos');

    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert into cliente set
    nombre_cliente = :nombre_cliente
    , primer_apellido = :primer_apellido
    , segundo_apellido = :segundo_apellido
    , telefono = :telefono
    , password = :password
    , correo_electronico = :correo_electronico
    

fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre_cliente' => $_POST['nombre_cliente']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':telefono' => $_POST['telefono']
    , ':password' => $_POST['password']
    , ':correo_electronico' => $_POST['correo_electronico']
]);
header('Location: clientes.php?info=Usuario creado exitosamente');
?>