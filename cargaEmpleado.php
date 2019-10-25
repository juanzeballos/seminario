<?php
	include ('config.php');
	include ('claseEmpleado.php');
			if (isset($_POST['telEmpleado'])) 
			{
			$nuevoEmpleado = new Empleado($_POST['nombreEmpleado'],$_POST['telEmpleado'], " ");
			$nuevoEmpleado->nuevoEmpleado();
			}
			else
			{
				$cargaEmpleado = new Empleado($_POST['nombreEmpleado']," ",$_POST['montoEmpleado']);
				$cargaEmpleado->nuevoEmpleado();
			}	


	header('location:index.php');


?>