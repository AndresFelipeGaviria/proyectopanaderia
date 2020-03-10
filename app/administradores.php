<?php 
include '../libre.php'; ?><!-- ESTE ES EL MENU -->

<div class="container">
<div class=" row">
	<div class="col-sm-3">
		<h3>formulario</h3>
             
		<form action="../peticiones/insertar.php" method="POST"> 
			<input type="number" name="id" class="form-control" placeholder="identificacion" required autofocus><br>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre"><br>
			<input type="password" name="pass" class="form-control" placeholder="Contraseña"><br>
            <button type="submit" class="btn btn-success">Enviar</button>
		</form>
    <?php 
      if(isset($_GET['r'])){
        switch ($_GET['r']) {
          case 0:
            echo "<p style='color:red'>¡El usuario ya existe! <a href='administradores.php'class='btn btn-default'>X</a></p>";
            break;
          case 1:
            echo "<p style='color:green'>¡Se guardo correctamente!<a href='administradores.php' class='btn btn-default'>X</a></p>";
            break;
        }
      }
     
     ?>


	</div>
	<div class="col-sm-6">
		<center>
			<h1>Tabla de administradores</h1>
		</center>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">id_jefe</th>
      <th scope="col">nombre</th>
      <th scope="col">password</th>
      <th>editar</th>
      <th>eliminar</th>
      
    </tr>
  </thead>
  <tbody>



  	<?php 
  	include "../bd/conexion.php"; 

    

    	 $sql=mysqli_query($conexion,"SELECT * from jefes");
    	 while ($registros=mysqli_fetch_array($sql)) {
  	?>
    <tr>
      <td><?php echo $registros[0] ?></td>
      <td><?php echo $registros[1] ?></td>
      <td><?php echo $registros[2] ?></td>
      <td><a href="../peticiones/frmactualizar.php?id=<?php echo $registros[0] ?>" class="btn btn-warning" title="Click para editar este registro">¡</a></td>
      <td><a href="../peticiones/eliminar.php?id=<?php echo $registros[0] ?>" class="btn btn-danger" title="Click para eliminar este registro">X</a></td>
    </tr>
    <?php 
    	}
     ?>
    <tr>
    </body>
</table>
	</div>
</div>
</div>