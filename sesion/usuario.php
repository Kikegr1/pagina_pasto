<?php 
class Usuario{

	function __construct(){
		require_once("../conexion/conexion2.php");
		$this->conexion=new Conexion();
	}

	function buscar($nombre_usuario, $contraseña){
		$consulta="SELECT * FROM login WHERE nombre_usuario='{$nombre_usuario}' AND
			contraseña='{$contraseña}' ";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
}
 ?>
