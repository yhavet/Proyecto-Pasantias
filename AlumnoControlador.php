<?php

include("Conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$nacionalidad = $_POST["nacionalidad"]; 
//$fecha_nacimiento = $_POST["fecha_nacimiento"];
$genero = $_POST["genero"];
$curso = $_POST["curso"];
//$telefono = $_POST["telefono"];
$especialidad = $_POST["especialidad"];


$insertDatos = "INSERT INTO alumnos (nombre,apellido,curso,especialidad,genero,ciudades_Id,Paises_Id)VALUES('$nombre', '$apellido', '$curso', '$especialidad', '$genero',1,1)";

echo $insertDatos; 


$ejecutarInsertar = mysqli_query($conexion,$insertDatos); 


?>