<?php

require_once './checar_sesion.php';

require_once('./fpdf/fpdf.php');

define('EURO',chr(128));
$pdf = new FPDF('P','mm',array(80,150));
$pdf->AddPage();
 
// CABECERA
$pdf->SetFont('Helvetica','',12);

$pdf->Cell(60,4,'Joyeria Luminosite',0,1,'C');
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(60,4,'56 5 De Mayo Colonia Centro,',0,1,'C');
$pdf->Cell(60,4,'Toluca Centro, Toluca, Edo Mex',0,1,'C');
$pdf->Cell(60,4,'+52 561 08 35 845',0,1,'C');
$pdf->Cell(60,4,'999 888 777',0,1,'C');
$pdf->Cell(60,4,'Luminositeofc@gmail.com',0,1,'C');
 
// // DATOS FACTURA        
// $pdf->Ln(5);
// $pdf->Cell(60,4,'Factura Simpl.: F2019-000001',0,1,'');
// $pdf->Cell(60,4,'Fecha: 28/10/2019',0,1,'');
// $pdf->Cell(60,4,'Metodo de pago: Tarjeta',0,1,'');
 
// // COLUMNAS
// $pdf->SetFont('Helvetica', 'B', 7);
// $pdf->Cell(30, 10, 'Articulo', 0);
// $pdf->Cell(5, 10, 'Ud',0,0,'R');
// $pdf->Cell(10, 10, 'Precio',0,0,'R');
// $pdf->Cell(15, 10, 'Total',0,0,'R');
// $pdf->Ln(8);
// $pdf->Cell(60,0,'','T');
// $pdf->Ln(0);
 
// //PRODUCTOS DEL CARRITO

include("./conexion.php");


if (isset($_SESSION['carrito'])) {

   


    $sql = 'select nombre_producto,precio_oferta,foto,foto_original,precio from producto where id_producto in (' . $_SESSION['carrito'] . ")";
// print_r($_SESSION);
    // foreach ($conexion->query($sql) as $registro) {
    //   $registro['nombre_producto'] = htmlentities($registro['nombre_producto']);
    //   $registro['precio'] = htmlentities($registro['precio']);
    //   $registro['precio_oferta'] = htmlentities($registro['precio_oferta']);

    //   echo <<<fin
      
    //   $pdf->Cell(100, 10,{$registro['nombre_producto']}, 1, 0, 'C', 0);     
    //   $pdf->Cell(60, 10, {$registro['precio_oferta']}, 1, 0, 'C', 0);
    //   $pdf->Cell(60, 10, 1, 0, 1, 'C', 0);     

// fin;

// $resultado = $mysqli->query($sql);

// while($row = $resultado->fetch_assoc()){
//   $pdf->Cell(100, 10, $row['nombre_producto'], 1,0, 'C, 0');
//   $pdf->Cell(100, 10, $row['precio_oferta'], 1,0, 'C, 0');

     

   }
   //else{
     //  $pdf->Cell(60,0,'no recibe el sesion',0,1,'C');
       //$pdf->Cell(60,0,$_SESSION['carrito'],0,1,'C');

//   }


// // PRODUCTOS
// $pdf->SetFont('Helvetica', '', 7);
// $pdf->MultiCell(30,4,'Manzana golden 1Kg',0,'L'); 
// $pdf->Cell(35, -5, '2',0,0,'R');
// $pdf->Cell(10, -5, number_format(round(3,2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Cell(15, -5, number_format(round(2*3,2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Ln(3);
// $pdf->MultiCell(30,4,'Malla naranjas 3Kg',0,'L'); 
// $pdf->Cell(35, -5, '1',0,0,'R');
// $pdf->Cell(10, -5, number_format(round(1.25,2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Cell(15, -5, number_format(round(1.25,2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Ln(3);
// $pdf->MultiCell(30,4,'Uvas',0,'L'); 
// $pdf->Cell(35, -5, '5',0,0,'R');
// $pdf->Cell(10, -5, number_format(round(1,2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Cell(15, -5, number_format(round(1*5,2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Ln(3);
 
// // SUMATORIO DE LOS PRODUCTOS Y EL IVA
// $pdf->Ln(6);
// $pdf->Cell(60,0,'','T');
// $pdf->Ln(2);    
// $pdf->Cell(25, 10, 'TOTAL SIN I.V.A.', 0);    
// $pdf->Cell(20, 10, '', 0);
// $pdf->Cell(15, 10, number_format(round((round(12.25,2)/1.21),2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Ln(3);    
// $pdf->Cell(25, 10, 'I.V.A. 21%', 0);    
// $pdf->Cell(20, 10, '', 0);
// $pdf->Cell(15, 10, number_format(round((round(12.25,2)),2)-round((round(2*3,2)/1.21),2), 2, ',', ' ').EURO,0,0,'R');
// $pdf->Ln(3);    
// $pdf->Cell(25, 10, 'TOTAL', 0);    
// $pdf->Cell(20, 10, '', 0);
// $pdf->Cell(15, 10, number_format(round(12.25,2), 2, ',', ' ').EURO,0,0,'R');
 
// // PIE DE PAGINA
$pdf->Ln(10);
$pdf->Cell(60,0,'EL PERIODO DE DEVOLUCIONES',0,1,'C');
$pdf->Ln(3);
$pdf->Cell(60,0,'CADUCA EL DIA  15/Agosto/2020',0,1,'C');
 


              


$pdf->Output('ticket.pdf','i');

?>