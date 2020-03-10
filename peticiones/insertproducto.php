<?php 
include '../bd/conexion.php'; /*aqui se incluye la conexion*/
	$n=$_POST['nombre'];
	$u=$_POST['unidades'];
	$v=$_POST['vencimiento'];
	$p=$_POST['precio'];

 	$sql=mysqli_query($conexion,"INSERT INTO producto VALUES ('','$n','$u','$v','$p')");
 	if ($sql) {
 		header('location:../app/productos.php'); 

 	}else{
 		echo "no dio";
 	}

 ?>