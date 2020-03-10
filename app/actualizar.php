<?php 
	include '../bd/conexion.php';
	include '../menu.php';
		$id=$_GET['id'];
 	 
 	 $sql=mysqli_query($conexion,"SELECT * FROM producto WHERE id_prod='$id'");
 	 $array=mysqli_fetch_array($sql);

 ?>
 <center>
 	<div style="width:50%;">
 		<form action="../peticiones/actualizarproducto.php" method="POST">
            <br>
                <br>
 				<label>Id producto</label>
                <input type="text" name="id" class="form-control input-sm" value="<?php echo $array[0]; ?>" disabled>
                <label>nombre producto</label>
                <input type="text" name="nombre" class="form-control input-sm" value="<?php echo $array[1]; ?>">
                <label>und por producto</label>
                <input type="number" name="unidades" class="form-control input-sm" value="<?php echo $array[2]; ?>">
                <label> fecha_ven_prod</label>
                <input type="date" name="vencimiento" class="form-control input-sm" value="<?php echo $array[3]; ?>">
                <label>precio </label>
                <input type="number" name="precio" class="form-control input-sm" value="<?php echo $array[4]; ?>"> <br>


                <a href="productos.php" type="button" class="btn btn-default" data-dismiss="modal"> close</button></a>
                <button type="submit" class="btn btn-primary" id="guardar"> guardar</button>
       </form>
 	</div>
 </center>
  