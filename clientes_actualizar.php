<?php
if (
    !isset($_POST['nombre_cliente']) || empty($_POST['nombre_cliente'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
     || !isset($_POST['segundo_apellido']) || empty($_POST['segundo_apellido'])
     || !isset($_POST['telefono']) || empty($_POST['telefono'])
     || !isset($_POST['correo_electronico']) || empty($_POST['correo_electronico']) || !filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)
     || !isset($_POST['perfil']) || !in_array($_POST['perfil'], ['Administrador', 'Técnico', 'Staff'])
     || !isset($_POST['estatus']) || !in_array($_POST['estatus'], ['Activo', 'Inactivo'])
     || !isset($_POST['sexo']) || !in_array($_POST['sexo'], ['Hombre', 'Mujer','Indeterminado'])
     || !isset($_POST['password']) || empty($_POST['password']) || strlen($_POST['password']) < 8
) {
    header('Location: cliente_formularios.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';

$nombreimg = $_FILES['imagen']['name'];
$archivo = $_FILES['imagen']['tmp_name'];
$ruta ="img";

$ruta=$ruta."/"."fotos_perfil"."/".$nombreimg;

move_uploaded_file($archivo,$ruta);

$_POST['foto_perfil']=$ruta;


$sql = <<<fin
update cliente set
     nombre_cliente = :nombre_cliente
    , primer_apellido = :primer_apellido
    , segundo_apellido = :segundo_apellido
    , telefono = :telefono
    , correo_electronico = :correo_electronico
    , password = :password
    , sexo = :sexo
    , perfil = :perfil
    , estatus = :estatus
    , foto_perfil = :foto_perfil
where
    id_cliente = :id_cliente
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre_cliente' => $_POST['nombre_cliente']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':telefono' => $_POST['telefono']
    , ':correo_electronico' => $_POST['correo_electronico']
    , ':password' => password_hash( $_POST['password'], PASSWORD_BCRYPT,['cost'=>12])
    , ':sexo' => $_POST['sexo']
    , ':perfil' => $_POST['perfil']
    , ':estatus' => $_POST['estatus']
    , ':id_cliente' => $_POST['id_cliente']
    , ':foto_perfil' => $_POST['foto_perfil']
]);
 header('Location: clientes.php?info=Usuario actualizado exitosamente');
 ?>