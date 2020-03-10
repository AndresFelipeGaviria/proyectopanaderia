<?php 
include "menu.php";

 ?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Cerrar Sesion <?php echo $_SESSION['admin']['1']; ?></a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="administradores.php">Administradores</a></li>
      <li><a href="principal.php">Facturar</a></li>
      <li><a  href="Proveedores.php">Proveedores</a></li>
    </ul>
  </div>
</nav>
