<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<link href='usuario.css' rel='stylesheet' type='text/css'>
</head>
<body bgcolor="#13223f" text="B2A8A8">
	<?php
	$conexion=mysqli_connect("localhost","root","","panaderia") or die("Problemas con la conexión");
	mysqli_query($conexion,"INSERT INTO usuario(nomb_usuario,pass_usuario,mail_usuario) VALUES ('$_POST[nombre]','$_POST[pass]','$_POST[mail]')")
  OR die("Problemas en el select".mysqli_error($conexion));
  	mysqli_close($conexion);
		
		header("location:index.php");





	?>

</body>
</html>