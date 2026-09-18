<?php 

require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$id_rol = $_POST['id_rol'];

$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario(nombre, apellido, correo, contrasena, id_rol) VALUES(?, ?, ?, ?, ?)";
$consulta = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($consulta, "ssssi", $nombre, $apellido, $correo, $contrasena_hash, $id_rol);
mysqli_stmt_execute($consulta);

echo "Usuario creado correctamente.";
?>