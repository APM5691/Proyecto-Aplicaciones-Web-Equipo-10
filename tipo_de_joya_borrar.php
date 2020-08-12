<?php
if (
    !isset($_GET['id_tipo_de_joya']) || empty($_GET['id_tipo_de_joya'])
) {
    header('Location: tipo_de_joya_formularios.php?error=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';

$sql = <<<fin
delete from tipo_de_joya where id_tipo_de_joya=:id_tipo_de_joya
fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':id_tipo_de_joya' => $_GET['id_tipo_de_joya']
    
]);
header('Location: tipo_de_joya.php?info=Usuario borrado exitosamente');
?>