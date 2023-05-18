<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Skynet</title>
  <link rel="stylesheet" href="/css/bulma.min.css">
  <style>
    body {
      background-image: url('img/back.svg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">¡Bienvenido a Skynet!</h1>
    <br>

    <?php if (isset($_SESSION['user'])): ?>
      <p>Bienvenido, <?php echo $_SESSION['user']['username']; ?>! Este es el panel de administración.</p>
      <br>
      <p>Seleccione una opción:</p>
      <ul>
        <li><a href="users.php">Administrar usuarios</a></li>
        <li><a href="settings.php">Configuración del sistema</a></li>
      </ul>
    <?php else: ?>
      <p>Inicia sesión para acceder al contenido.</p>
      <br>
      <a href="login.php" class="button is-primary">Iniciar sesión</a>
    <?php endif; ?>
  </div>

  <?php if (isset($_SESSION['user'])): ?>
    <a href="logout.php" class="button is-danger" style="position: absolute; bottom: 20px; right: 20px;">Cerrar sesión</a>
  <?php endif; ?>
</body>
</html>
