<?php
	include ('config.php');
	mysqli_query($conexion,"INSERT INTO alquiler(montoAlquiler) VALUES ('$_REQUEST[montoAlquiler]')")
  		OR die("Problemas en el select".mysqli_error($conexion));
  		mysqli_close($conexion);
  		header("location:index.php");


?>