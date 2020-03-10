<?php 

include "../bd/conexion.php";

$compra=$_POST['compra'];
$producto=$_POST['producto'];
$cvieja=$_POST['cvieja'];
$cantidad=$_POST['cantidad'];

// Aqui actualize la cantidad vieja suamndosela a la cantidad de producto tblproducto

$sql=mysqli_query($conexion,"UPDATE producto SET unidx_prod=unidx_prod + '$cvieja' where id_prod = '$producto' ");
if($sql){
// $val=mysqli_fetch_array($sql);
// var_dump($sql);

// if($sql){


	$sql=mysqli_query($conexion,"UPDATE producto SET unidx_prod= unidx_prod -'$cantidad' where id_prod = '$producto'");

	$sql=mysqli_query($conexion,"UPDATE compra_producto SET cantidad=  '$cantidad' where cod_compra = 
		'$compra' and cod_prod ='$producto'");

    $sql=mysqli_query($conexion,"UPDATE compra_producto SET precio= '$cantidad'* prec_uni where cod_prod= '$producto'");	
	header('location:../app/principal.php');
}
 ?>
