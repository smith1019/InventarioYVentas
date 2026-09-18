<?php 

require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$id_rol = $_POST['id_rol'];

$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario(nombre, apellido, correo, contraseña, id_rol) VALUES(?, ?, ?, ?, ?)";
$consulta = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($consulta, "ssssi", $nombre, $apellido, $correo, $contraseña_hash, $id_rol);
mysqli_stmt_execute($consulta);

echo "Usuario creado correctamente.";
?>