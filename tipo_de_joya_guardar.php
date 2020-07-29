<?php
if (
    !isset($_POST['tipo_joya']) || empty($_POST['tipo_joya'])
    
) {
    header('Location: tipo_de_joya_formularios.php?info=Parámetros incorrectos');

    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert tipo_de_joya set
  tipo_joya = :tipo_joya


fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':tipo_joya' => $_POST['tipo_joya']

]);
header('Location: tipo_de_joya.php?info=tipo joya creado exitosamente');
?>