<?php 
require('../conexion/conexion.php');
$bd = new conexion();

$conn = $bd-> conectar();
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$calle_p=$_POST['calle_p'];
$calle_s=$_POST['calle_s'];
$colonia= $_POST['colonia'];
$postal_c= $_POST['postal_c'];
$numero_casa= $_POST['numero_casa'];
$ciudad= $_POST['ciudad'];
$comentarios= $_POST['comentarios'];
$estatus= 1;

$insertar = $conn ->prepare("INSERT INTO domicilio VALUES (NULL,?,?,?,?,?,?)"); 

$insertar ->bindParam(1, $calle_p);
$insertar ->bindParam(2, $calle_s);
$insertar ->bindParam(3, $colonia);
$insertar ->bindParam(4, $postal_c);
$insertar ->bindParam(5, $numero_casa);
$insertar ->bindParam(6, $ciudad);

$insertar->execute();

$id=$conn->lastInsertId();


if ($insertar->rowCount()>0) {
$insertar = $conn ->prepare("INSERT INTO cliente VALUES (NULL,?,?,?,?,?,?)"); 
$insertar ->bindParam(1, $nombres);
$insertar ->bindParam(2, $apellidos);
$insertar ->bindParam(3, $telefono);
$insertar ->bindParam(4, $comentarios);
$insertar ->bindParam(5, $estatus);
$insertar ->bindParam(6, $id);

$insertar->execute();

echo(1);
  
}else{
  echo 2;

}

 ?>