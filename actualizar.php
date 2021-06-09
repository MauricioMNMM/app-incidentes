<?php
include("conexion.php");

$id=$_POST['Id'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['name'];
$acciones = $_POST['acciones'];

//DECLARAMOS LA VARIABLE QUERY Y LE ASIGNAMOS LA SENTENCIA SQL
$query = "UPDATE incidentes_db SET Fecha='".$fecha."', Descripcion='".$descripcion."', Nombre=".$nombre." , Acciones=".$acciones." WHERE Id=".$id;

//DECLARAMOS LA VARIABLE $RESULTADO Y LE ASIGNAMOS LA EJECUCION DE LA VARIABLE QUERY
$resultado = $conn->query($query);

//VALIDAMOS LA EJECUCION DE LA SENTENCIA
if(!$resultado){
    echo 'Error en la conexion ';
  }else{
    header('Location: http://localhost/proyecto_incidentes/');
  }
?>