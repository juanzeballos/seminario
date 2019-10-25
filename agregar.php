<?php
	include ('config.php');




	class Empleado 
	{
		public  $nombreEmpleado;
		public  $telEmpleado;
		public $registroEmpleado;
		public $actualizarEmpleado;


		public function __construct($nombreEmpleado,$telEmpleado)
			{
				$this-> nombreEmpleado = $nombreEmpleado;
				$this -> telEmpleado = $telEmpleado;
			}

		public function cargaEmpleado(){
		 		include ('config.php');
			mysqli_query($conexion,"INSERT INTO empleados(nomb_empleados,tel_empleados) VALUES ('$this->nombreEmpleado', '$this->telEmpleado')")
  			OR die("Problemas en el select".mysqli_error($conexion));
  			mysqli_close($conexion);
			}

		private function bajaEmpleado(){ 

		}	

		public function modificacionEmpleado(){
			$actualizarEmpleado=mysqli_query($conexion, "update empleados
                set tel_empleados='$_REQUEST[telActualizado]' 
                where nomb_empleados= '$reg[nomb_empleados]' ") or			
  			die("Problemas en el select:".mysqli_error($conexion));

		}

		public function consultaEmpleado()
		{
			include ('config.php');
			$registroEmpleados=mysqli_query($conexion,"select nomb_empleados, tel_empleados, monto_empleados  from empleados WHERE nomb_empleados LIKE '%$_REQUEST[nombreConsulta]%' ");
  			while ($reg=mysqli_fetch_array($registroEmpleados))
				{
			$this->nombreEmpleado = $reg['nomb_empleados'];
			$this->telEmpleado =$reg['tel_empleados'];
			$sueldo	= $reg['monto_empleados'];				  
				}
		}


	}


	class Insumo
	{
		public  $nombreInsumo;


		public function __construct($nombreInsumo)
			{
				$this-> nombreInsumo = $nombreInsumo;
			}

		public function cargaInsumo(){
		 		include ('config.php');
			mysqli_query($conexion,"INSERT INTO materia_prima(nombreInsumo) VALUES ('$this->nombreInsumo')")
  			OR die("Problemas en el select".mysqli_error($conexion));
  			mysqli_close($conexion);
			}

		private function bajaInsumo(){ 

		}	

		public function modificacionInsumo(){

		}

		public function consultaInsumo()
		{
			  
		}


	}


	class Servicio
	{
		public  $nombreServicio;


		public function __construct($nombreServicio)
			{
				$this-> nombreServicio = $nombreServicio;
			}

		public function cargaServicio(){
		 		include ('config.php');
			mysqli_query($conexion,"INSERT INTO servicios(nombreServicio) VALUES ('$this->nombreServicio')")
  			OR die("Problemas en el select".mysqli_error($conexion));
  			mysqli_close($conexion);
			}

		private function bajaServicio(){ 

		}	

		public function modificacionServicio(){

		}

		public function consultaServicio()
		{
			  
		}


	}


?>