<?php		

	include ('config.php');
	include ('claseInsumo.php');	
		if (isset($_POST['montoInsumo']))
		{	
			$insumo = new Insumo($_POST['nombreInsumo'],$_POST['montoInsumo']);
			$insumo-> cargaInsumo();
		}
		else
		{
			$insumo = new Insumo($_POST['nombreInsumo']," ");
			$insumo-> cargaInsumo();
		}
	header('location:index.php');		

?>			

