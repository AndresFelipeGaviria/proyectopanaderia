<?php 	
		include '../bd/conexion.php';

		$id=$_GET['id'];

		$sql=mysqli_query($conexion,"DELETE FROM jefes WHERE id_jefe='$id'");
if($sql){
	header("location:../app/administradores.php");

 }else{
 	echo "no se pudo eliminar";
 }


 ?>