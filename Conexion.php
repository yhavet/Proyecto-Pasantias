<?php 

$server = "localhost"; 
$user = "root"; 
$pass = "";
$db = "tec3";

$conexion = new mysqli($server, $user, $pass, $db); 

if($conexion ->connect_errno) {
    die("conexion fallida" . $conexion->connect_errno);

} else {
    echo "conexion exitosa";
}


?>