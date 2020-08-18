<?php
require_once './checar_sesion.php';


if (

    !isset($_POST['calle']) || empty($_POST['calle'])

    || !isset($_POST['numero']) || empty($_POST['numero'])

    || !isset($_POST['localidad']) || empty($_POST['localidad'])

    || !isset($_POST['municipio_id']) || empty($_POST['municipio_id'])

    || !isset($_POST['estado_id']) || empty($_POST['estado_id'])

) {

    header('Location: direcciones_formulario.php?info=Parámetros incorrectos');

    exit;

}

$_POST['clientes_id1']=$_SESSION['id'];

$sql = <<<fin

    insert into direccion set

    clientes_id1 = :clientes_id1

    , calle = :calle

    , numero = :numero

    , localidad = :localidad 

    , municipio_id= :municipio_id

    , estado_id = :estado_id

fin;

$sql=  mysqli_query($conexion,$sql);

$dirreccion=  mysqli_query($conexion,"SELECT max(`id_venta`) FROM `venta`");

$_SESSION['direccion'] = $dirreccion;

header('Location: direcciones.php?info=Dirección creada exitosamente');
?>