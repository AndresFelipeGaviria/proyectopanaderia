	<?php 
include "../libre.php";

require_once"../bd/conexion.php";
include"../emergentes.php";
?>

<div class="container"> 

	<div class="row">
	    <div class="col-sm-12">
		       <h1> <center>PRODUCTOS</center> </h1>


		    <table class="table table-bordered">


		    	
			<caption>

				<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo"> 
					agregar nuevo
                   <span class="glyphicon glyphicon-plus"> </span>
               
			</caption>

				<tr>
					<td>id_prod</td>
					<td>nom_prod</td>
					<td>unidx_prod</td>
					<td>fecha_ven_prod</td>
					<td>prec_prod</td>
					<td>Editar</td>
					<td>Borrar</td>
				</tr>

				<?php 

                $sql=mysqli_query($conexion,"SELECT * FROM producto order by nom_prod" );
                while($productos=mysqli_fetch_array($sql)) {
                	
                 ?>
				<tr>
					<td><?php echo $productos[0] ?></td>
	                <td><?php echo $productos[1] ?></td>
	                <td><?php echo $productos[2] ?></td>
	                <td><?php echo $productos[3] ?></td>
	                <td><?php echo $productos[4] ?></td>
	                <td>
	                	<a href="actualizar.php?id=<?php echo $productos[0] ?> " class="btn btn-warning glyphicon glyphicon-pencil"></a>
	                </td>
	                <td > <a href="../peticiones/eliminarproducto.php?id=<?php echo $comp[0] ?>" class="btn btn-danger glyphicon glyphicon-remove"></a>
	                </td>

                </tr>
                <?php 

}

 ?>

			</table>
		</div>
	</div>
</div>




<!-- include"../bd/conexion.php";

$sql= mysqli_query("SELECT * FROM productos");
 -->


 