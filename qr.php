<?php

require_once './checar_sesion.php';

require_once './conexion.php';


$sql = "select correo_electronico,password,id_cliente from cliente where id_cliente =".$_SESSION['id'];



  foreach ($conexion->query($sql) as $registro) {

    $registro['password'] = htmlentities($registro['password']);
    $registro['correo_electronico'] = htmlentities($registro['correo_electronico']);
    $registro['id_cliente'] = htmlentities($registro['id_cliente']);
  }


$textqr=$registro['id_cliente'];//Recibo la variable pasada por post
$sizeqr=200;//Recibo la variable pasada por post
include('vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;
 
$qrCode = new QrCode($textqr);//Creo una nueva instancia de la clase
$qrCode->setSize($sizeqr);//Establece el tamaño del qr
//header('Content-Type: '.$qrCode->getContentType());
$image= $qrCode->writeString();//Salida en formato de texto 
 
$imageData = base64_encode($image);//Codifico la imagen usando base64_encode
 

echo '<img src="data:image/png;base64,'.$imageData.'">';

 ?>


