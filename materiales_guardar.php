<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['tipo_material']) || empty($_POST['tipo_material'])
) {
    header('Location: materiales_formulario.php?info=Parámetros incorrectos');

    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert into materiales set
    nombre = :nombre
    , tipo_material = :tipo_material
fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    ,':tipo_material' => $_POST['tipo_material']
]);
header('Location: materiales.php?info=Material creado exitosamente');
?>