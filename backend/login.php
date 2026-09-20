<?php

session_start();
require 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuario WHERE correo = ?";
$consulta = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($consulta, "s", $correo);
mysqli_stmt_execute($consulta);
$resultado = mysqli_stmt_get_result($consulta);
$usuario = mysqli_fetch_assoc($resultado);

if ($usuario && password_verify($contrasena, $usuario['contrasena'])){
    $_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['id_rol'] = $usuario['id_rol'];

    echo "Login exitoso. Bienvenido, " . $usuario['nombre'];

} else {
    echo "Correo o contraseña incorrectos.";
}
?>