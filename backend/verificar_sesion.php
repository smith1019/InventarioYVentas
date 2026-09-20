<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header('Location: ..frontend/login.php');
    exit();
}

function verificarRol($roles_permitidos) {

    if (!in_array($_SESSION['id_rol'], $roles_permitidos)) {
        
        switch ($_SESSION['id_rol']) {
            case 1:
                header('Location: --/frontend/ventas.php');
                break;
            case 2:
                header('Location: ../frontend/inventario.php');
                break;
            case 3:
                header('Location: ../frontend/carrito_venta.php');
                break;
        }
        exit();
    }

}
?>