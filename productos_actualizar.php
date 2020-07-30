<?php
if (
    !isset($_POST['nombre_producto']) || empty($_POST['nombre_producto'])
    || !isset($_POST['tipo_de_joya_id']) || empty($_POST['tipo_de_joya_id'])
     || !isset($_POST['no_existencias']) || empty($_POST['no_existencias'])
     || !isset($_POST['precio']) || empty($_POST['precio'])
     || !isset($_POST['descricion']) || empty($_POST['descricion'])
     || !isset($_POST['medida']) || !in_array($_POST['medida'])
     || !isset($_POST['precio_oferta']) || !in_array($_POST['precio_oferta'])
     || !isset($_POST['foto']) || !in_array($_POST['foto'])
     || !isset($_POST['foto_original']) || empty($_POST['foto_original'])
) {
    header('Location: productos_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
update producto set
     nombre_producto = :nombre_producto
    , tipo_de_joya_id = :tipo_de_joya_id
    , no_existencias = :no_existencias
    , precio = :precio
    , descricion = :descricion
    , medida = :medida
    , precio_oferta = :precio_oferta
    , foto = :foto
    , foto_original = :foto_original
where
    id_producto = :id_producto
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre_cliente' => $_POST['nombre_cliente']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':telefono' => $_POST['telefono']
    , ':correo_electronico' => $_POST['correo_electronico']
    , ':password' => $_POST['password']
    , ':sexo' => $_POST['sexo']
    , ':perfil' => $_POST['perfil']
    , ':estatus' => $_POST['estatus']
    , ':id_cliente' => $_POST['id_cliente']
]);
 header('Location: clientes.php?info=Usuario actualizado exitosamente');
 ?>