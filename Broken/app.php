<?php
session_start();

// Simulando un inicio de sesión
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // En una aplicación real, verificarías las credenciales en una base de datos
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['user'] = [
            'username' => $username,
            'role' => 'admin'
        ];
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Nombre de usuario o contraseña inválidos.";
    }
}

// Página de inicio (pública)
echo "¡Bienvenido a la página de inicio! <br><br>";

// Dashboard (accesible solo para usuarios autenticados)
if (isset($_SESSION['user'])) {
   
    echo "Bienvenido, " . $_SESSION['user']['username'] . "! Este es el panel de administración.";
    echo "<br><a href='logout.php'>Cerrar sesión</a>";
    echo "<br><br>";
    
    echo "Seleccione una opción: <br>";
    echo "<a href='users.php'>Administrar usuarios</a>";
    echo "<br>";
    echo "<a href='settings.php'>Configuración del sistema</a>";
    
} else {
    echo "Inicia sesión para acceder al contenido.";
    echo "<br><a href='login.php'>Iniciar sesión</a>";
}
?>

