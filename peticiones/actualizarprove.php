<?php 
include "../bd/conexion.php";

$i=$_POST['idd'];
$n=$_POST['nitt'];
$e=$_POST['empresaa'];
$t=$_POST['telefonoo'];
$d=$_POST['direccionn'];

$sql=mysqli_query($conexion,"UPDATE proveedores set nit='$n', nom_prov='$e', tel_prov='$t', direc_prov='$d' where id_prove='$i'");

if($sql){
	header("location:../app/proveedores.php");
}else{
	echo "no dio";
}
	





 ?>