<?php 
include "../bd/conexion.php";

$n=$_POST['nit']; 
$e=$_POST['empresa'];
$t=$_POST['telefono'];
$d=$_POST['direccion'];

$sql=mysqli_query($conexion,"INSERT INTO proveedores VALUES ('','$n','$e','$t','$d') ");

if($sql){
  header("location:../app/proveedores.php");
}else{
   echo "no dio";
}

 ?>