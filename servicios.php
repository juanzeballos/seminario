<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
	<meta charset="utf8">
		<!--Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!--CSS -->
	<link href='panificaciones zeballos.css' rel='stylesheet' type='text/css'>
		<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--jquery-3.4.1.min-->
	<link rel="stylesheet" type="text/css" media="all" href="skins/aqua/theme.css" />
	<link rel="alternate stylesheet" type="text/css"  href="zeballos.css"/>
	<!-- import the calendar script -->
	<script type="text/javascript" src="calendar.js"></script>
<!-- import the language module -->
	<script type="text/javascript" src="lang/calendar-es.js"></script>
	<script type="text/javascript" src="zeballos.js"></script>
	
</head>
<body>
	<body class="secundaria">
<?php
if (isset($_SESSION['usuario'])){
}
else {
?>
	<script type="text/javascript">
		window.location='inicio.php'
	</script>
<?php
}
?>
	<!-- Encabezado -->
	<div class="container-fluid">
		 <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-text text-white mr-4">
          Panificaciones Zeballos
        </span>
        <div class="collapse navbar-collapse" id="menu">
          <nav class="navbar-nav">
              <a class="nav-link " href="index.php">Inicio</a>
              <a class="nav-link " href="ventas.php">Ventas</a>
              <li class="nav-item  dropdown ">
       		   	<a href="#" class="nav-link" data-toggle="dropdown">Gastos</a>
         		<div class="dropdown-menu bg-dark menu-activo ">
         	  		<a class="dropdown-item text-secondary" href="alquiler.php">Alquiler</a>
        	    	<a class="dropdown-item text-secondary " href="empleados.php">Empleado</a>
	       		   <a class="dropdown-item text-secondary"  href="materiaPrima.php">Insumos</a>
	       		   <a class="dropdown-item text-light active bg-secondary"  href="servicios.php">Servicios</a>
	       		   <a class="dropdown-item text-secondary"  href="impuestos.php">Impuestos</a>
    	      	</div>
        	</li>
              <a class="nav-link" href="#">Balances</a>
          </nav>
		</div>
		<a class="text-light justify-content-end  ">
		<?php
		echo 'Bienvenido '.$_SESSION['usuario']; echo "!";
		?></a>
		<a href="salir.php" class="nav-link text-danger"> Cerrar sesion</a>

		</nav>

		
		<div class="row justify-content-center mt-5 mb-4">
		<div class="col-md-7 col-lg-5 col-sm-8 formu border border-dark p-5">
			<h5 class="text-center serif bg-secondary text-light">
			    Servicios
			</h5>
		<p class="text-center mt-3 arial">Seleccione una fecha</p>	
		<div class="row mb-4 mt-5">	
			<form method="post" action="servicios.php">
			Fecha: <input type="month" id="fechaServicio" name="fechaServicio">
			<input type="submit" class="btn-secondary" value="Aceptar">
			</form>

		</div>		
			<?php
			include ('config.php');
			$registroServicio=mysqli_query($conexion,"select nombreServicio,	 montoServicio,fechaServicio from servicios");
			$totalServicio=0;
			if (isset($_POST['fechaServicio'])) 
			{
				?>
				<table class="table table-striped table-bordered">
					<thead class="thead-dark" >
						<tr>
							<th scope="col">Nombre</th>
							<th scope="col">Monto</th>
							<th scope="col">Fecha</th>
						</tr>
					</thead>
					<tbody >	
				<?php
				while ($reg=mysqli_fetch_array($registroServicio))
				{
					$newDate = date("Y-m", strtotime($reg['fechaServicio'])) ;

					if ($newDate == $_POST['fechaServicio'] ) {
					
					$totalServicio = $totalServicio + $reg['montoServicio'];
					
					?>
							
						
							<tr>
								<td><?php echo $reg['nombreServicio'] ." "  ;?>
								</td>
							
								<td> <?php echo $reg['montoServicio'] ." " ;?>						
								</td>

								<td><?php echo $fechaServicio = date("d/m", strtotime($reg['fechaServicio']));?> 
								</td>
								 <?php echo "<br>";?>
							 </tr>
						
						<?php

					 
				}
				
			}	
			  echo "<tr><td class='text-center'>Total :</td>
			 	<td colspan=2>". $totalServicio
			 	." 
			 </tbody>	 
						 </table>" ; 
			}	 
			
			?>

			
			
  			
			

			
				


		</div>
		</div>	
	</div>	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	

</body>
</html>