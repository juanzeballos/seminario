<?php
	include ('config.php');
	include ('agregar.php');

	$empleado = new Empleado($_POST['nombreEmpleado'],$_POST['telEmpleado'],"");
	$empleado-> cargaEmpleado();


	$insumo = new Insumo($_POST['nombreInsumo']);
	$insumo-> cargaInsumo();

	header('location:index.php');	


?>