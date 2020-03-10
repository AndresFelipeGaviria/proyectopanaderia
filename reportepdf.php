<?php
require('pdf/fpdf.php');
include('bd/conexion.php');
session_start();
$venta=$_GET['codventa'];
echo $venta;

$pdf = new FPDF();
$pdf->AddPage();


// $pdf->Image('../../img/fresa.png' , 93 ,8, 30 , 16,'PNG');
// $pdf->Cell(200,15,'',0,1,'C');
$pdf->SetFont('Arial','B',28);
$pdf->SetTextColor(21, 67, 96 );  // Establece el color del texto (en este caso es blanco) 
$pdf->Cell(200,10,utf8_decode('PANADERIA EL MANA'),0,1,'C');  // primero nuestra funcion cell, luego en pixeles nuestra celda, alto de la celda,  luego el texto que lleva la celda,luego si lleva borde = 1 si lleva borde 0 : si no lleva, si lleva salto de linea, la alineacion c: centrado L: de izquierda, R: de derecha
$pdf->SetFont('Arial','B',10);#070707
$pdf->Cell(200,5,utf8_decode('NIT 00123'),0,1,'C');
$pdf->Cell(200,5,utf8_decode('Todos los derechos reservados'),0,1,'C');
$pdf->Cell(200,5,utf8_decode('Andresgavirialopez.com'),0,1,'C');
$pdf->Cell(200,15,'',0,1,'C');

// // **************Datos del cliente
$pdf->SetFont('Arial','',13);#070707
$pdf->SetTextColor(7,7,7);  // Establece el color del texto (en este caso es blanco) 
$pdf->Cell(30,7,utf8_decode('N° FACTURA: '.'  '.$venta),0,1,'L');
$pdf->Cell(20,7,utf8_decode('FECHA : '.'  '.date('Y-m-d')),0,1,'L');
$pdf->Cell(20,7,utf8_decode('LO ATENDIO :'.'   '.$_SESSION['admin']['1']),0,1,'L');
$pdf->Cell(200,15,'',0,1,'C');

	// $pdf->SetFont('Arial','12', '11');

// *******creamos la tabla}
$pdf->SetFont('Arial','B',12);
$pdf->SetX(30);
$pdf->Cell(38,10,utf8_decode('Producto'),1,0,'C');
$pdf->Cell(38,10,utf8_decode('Precio unidad'),1,0,'C');
$pdf->Cell(38,10,utf8_decode('Cantidad'),1,0,'C');
$pdf->Cell(38,10,utf8_decode('subtotal'),1,1,'C');

$total=0;

$sql = mysqli_query($conexion, "SELECT pro.nom_prod,com.prec_uni,com.cantidad, com.precio from compra_producto as com inner join producto as pro on pro.id_prod = com.cod_prod where cod_compra = 5");
while($result=mysqli_fetch_array($sql)){
$pdf->SetX(30);
	$pdf->Cell(38,10,utf8_decode($result[0]),1,0,'C');
	$pdf->Cell(38,10,utf8_decode('$'.number_format($result[1])),1,0,'C');
	$pdf->Cell(38,10,utf8_decode($result[2]),1,0,'C');
	$pdf->Cell(38,10,utf8_decode('$'.number_format($result[3])),1,1,'C');
	$total=$total+$result[3];
}


$pdf->SetFont('Arial','B',8);
$pdf->SetX(30);
// $pdf->Cell(76,10,utf8_decode('Observaciones'),'L,B',1,'C');
$pdf->Cell(76,20,utf8_decode('Observaciones'),'L,B',0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(38,20,utf8_decode('Total a pagar'),1,0,'C');
$pdf->Cell(38,20,utf8_decode('$'.number_format($total)),1,1,'C');



$pdf->Output();
?>