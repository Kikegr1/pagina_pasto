<?php
session_start();
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

require_once ('../conexion/conexion.php');
$bd = new conexion();

$conn = $bd->conectar();

$consulta =$conn->prepare("SELECT * FROM login WHERE usuario=? AND contrasena=? LIMIT 1");  
$consulta->bindParam(1,$usuario);
$consulta->bindParam(2,$contrasena);


$consulta->execute();

$datos = $consulta->fetchAll();

if(!empty($datos)) {

  $_SESSION['usuario'] = $datos[0]['usuario'];
  $_SESSION['contrasena'] = $datos[0]['contrasena'];

  if ($_SESSION['usuario']=="admin" AND $_SESSION['contrasena']=="admin123") {
    echo 1;
  }else{
    echo 2;
  }
}
?>