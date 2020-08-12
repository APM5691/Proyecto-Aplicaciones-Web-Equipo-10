<?php
session_start();
?>
<?php
if (
    !isset($_POST['id_direccion'])
    || !isset($_POST['clientes_id']) || empty($_POST['clientes_id'])
    || !isset($_POST['calle']) || empty($_POST['calle'])
    || !isset($_POST['numero']) || empty($_POST['numero'])
    )
 {
    header('Location: direcciones.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
update direccion set
   clientes_id = :clientes_id
   , calle = :calle
   , numero = :numero
   , localidad = :localidad
   , municipio_id = :municipio_id
   , estado_id = :estado_id

where
   id_direccion = :id_direccion
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
   ':id_direccion' => $_POST['id_direccion']
   ,':clientes_id' => $_POST['clientes_id']
   , ':calle' => $_POST['calle']
   , ':numero' => $_POST['numero']
   , ':localidad' => $_POST['localidad']
   , ':estado_id' => $_POST['estado_id']
   , ':municipio_id' => $_POST['municipio_id']
   
]);
 header('Location: direcciones.php?info=Dirección actualizada exitosamente');
 ?>