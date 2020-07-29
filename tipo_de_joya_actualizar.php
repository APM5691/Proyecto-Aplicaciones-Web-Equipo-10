<?php
// print_r($_POST);
// exit;
if (
    !isset($_POST['id_tipo_de_joya'])
    || !isset($_POST['tipo_joya']) || empty($_POST['tipo_joya']))
 {
    header('Location: tipo_joya.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
update tipo_de_joya set
   tipo_joya = :tipo_joya

where
   id_tipo_de_joya = :id_tipo_de_joya
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':tipo_joya' => $_POST['tipo_joya']
    , ':id_tipo_de_joya' => $_POST['id_tipo_de_joya']

]);
 header('Location: tipo_de_joya.php?info=tipo joya actualizado exitosamente');
 ?>