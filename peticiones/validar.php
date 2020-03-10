<?php 
	session_start();
require_once "../bd/conexion.php";
$usuario=$_POST["usuario"];
$pass=$_POST["password"];


$sql= mysqli_query($conexion, " SELECT * from jefes where nombre='$usuario' and password='$pass'");
$user=mysqli_fetch_array($sql);
$result=mysqli_num_rows($sql);
if($result >0){

	$_SESSION['admin']=$user;
	header("location:../app/principal.php");

}else{

header("location:../index.php?salio=0");
}


 ?>
 