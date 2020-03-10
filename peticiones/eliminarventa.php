<?php 
 include "../bd/conexion.php";

 $compra=$_GET['produc'];
 $cod_prod=$_GET['codpro'];
 $canti=$_GET['canti'];

 $sql=mysqli_query($conexion,"DELETE FROM compra_producto where cod_compra = '$compra' and cod_prod = '$cod_prod'");

 if($sql){
 	$sql=mysqli_query($conexion,"UPDATE  producto SET unidx_prod = unidx_prod + '$canti' where id_prod='$cod_prod'
 		");
 	header("location:../app/principal.php");
 }else{

 	echo "no dio";
 }



 ?>