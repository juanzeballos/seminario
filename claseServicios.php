<?php
	include ('config.php');

	class Servicio
	{
		public  $nombreServicio;
		public  $montoServicio;


		public function __construct($nombreServicio,$montoServicio)
			{
				$this-> nombreServicio = $nombreServicio;
				$this-> montoServicio = $montoServicio;
			}

		public function cargaServicio(){
		 		include ('config.php');
			mysqli_query($conexion,"INSERT INTO servicios(nombreServicio, montoServicio) VALUES ('$this->nombreServicio','$this->montoServicio')")
  			OR die("Problemas en el select".mysqli_error($conexion));
  			mysqli_close($conexion);
			}


	}
?>