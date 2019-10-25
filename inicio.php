<html lang="en">
	<head> 
		<!-- Bootstrap CSS -->
   		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">				
		<!--CSS -->
		<link href='panificaciones zeballos.css' rel='stylesheet' type='text/css'>
			<meta charset="utf8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>Login</title>
	</head>
	<body class="principal" >


		<!--bootstrap -->
		<div class="container">
			

		<nav class="nav nav-pills justify-content-center mt-5">
					<a href="#inicio" class="nav-link btn-dark text-light text-center col-md-2" data-toggle="tab">Iniciar sesión</a>
					<a href="#registro" class="nav-link btn-dark text-light te text-center col-md-2" data-toggle="tab"> Registrarse</a>
		</nav>

		<div class=" tab-content" >
			<div class="tab-pane active show" id="inicio"> 	

			<!--FORMULARIO -->
				<form action="login.php" method="post" >
					
					<div class="row justify-content-center">
					

					  <div class="col-md-5 col-sm-12 formu border border-dark p-5">
					
						 	<div class="form-group">
						 		<label>Usuario:</label>
						 		<input type="text" class="form-control form-control" name="nom_usuario"placeholder="Ingrese usuario" >
						 	</div>
						 	
						 	<div class="form-group">
						 		<label>Password:</label>
						 		<input type="password" class="form-control" name="password" placeholder="Ingrese password">
						 	</div>
						
							<div class="text-center">
								<input value="Enviar" type="submit" class="btn btn-dark">
									<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
							</div>
					

					 
										<!--ENLACES -->
							<div class="text-center mt-3 ">
							 	<p><a href="recuperar.html" class=" text-secondary">¿Olvidaste la contraseña?</a></p>
							</div>
						</div>
					</div>
				</form>	
						
				</div>

					<!-- Registro -->
					<div class="tab-pane" id="registro">
						<form class="form" method="post" action="usuario.php">
						<!-- Contenedor-->
							<div class="row justify-content-center">
								
								<div class="col-md-5 col-sm-12 formu border border-dark p-5">

									<!-- Nombre-->
									<div class="form-group ">
										<label>Ingrese nombre de usuario:</label>
										<input type="text" class="form-control" name="nombre" placeholder="Ingrese usuario">
									</div>
								
								<!-- Password-->
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="pass" class=" form-control" placeholder="Ingrese password">
									</div>

									<div class="form-group">
										<label>Repita password</label>
										<input type="password" name="password2" class="form-control" placeholder="Repita password">
									</div>

									<!-- Mail -->
									<div class="form-group">
										<label>Mail</label>
										<input type="mail" name="mail" class="form-control" placeholder="Ingrese Mail"> 
									</div>

									<!--Botones-->	
									<div class="text-center">
										<input value="Enviar" type="submit" class="btn btn-dark">
										<input value="Borrar todo" type="reset" class="btn btn-danger text-light ">
									</div>

								</div>
							</div>

						</form>
					</div>	

				</div>
	</div>			

			    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	</body>	
</html>	