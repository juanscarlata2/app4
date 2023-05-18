<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'HackSecP44SS*!987') {
        $_SESSION['user'] = [
            'username' => $username,
            'role' => 'admin'
        ];
        header('Location: index.php');
        exit;
    }elseif  ($username === 'pedro' && $password === 'Malcorp2023*') {
        $_SESSION['user'] = [
            'username' => $username,
            'role' => 'user'
        ];
        header('Location: index.php');
        exit;
    
    }else{
        echo "Nombre de usuario o contraseña inválidos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>skynet</title>
    <link rel="stylesheet" href="css/bulma.min.css">
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
    <!-- pedro: the event log is in logs/app.log -->
    <section class="section">
        <div class="container">
            <h2 class="title">Iniciar sesión</h2>
            <form method="POST" action="login.php">
                <div class="field">
                    <label class="label" for="username">Usuario:</label>
                    <div class="control">
                        <input class="input" type="text" name="username" id="username" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="password">Contraseña:</label>
                    <div class="control">
                        <input class="input" type="password" name="password" id="password" required>
                    </div>
                </div>

                <div class="control">
                    <button class="button is-primary" type="submit" name="login">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

