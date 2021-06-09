<?php
include("conexion.php");

$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['name'];
$acciones = $_POST['acciones'];

//DECLARAMOS LA VARIABLE QUERY Y LE ASIGNAMOS LA SENTENCIA SQL
$query = "INSERT INTO incidentes (Fecha, Descripcion ,Nombre ,Acciones)
VALUES ('".$fecha."', '".$descripcion."','".$nombre."','".$acciones."')";

//DECLARAMOS LA VARIABLE $RESULTADO Y LE ASIGNAMOS LA EJECUCION DE LA VARIABLE QUERY
$resultado = $con->query($query);

//VALIDAMOS LA EJECUCION DE LA SENTENCIA
if(!$resultado){
  echo 'Error al insertar los datos';
}else{
  header('Location: http://localhost/proyecto_incidentes/');
}
?>