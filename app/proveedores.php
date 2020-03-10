<?php 

include "../libre.php";
include "../bd/conexion.php";
include "../emergentes.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	
	<title> Proveedores</title>
</head>
<body>


<div class="modal fade" id="modalProve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Nuevo Proveedor</h4>
      </div>
     
          <div class="modal-body">
            
            <form action="../peticiones/insertproveedor.php" method="POST">

                 <label>ID</label>
                <input type="number" name="id" readonly=""  value="" class="form-control input-sm"  >
                <label>NIT</label>
                <input type="text" name="nit" class="form-control input-sm">
                <label> Nombre de la Empresa</label>
                <input type="text" name="empresa" class="form-control input-sm">
                <label>Telefono </label>
                <input type="number" name="telefono" class="form-control input-sm" >
                <label>Direccion </label>
                <input type="text" name="direccion" class="form-control input-sm">
                
                <br>
              
                <button type="button" class="btn btn-default" data-dismiss="modal"> close</button>
                <button type="submit" class="btn btn-primary" id="guardar"> guardar</button>
       </form>
          </div>
          
    </div>
  </div>
</div>


	<center>	
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Proveedores</h1>
					
						<hr>		
						<table class="table table-bordered">

							<caption>

				<button class="btn btn-primary" data-toggle="modal" data-target="#modalProve"> 
					agregar nuevo 
                   <span class="glyphicon glyphicon-plus"> </span>
               
			</caption>
							<tr>
							<td>ID</td>	
							<td>NIT</td>
							<td>NOMBRE EMPRESA</td>	
							<td>TELEFONO</td>
							<td>DIRECCION</td>	
							<td></td>
							<td></td>		

							</tr>
							<?php

							$sql=mysqli_query($conexion,"SELECT * FROM proveedores"); 
							while ($prov=mysqli_fetch_array($sql)) {
									
								
							 ?>
							
							<tr>

							<td><?php echo $prov[0]; ?></td>
							<td><?php echo $prov[1]; ?></td>
							<td><?php echo $prov[2]; ?></td>	
							<td><?php echo $prov[3]; ?></td>
							<td><?php echo $prov[4]; ?></td>	
							<td> 
								<a href="../peticiones/editarprove.php?id=<?php echo $prov[0] ?>" class="btn btn-warning glyphicon glyphicon-pencil"></button></a></td>

							<td><a href="../peticiones/eliminarprove.php?id=<?php echo $prov[0] ?>" class="	btn btn-danger glyphicon glyphicon-remove"></button></td></a>		

							</tr>
						 <?php 	} ?>
						</table>
						
					</div>
			    </div>
			</div>
	</center>
</body>
</html>