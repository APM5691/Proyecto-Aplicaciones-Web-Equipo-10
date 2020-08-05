<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['tipo_material']) || !in_array($_POST['tipo_material'], ['chapa_de_oro', 'Oro_amarillo', 'Oro _blanco', 'plata'])
) {
    header('Location: materiales_editar.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
update materiales set
     nombre = :nombre
    , tipo_material = :tipo_material
where
    id_material = :id_material
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':tipo_material' => $_POST['tipo_material']
    , ':id_material' => $_POST['id_material']
]);
 header('Location: materiales.php?info=Material actualizado exitosamente');
 ?>