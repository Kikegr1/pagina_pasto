<?php 
session_start();
$nombre_usuario=$_POST["nombre_usuario"];
$contraseña=$_POST["contraseña"];

require_once("usuario.php");
$usuarios=new Usuario();

$resultado=$usuarios->buscar($nombre_usuario, $contraseña);

$validacion=mysqli_num_rows($resultado);

if ($validacion==1) {
	$_SESSION["usuario"]=$nombre_usuario;
	header("location: ../panel_admi.php");
	
}else if($validacion==0){
	header("location: admin.php");
}
 ?>


