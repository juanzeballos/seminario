<?php
	include ('config.php');

	class Insumo
	{
		public  $nombreInsumo;
		public  $montoInsumo;


		public function __construct($nombreInsumo,$montoInsumo)
			{
				$this-> nombreInsumo = $nombreInsumo;
				$this-> montoInsumo = $montoInsumo;
			}

		public function cargaInsumo(){
		 		include ('config.php');
			mysqli_query($conexion,"INSERT INTO materia_prima(nombreInsumo, montoInsumo)  VALUES ('$this->nombreInsumo','$this->montoInsumo')")
  			OR die("Problemas en el select".mysqli_error($conexion));
  			mysqli_close($conexion);
			}

	

	}
?>