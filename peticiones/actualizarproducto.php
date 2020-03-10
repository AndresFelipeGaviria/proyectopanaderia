<?php 
	include '../bd/conexion.php';

	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$u=$_POST['unidades'];
	$v=$_POST['vencimiento'];
	$p=$_POST['precio'];



 	$sql=mysqli_query($conexion,"UPDATE producto SET nom_prod='$n',unidx_prod='$u',fecha_ven_prod='$v',prec_prod='$p' WHERE id_prod='$id'");
 	if ($sql) {
 		header('location:../app/productos.php'); 

 	}else{
 		echo "no dio";
 	}

 ?>