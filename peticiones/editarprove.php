    <?php 
    include "../menu.php"; 
include"../bd/conexion.php";

 
 $id=$_GET['id'];

 $sql=mysqli_query($conexion,"SELECT * FROM proveedores where id_prove = '$id'");
 $result=mysqli_fetch_array($sql);
 

   ?> 
    <center>
    <div style="width:50%;">
            <form action="actualizarprove.php" method="POST">
                  <br>
                  <br>
                  <br>
                 <label>ID</label>
                <input type="number" name="idd" readonly=""  value="<?php echo $result[0]; ?>" class="form-control input-sm"  >
                <label>NIT</label>
                <input type="text" name="nitt" value="<?php echo $result[1]; ?>" class="form-control input-sm">
                <label> Nombre de la Empresa</label>
                <input type="text" name="empresaa" value="<?php echo $result[2]; ?>" class="form-control input-sm">
                <label>Telefono </label>
                <input type="number" name="telefonoo" value="<?php echo $result[3]; ?>" class="form-control input-sm" >
                <label>Direccion </label>
                <input type="text" name="direccionn" value="<?php echo $result[4]; ?>" class="form-control input-sm">
                
                <br>
                <a href="../app/proveedores.php" type="button" class="btn btn-default" > cancelar</button></a>
                <button type="submit" class="btn btn-primary" > enviar</button>
            </div></center>