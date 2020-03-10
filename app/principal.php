<?php

 include '../libre.php';


 ?><!-- ESTE ES EL MENU -->

<div class="container"> <!--  -->
  <div class=" row">
  	<div class="col-sm-12">
  		<center>
        <h1>Nueva Venta</h1>
        <hr>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <a href="../peticiones/generarcompra.php" class="btn btn-warning">Generar nueva venta</a>
          <form action="../peticiones/valicombo.php" method="POST">

            <?php 
                include('../bd/conexion.php');
                $sql=mysqli_query($conexion,"SELECT * FROM compra ORDER by id_comp DESC LIMIT 1");
                $com=mysqli_fetch_array($sql);
            ?> 
             <h3>Codigo de compra: <?php echo $com[0]; ?> </h3>
             <br>
            <label>Producto</label>

            <select  class="form-control" name="producto">
              <option>Seleccione Producto</option>
              <?php 
                include('../bd/conexion.php');
                $sql=mysqli_query($conexion,"SELECT * FROM  producto");
                while($producto=mysqli_fetch_array($sql)){
              ?>
                  <option value="<?php echo $producto['id_prod'] ?>"><?php echo $producto['nom_prod']; ?></option>
              <?php 
                }
               ?>
            </select>

            <label>Cantidad</label>
            <input type="number" name="cantidad" class="form-control"><br>
         <a href="../reportepdf.php?codventa=<?php echo $com[0] ?>"  class="btn btn-primary">Imprimir Factura</a>
            <button type="submit" name="boton" class="btn btn-success">Agregar</button>
          </form> 

          <!-- Tabla de descripciones -->

          <table class="table table-bordered">
            <tr>
              <td>Producto</td>
              <td>Precio Unidad</td>
              <td>Cantidad</td>
              <td>Subtotal</td>
              <td>Editar</td>
              <td>Eliminar</td>

            </tr>

            <!-- php para cargar el detalle -->
            <?php 
              $sql=mysqli_query($conexion,"SELECT  cp.cod_compra,cp.cod_prod,pro.nom_prod,cp.prec_uni,cp.cantidad,cp.precio
                                            from producto as pro inner join compra_producto as cp
                                            on cp.cod_prod=pro.id_prod
                                            where cod_compra='$com[0]'
                                           ");

              while($row=mysqli_fetch_array($sql)){
             ?>
             <tr>
                <td><?php echo $row[2]; ?></td>
                 <td><?php  echo $row[3]; ?></td>
                  <td><?php echo $row[4]; ?></td>
                   <td><?php  echo $row[5]; ?></td>
                   <td><a href="../peticiones/editarventa.php?codcompra=<?php echo $com[0]?>&codpro=<?php echo $row[1]?>&nombre=<?php echo $row[2] ?>" class="btn btn-warning glyphicon glyphicon-pencil "></a></td>
                   <td><a href="../peticiones/eliminarventa.php?produc=<?php echo $com[0]?>&codpro=<?php echo $row[1]?>&canti=<?php echo $row[4] ?>" class="btn btn-danger  glyphicon glyphicon-remove"></a></td>
             </tr>
             <?php 
                }
              ?>


              <?php 

              $sql=mysqli_query($conexion,"SELECT sum(precio) FROM compra_producto where cod_compra =    '$com[0]'");

             $total=mysqli_fetch_array($sql);


               ?>

              <tr>
                <td colspan="2"> </td>
                <td>TOTAL A PAGAR : </td>
                <td>  <?php  echo $total[0]; ?> </td>
                
              </tr>

          </table>

        
         <div class="col-sm-2"></div>
         <br> 

        </div>  
      </center>
    </div>
  </div>
</div>

<div>
  
</div>

