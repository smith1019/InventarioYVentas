<?php
require '../backend/verificar_sesion.php';
verificarRol([1]); // Solo el Dueño puede entrar aquí

require '../backend/conexion.php';
// ... resto del código

$roles = mysqli_query($conexion, "SELECT id_rol, nombre_rol FROM rol");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios - InventarioYVentas</title>
</head>
<body>

    <h1>Crear Usuario</h1>

    <form action="../backend/guardar_usuario.php" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required>

        <label for="rol">Rol:</label>
        <select name="id_rol" id="rol" required>
            <option value="">-- Selecciona un rol --</option>
            <?php while ($fila = mysqli_fetch_assoc($roles)): ?>
                <option value="<?= $fila['id_rol'] ?>"><?= $fila['nombre_rol'] ?></option>
            <?php endwhile; ?>
        </select>

        <button type="submit">Crear Usuario</button>

    </form>

</body>
</html>