<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion - InventarioYVentas</title>
</head>
<body>
    <h1>Iniciar sesion</h1>

    <form action="../backend/login.php" method="$_POST">
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required>

        <br></br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required>

        <br></br>

        <button type="submit">Ingresar</button>
    </form>
</body>
</html>