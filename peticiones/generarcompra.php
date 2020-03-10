<?php 
	include ('../bd/conexion.php'); 
session_start();

$fecha=date('d-m-y');
$admin=$_SESSION['admin'][0];
	
// VAMOS A CREAR LA COMPRTA
$sql=mysqli_query($conexion,"INSERT INTO compra values ('','$fecha','$admin')");
if ($sql) {
	header('location:../app/principal.php');
}else{
	echo "no dio";
}




 ?>