<?php
	include ('config.php');
	mysqli_query($conexion,"INSERT INTO impuestos(monto_impuestos) VALUES ('$_POST[montoImpuesto]')")
  		OR die("Problemas en el select".mysqli_error($conexion));
  		mysqli_close($conexion);
  		header("location:index.php");
?>