 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script src="../librerias/jquery-3.2.1.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
</head>
<body>

<!-- modal para ingreso nuevo -->

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Nuevo PROCESO</h4>
      </div>
     
          <div class="modal-body">
            
            <form action="../peticiones/insertproducto.php" method="POST">
                <label>nombre producto</label>
                <input type="text" name="nombre" class="form-control input-sm" >
                <label>und por producto</label>
                <input type="number" name="unidades" class="form-control input-sm">
                <label> fecha_ven_prod</label>
                <input type="date" name="vencimiento" class="form-control input-sm" >
                <label>precio </label>
                <input type="number" name="precio" class="form-control input-sm"> <br>

                <button type="button" class="btn btn-default" data-dismiss="modal"> close</button>
                <button type="submit" class="btn btn-primary" id="guardar"> guardar</button>
       </form>
          </div>
          <div class="modal-footer">
             
         
          </div>
      
    </div>
  </div>
</div>




</body>
</html>
