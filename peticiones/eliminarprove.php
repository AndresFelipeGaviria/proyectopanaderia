<?php 
include "../bd/conexion.php";

$i=$_GET['id'];

$sql=mysqli_query($conexion,"DELETE FROM proveedores where id_prove = '$i'");

if($sql){
	header("location:../app/proveedores.php");
}else{
	echo " no dio";
}

 ?>