<?php
session_start();
?>
<?php
if (
    !isset($_POST['calle']) || empty($_POST['calle'])
    || !isset($_POST['clientes_id']) || empty($_POST['clientes_id'])
    || !isset($_POST['numero']) || empty($_POST['numero'])
    || !isset($_POST['localidad']) || empty($_POST['localidad'])
    || !isset($_POST['municipio_id']) || empty($_POST['municipio_id'])
    || !isset($_POST['estado_id']) || empty($_POST['estado_id'])
) {
    header('Location: direcciones_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
    insert into direccion set
    clientes_id = :clientes_id
    , calle = :calle
    , numero = :numero
    , localidad = :localidad 
    , municipio_id= :municipio_id
    , estado_id = :estado_id
fin;


$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':clientes_id' => $_POST['clientes_id']
    , ':calle' => $_POST['calle']
    , ':numero' => $_POST['numero']
    , ':localidad' => $_POST['localidad']
    , ':estado_id' => $_POST['estado_id']
    , 'municipio_id' => $_POST['municipio_id']
]);
header('Location: direcciones.php?info=Dirección creada exitosamente');