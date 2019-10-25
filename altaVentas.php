<?php
	include ('config.php');

	mysqli_query($conexion,"INSERT INTO ventas(montoVentas) VALUES ($_POST[montoVentas])")
  			OR die("Problemas en el select".mysqli_error($conexion));
  			mysqli_close($conexion);

  	header('location:index.php');		
	

?>