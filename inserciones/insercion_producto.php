<?php 
session_start();
require('../conexion/conexion.php');
$bd = new conexion();

$conn = $bd-> conectar();

$archivo=$_FILES['file']['tmp_name'];
$nombrearchivo=$_FILES['file']['name'];
$nombre_producto= $_POST['nombre_producto'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$estatus=1;




	$imagen= rand().$nombrearchivo;
move_uploaded_file($archivo, '../imagenes/bd/'.$imagen);


$insertar=$conn->prepare("INSERT INTO producto VALUES (NULL, ?,?,?,?,?)");
$insertar->bindParam(1,$nombre_producto);
$insertar->bindParam(2,$precio);
$insertar->bindParam(3,$descripcion);
$insertar->bindParam(4,$imagen);
$insertar->bindParam(5,$estatus);






$insertar->execute();

if ($insertar->rowCount()>0) {
	echo 1;
}else{
	echo 2;
}




  
 ?>