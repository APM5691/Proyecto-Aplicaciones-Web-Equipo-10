<?php

require_once './checar_sesion.php';

require_once './conexion.php';

// print_r($_SESSION);


// if (

//     !isset($_GET['monto_total']) || empty($_GET['monto_total'])

// ) {

//     header('Location: ventas_formulario.php?info=Parámetros incorrectos');

//     exit;

// }

 $monto_total = $_GET['monto_total'];

 $clientes_id1 = $_GET['clientes_id1'];


$sql = <<<fin

insert into venta set

  monto_total={$monto_total} 
, direcciones_id=0
, clientes_id1={$clientes_id1}

fin;


mysqli_query($conexion,$sql);


header('Location: ventas.php?info=Venta creada exitosamente');

?>