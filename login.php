<?php
session_start();
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario']);
    $contrasena = $_POST['contrasena'];

    $stmt = $conn->prepare("SELECT id, contrasena FROM usuarios WHERE usuario = ?");
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hash);
        $stmt->fetch();
        if (password_verify($contrasena, $hash)) {
            $_SESSION['usuario_id'] = $id;
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
            exit;
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Iniciar Sesión - Gloria</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; font-family: 'Roboto', sans-serif; }
    body {
      background-color: #f9f9f9;
      display: flex; justify-content: center; align-items: center;
      height: 100vh; margin: 0;
    }
    .login-container {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 320px;
    }
    h2 {
      text-align: center;
      color: #c8102e;
      margin-bottom: 1.5rem;
    }
    label {
      display: block;
      margin-top: 1rem;
      font-weight: 600;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }
    button {
      margin-top: 1.5rem;
      width: 100%;
      padding: 0.75rem;
      background-color: #c8102e;
      border: none;
      border-radius: 6px;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      font-weight: bold;
    }
    button:hover {
      background-color: #a50d24;
    }
    .error {
      color: #c8102e;
      margin-top: 1rem;
      text-align: center;
    }
    .register-link {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.9rem;
    }
    .register-link a {
      color: #c8102e;
      text-decoration: none;
      font-weight: bold;
    }
    .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form method="post" action="login.php">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" required />

      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena" required />

      <button type="submit">Entrar</button>

      <?php if (isset($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>
    </form>
    <div class="register-link">
      ¿No tienes cuenta? <a href="register.php">Regístrate aquí</a>
    </div>
  </div>
</body>
</html>

