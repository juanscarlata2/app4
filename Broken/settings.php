<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$role = $_SESSION['user']['role'];

if ($role !== 'admin') {
    echo "No tienes acceso a esta página.";
    echo "<br><a href='logout.php'>Cerrar sesión</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Configuración del sistema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h2 class="title">Configuración del sistema</h2>
            <p>Esta es la página de configuración del sistema.</p>
            <br>
            <a class="button is-primary" href="index.php">Volver al panel de administración</a>
            <br><br>
            <!-- Aquí puedes agregar la lógica para mostrar y modificar la configuración del sistema -->
        </div>
    </section>
</body>
</html>

