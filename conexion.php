<?php
$servidor = "localhost";
$usuario = "root";
$constraseña = "mysql";
$DB = "incidentes_db";

$con = mysqli_connect($servidor, $usuario, $constraseña, $DB);
if(!$con){
    die("Conexion fallida". mysqli_connect_error());
}

?>