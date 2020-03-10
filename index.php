  <?php 

include "utilidades.php";


   ?>
<head>

<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">


	<title>login</title>
<style>
	body{
		background-image: url(1.jpeg);
		background-repeat: no-repeat;
		background-size: 1450px;
	}
</style>	

	

</body>
</head>
   <div class="container">
      	<div class="row">
      		<div class="col-sm-4"></div>
      		<div class="col-sm-4">
      			  <form action="peticiones/validar.php" method="post">
      			  	<br>	
					<br>	
					<br>	
					<br>	
					<br>	

					<center> <h1 class="text-blue"><p>	LOGIN </p></h1>	</center> 
			
				<table class="table table-bordered"> </table>
					<tr> <td >	
					
					  <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus ><br>
					
					  <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
					  <div class="checkbox mb-3">
					  
					  </div>
					  <button class="btn btn-lg btn-primary btn-block" type="submit" > ingresar</button>

					 <br>	
					 <br>
					 	
					  <?php 
					  if(isset($_GET['salio'])){
					  	switch  ($_GET['salio']) {
					  		case 0:
					  		echo"<strong><center>  ¡¡este usuario no existe!!  <a href='index.php' class='btn btn-danger btn-sm'>X</a></center></strong>";

					  			break;
					  		
					  		
					  	}
					  }




					   ?>
					  

<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script src="../librerias/jquery-3.2.1.min.js"></script>

