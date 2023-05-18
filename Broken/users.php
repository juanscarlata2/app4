<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'deleteUser') {
    // Eliminar el usuario con el ID especificado (simulación)
    echo "flag: brokenAC340808Dfghjfghjg";
    exit;
}

// Obtener el rol del usuario
$role = $_SESSION['user']['role'];

// Verificar si el usuario es un administrador
if ($role !== 'admin') {


    
    echo "No tienes acceso a esta página.";
    echo "<br><a href='logout.php'>Cerrar sesión</a>";
    exit;
}

// Obtener la acción solicitada (por ejemplo, deleteUser)
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Verificar la acción solicitada
if ($action === 'deleteUser') {
    // Obtener el ID del usuario a eliminar
    $userId = isset($_GET['userId']) ? $_GET['userId'] : '';

    // Eliminar el usuario con el ID especificado (simulación)
    echo "Usuario con ID $userId eliminado correctamente.";
} else {
    echo "Administrar usuarios<br><br>";

    // Mostrar lista de usuarios (simulación)
    echo "admin<br>";
    echo "<a href='users.php?action=deleteUser&userId=1'>Eliminar</a>";
    echo "<br><br>";
    echo "pedro<br>";
    echo "<a href='users.php?action=deleteUser&userId=2'>Eliminar</a>";
}

echo "<br><a href='index.php'>Volver al panel de administración</a>";
echo "<br><a href='logout.php'>Cerrar sesión</a>";
?>
