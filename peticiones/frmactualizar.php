<?php 	
		include '../bd/conexion.php';

		$id=$_GET['id'];
		
		$sql=mysqli_query($conexion,"SELECT * FROM jefes WHERE id_jefe='$id'");
		$jefe=mysqli_fetch_array($sql);

 ?>
 <head>
	<title>login</title>
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
		<form action="actualizar.php" method="POST"> 
			<input type="number" name="id" class="form-control" placeholder="identificacion" value="<?php echo $jefe[0]?>"><br>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $jefe[1]?>"><br>
			<input type="text" name="pass" class="form-control" placeholder="Contraseña" value="<?php echo $jefe[2]?>"><br>
            <button type="submit" class="btn btn-primary">actualiza</button>
</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
