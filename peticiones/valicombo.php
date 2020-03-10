<?php
include ('../bd/conexion.php'); 

$p=$_POST['producto'];
$c=$_POST['cantidad'];

	$sql=mysqli_query($conexion,"SELECT * FROM compra ORDER by id_comp DESC LIMIT 1");
	$com=mysqli_fetch_array($sql);

	$pre=mysqli_query($conexion,"SELECT prec_prod from producto where id_prod  = '$p' ");
	 $pre=mysqli_fetch_array($pre);

	 $sub=$pre[0]*$c;

    
	$sql=mysqli_query($conexion,"INSERT INTO compra_producto values('$com[0]','$p','$pre[0]','$c','$sub')");

	if ($sql) {
		
		$sql=mysqli_query($conexion,"UPDATE producto SET unidx_prod=unidx_prod-'$c' where id_prod='$p'");
		header('location:../app/principal.php');
	}

 ?>