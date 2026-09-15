<?php 
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_datos = "inventarioYVentas";

$conexion = mysqli_connect($host, $usuario, $contraseña, $base_datos);

if(!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>