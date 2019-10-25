<?php
	include ('config.php');




	class Empleado 
	{
		public  $nombreEmpleado;
		public  $telEmpleado;
		public $registroEmpleado;
		public $actualizarEmpleado;
		public $montoEmpleado;


		public function __construct($nombreEmpleado,$telEmpleado,$montoEmpleado)
			{
				$this-> nombreEmpleado = $nombreEmpleado;
				$this -> telEmpleado = $telEmpleado;
				$this -> montoEmpleado = $montoEmpleado;
			}

		public function nuevoEmpleado(){
		 		include ('config.php');
			mysqli_query($conexion,"INSERT INTO empleados(nomb_empleados,tel_empleados,monto_empleados) VALUES ('$this->nombreEmpleado', '$this->telEmpleado','$this->montoEmpleado')")
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

		


	}




?>