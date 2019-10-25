<?php
session_start();
include ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf8">
		<!--Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!--CSS -->
	<link href='panificaciones zeballos.css' rel='stylesheet' type='text/css'>
		<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
</head>
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
	
		 <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-text text-white mr-4">
          Panificaciones Zeballos
        </span>
        <div class="collapse navbar-collapse" id="menu">
          <nav class="navbar-nav">
              <a class="nav-link active" href="#">Inicio</a>
              <a class="nav-link" href="ventas.php">Ventas</a>
              <li class="nav-item  dropdown ">
       		   	<a href="#" class="nav-link" data-toggle="dropdown">Gastos</a>
         		<div class="dropdown-menu bg-dark menu-activo ">
         	  		<a class="dropdown-item text-secondary" href="alquiler.php">Alquiler</a>
        	    	<a class="dropdown-item text-secondary" data-toggle="tab" href="empleados.php">Empleado</a>
	       		   <a class="dropdown-item text-secondary"  href="insumos.php">Insumos</a>
	       		   <a class="dropdown-item text-secondary menu-activo"  href="servicios.php">Servicios</a>
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



			
	<div class="container-fluid">		
		<div class="row justify-content-center mt-5 mb-4">
		<div class="col-md-7 col-lg-5 col-sm-8 formu border border-dark p-5">
				<!--Nav -->
			<nav class="nav nav-pills">
				<a href="#ventas" class="nav-link btn btn-outline-secondary active col-6 text-center " data-toggle="tab">Ventas</a>
        		<a href="#gastos" class="nav-link btn btn-outline-secondary  col-6 text-center" data-toggle="tab">Gastos</a>
			</nav>	
				<!--Ventas -->
			<div class="tab-content">
				<div class="tab-pane fade active show" id="ventas">
					<form action="altaVentas.php" method="post" >
				
							<div class="form-group mt-5">		
								<p class="text-center">Monto:</p>
								<input type="text" name="montoVentas" class="form-control" placeholder="Ingrese el monto">

							<div class="text-center mt-5">
									<input value="Enviar" type="submit" class="btn btn-dark">
									<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
							</div>
							</div>									
					</form>	
				</div>

					<!--Gastos -->
				<div class="tab-pane fade" id="gastos">
    			   		<!--Tipos de gastos -->
    			   		<h5 class="text-center text-dark mt-3">Seleccione la categoria</h5>
    			  	<ul class="nav mt-2 justify-content-center">
				        <li class="nav-item nav-tabs dropdown ">
				         	<a href="#" class="nav-link dropdown-toggle text-dark " data-toggle="dropdown">Categoria</a>
				        	<div class="dropdown-menu">
				            	<a class="nav-link  text-dark " data-toggle="tab" href="#alquiler">Alquiler</a>
								<a class="nav-link text-dark" data-toggle="tab" href="#impuestos">Impuestos</a>
								<a class="nav-link text-dark" data-toggle="tab" href="#empleados">Empleados</a>
								<a class="nav-link text-dark" data-toggle="tab" href="#insumos">Insumos</a>
								<a class="nav-link text-dark" data-toggle="tab" href="#servicios">Servicios</a>
				        	</div>

				        </li>
			       </ul>
			       	<!-- Contenido de nav -->
			       	
			    	<div class="tab-content">

			    	<!-- Alquiler -->
			     		<div class="tab-pane mt-4" id="alquiler">
			     			<h5 class="text-center serif bg-secondary text-light">Alquiler</h5>
			     			<form action="cargaAlquiler.php" method="post" >
				
								<div class="row mt-4 justify-content-center">
				
									<div class="form-group">		
										<label>Monto:</label>
										<input type="text" name="montoAlquiler" class="form-control" placeholder="Ingrese el monto">

										<div class="text-center mt-5">
											<input value="Enviar" type="submit" class="btn btn-dark">
											<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
										</div>
									</div>			
								</div>			
							</form>
			     		</div>
			     	<!-- Impuestos -->		

			        	<div class="tab-pane mt-4" id="impuestos">
			        		<h5 class="text-center serif bg-secondary text-light">
			        			Impuestos
			        		</h5>
			        		<p class="text-center mt-3 arial">Tipo de impuesto</p>
							<form action="cargaImpuesto.php" method="post" >
								<select name="categoria" class="custom-select" required="">
									<option>Impuesto</option>
								</select>		
								<div class="form-group mt-3">		
									<label>Monto:</label>
									<input type="text" name="montoImpuesto" class="form-control" placeholder="Ingrese el monto">

									<div class="text-center mt-4">
										<input value="Enviar" type="submit" class="btn btn-dark">
										<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
									</div>
								</div>			
							</form>					

			        	</div>

			        	<!-- Empleados -->
			        	<div class="tab-pane mt-4" id="empleados">
			        		<h5 class="text-center serif bg-secondary text-light">
			        			Empleados
			        		</h5>
			        		<p class="text-center mt-3 arial">Seleccione el empleado</p>
							<form action="cargaEmpleado.php" method="post" >
								<select name="nombreEmpleado"  class="form-control" required="">
								<option>Seleccione empleado </option>
								<?php
								$registroEmpleados=mysqli_query($conexion,"select nomb_empleados from empleados");
						  			while ($reg=mysqli_fetch_array($registroEmpleados))
										{
									 $nombreEmpleado = $reg['nomb_empleados'];
										  
									?>	
									<option value="<?php echo $nombreEmpleado; ?>"><?php echo $nombreEmpleado; ?> 
									</option>
									
								<?php	 }	
								?>
							</select>	
							<div class="btn text-danger btn-sm border-0" data-toggle="modal"
						         data-target="#nuevo.empleado">
								<p>+Agregar empleado</p>
						    </div>

								<div class="form-group mt-3">		
									<label>Total:</label>
									<input type="text" name="montoEmpleado" class="form-control" placeholder="Ingrese el monto">

									<div class="text-center mt-4">
										<input value="Enviar" type="submit" class="btn btn-dark">
										<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
									</div>
								</div>			
							</form>
					
			        	</div>

			        	<!-- Insumos -->
			        	<div class="tab-pane" id="insumos">
			        		<h5 class="text-center serif bg-secondary text-light">
			        			Insumos
			        		</h5>
			        		<p class="text-center mt-3 arial">Tipo de insumo</p>
							<form action="cargaInsumo.php" method="post" >
								<select name="nombreInsumo" class="form-control" required="">
									<option>Seleccione insumo</option>
									<?php
									$registroInsumo=mysqli_query($conexion,"select nombreInsumo from materia_prima");
						  			while ($reg=mysqli_fetch_array($registroInsumo))
										{
									 $nombreInsumo = $reg['nombreInsumo'];
										  
									?>	
									<option value="<?php echo $nombreInsumo; ?>"><?php echo $nombreInsumo;?> 
									</option>
									
								<?php	 }	
								?>

								</select>
								<div class="btn text-danger btn-sm border-0" data-toggle="modal" data-target="#nuevo.insumo">
								<p>+Agregar insumo</p>
						    	</div>		

								<div class="form-group mt-3">		
									<label>Monto:</label>
									<input type="text" name="montoInsumo" class="form-control" placeholder="Ingrese el monto">

									<div class="text-center mt-4">
										<input value="Enviar" type="submit" class="btn btn-dark">
										<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
									</div>
								</div>			
							</form>
			        	</div>
			        	<!-- Servicios -->
			        	<div class="tab-pane" id="servicios">
			        		<h5 class="text-center serif bg-secondary text-light">
			        			Servicios
			        		</h5>
			        		<p class="text-center mt-3 arial">Tipo de servicio</p>
							<form action="cargaServicio.php" method="post" >
								<select name="nombreServicio" class="custom-select" required="">
									<option>Servicios</option>
									<?php
									$registroEmpleados=mysqli_query($conexion,"select nombreServicio from servicios");
						  			while ($reg=mysqli_fetch_array($registroEmpleados))
										{
									 $nombreServicio = $reg['nombreServicio'];
										  
									?>	
									<option value="<?php echo $nombreServicio; ?>"><?php echo $nombreServicio; ?> 
									</option>
									
								<?php	 }	
								?>
								</select>
								<div class="btn text-danger btn-sm border-0" data-toggle="modal"data-target="#nuevo.servicio">
								<p>+Agregar servicios</p>
						    	</div>

								<div class="form-group mt-3">		
									<label>Monto:</label>
									<input type="text" name="montoServicio" class="form-control" placeholder="Ingrese el monto">

									<div class="text-center mt-4">
										<input value="Enviar" type="submit" class="btn btn-dark">
										<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
									</div>
								</div>			
							</form></div>
			    	</div>
    			   		
    			   	</form>          				
				</div>
					
			</div>
			<!-- Agregar nuevo empleado -->		
			<div class="modal"  tabindex="-1" role="dialog" id="nuevo.empleado" aria-labelledby="exampleModalLabel" aria-hidden="true">
		
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Agregar nuevo empleado</h3>					<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">X</span>
								</button>
						</div>
						<div class="modal-body formu">

							<form action="cargaEmpleado.php" method="post" >
							<div class="form-group">											<label class="form-label">Empleado</label>
								<input type="text" name="nombreEmpleado" class="form-control" placeholder="Nombre del empleado">
								<label class="col-form-label">Teléfono</label>
								<input type="text" name="telEmpleado" class="form-control" placeholder="Teléfono del empleado">

								<div class="text-center mt-4">
									<input value="Agregar empleado" type="submit" class="btn btn-dark">
								</div>	
							</div>
							</form>
						</div>
						<div class="modal-footer">
						   <div class="btn btn-primary" data-dismiss="modal">
				            	Cerrar
				            </div>	          		
						</div>
				
						</div>
					</div>
				</div>	




					<!-- Agregar nuevos insumos -->
	
			<div class="modal"  tabindex="-1" role="dialog" id="nuevo.insumo" aria-labelledby="exampleModalLabel" aria-hidden="true">
		
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header bg-dark text-white">
							<h3 class="modal-title">Agregar nuevo insumo</h3>					<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">X</span>
								</button>
						</div>
						<div class="modal-body bg-secondary">

							<form action="cargaInsumo.php" method="post" >
							<div class="form-group">											<label class="form-label">Insumo</label>
								<input type="text" name="nombreInsumo" class="form-control" placeholder="Nombre del insumo">

								<div class="text-center mt-4">
									<input value="Agregar insumo" type="submit" class="btn btn-dark">
								</div>	
							</div>
							</form>
						</div>
						<div class="modal-footer bg-dark">
						   <div class="btn btn-primary" data-dismiss="modal">
				            	Cerrar
				            </div>	          		
						</div>
				
						</div>
					</div>
				</div>


					<!-- Agregar nuevos servicios -->
	
			<div class="modal"  tabindex="-1" role="dialog" id="nuevo.servicio" aria-labelledby="exampleModalLabel" aria-hidden="true">
		
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Agregar nuevo servicio</h3>					<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">X</span>
								</button>
						</div>
						<div class="modal-body formu">

							<form action="cargaServicio.php" method="post" >
							<div class="form-group">											<label class="form-label">Servicios</label>
								<input type="text" name="nombreServicio" class="form-control" placeholder="Nombre del servicio">

								<div class="text-center mt-4">
									<input value="Agregar servicio" type="submit" class="btn btn-dark">
								</div>	
							</div>
							</form>
						</div>
						<div class="modal-footer">
						   <div class="btn btn-primary" data-dismiss="modal">
				            	Cerrar
				            </div>	          		
						</div>
				
						</div>
					</div>
				</div>	



		</div>
		</div>	
	</div>	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</body>
</html>