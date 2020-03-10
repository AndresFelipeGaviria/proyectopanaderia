<?php 	
		include '../bd/conexion.php';

		$id=$_GET['id'];

		$sql=mysqli_query($conexion,"DELETE FROM producto WHERE id_prod='$id'");
if($sql){
	header("location:../app/productos.php");

 }else{
 	echo "no se pudo eliminar";
 }


 ?>
 