<?php 

require_once "../bd/conexion.php";

$id=$_POST['id'];
$nom=$_POST['nombre'];
$pass=$_POST['pass'];
// aqui validamos que el documento no exista en la bd
$sql= mysqli_query($conexion, "SELECT * from jefes where id_jefe = '$id'");
$rows=mysqli_num_rows($sql);

if($rows>0){

	header('location:../app/administradores.php?r=0');
}else{
	$sql=mysqli_query($conexion,"INSERT INTO jefes VALUES ('$id','$nom','$pass')");
	if($sql){
		// cuando se guarden los datos volvemos al formulario la la variable en 1

		header("location:../app/administradores.php?r=1");
 	}
}


// aqui insertamos los datos del administradores


 ?>
