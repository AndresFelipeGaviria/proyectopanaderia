<?php 

include "../bd/conexion.php";

$idc=$_GET['codcompra'];
$idp=$_GET['codpro'];
$nompro=$_GET['nombre'];

$sql=mysqli_query($conexion,"SELECT * from compra_producto where cod_compra='$idc' and cod_prod='$idp'");
$sql=mysqli_fetch_array($sql);

 ?>
 <head>
	<title>venta</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script src="../librerias/jquery-3.2.1.min.js"></script>
</head>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<form action="actualizarventa.php" method="POST">
		<br>
		<br>
		<br> 
			<input type="text" name="cvieja" value="<?php echo $sql[3] ?>" hidden>
			<input type="text" name="compra" value="<?php echo $sql[0] ?>" hidden>
			<input type="text" name="producto" value="<?php echo $sql[1] ?>" hidden>
			<input type="text" class="form-control"  value="<?php echo $nompro?>" readonly=""><br>
			<input type="text" name="cantidad" class="form-control"  value="<?php echo $sql[3]?>"><br>
			<input type="text" class="form-control" placeholder="Contraseña" value="<?php echo $sql[4]?>" readonly=""><br>
			<a href="../app/principal.php" type="button" class="btn btn-default" > cancelar</button></a>
            <button type="submit" class="btn btn-primary">actualiza</button>
</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
