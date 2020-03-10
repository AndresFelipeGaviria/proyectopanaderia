<?php 	
		include '../bd/conexion.php';

		$id=$_POST['id'];
		$nom=$_POST['nombre'];
		$pass=$_POST['pass'];

$sql=mysqli_query($conexion,"UPDATE jefes SET nombre='$nom',password='$pass' WHERE id_jefe='$id'");
if($sql){
	header("location:../app/principal.php");

 }else{
 	echo "no se pudo actualizar";
 }

 ?>