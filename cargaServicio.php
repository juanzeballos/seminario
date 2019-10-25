<?php
	include ('config.php');
	include ('claseServicios.php');	
		if (isset($_POST['montoServicio']))		
		{
			$servicio = new Servicio($_POST['nombreServicio'],$_POST['montoServicio']);
			$servicio-> cargaServicio();
		}
			else
			{
			$servicio = new Servicio($_POST['nombreServicio'],"");
			$servicio-> cargaServicio();
			}
	header('location:index.php');			

?>			