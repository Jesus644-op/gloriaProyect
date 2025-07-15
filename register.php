<?php
session_start();
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario']);
    $email = trim($_POST['email']);
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    if ($usuario == '' || $email == '' || $contrasena == '') {
        $error = "Por favor, complete todos los campos.";
    } elseif ($contrasena !== $contrasena2) {
        $error = "Las contraseñas no coinciden.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ? OR email = ?");
        $stmt->bind_param('ss', $usuario, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "El usuario o correo ya está registrado.";
        } else {
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);
            $stmt_insert = $conn->prepare("INSERT INTO usuarios (usuario, email, contrasena) VALUES (?, ?, ?)");
            $stmt_insert->bind_param('sss', $usuario, $email, $hash);
            if ($stmt_insert->execute()) {
                header('Location: login.php');
                exit;
            } else {
                $error = "Error al registrar usuario.";
            }
            $stmt_insert->close();
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registro - Gloria</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; font-family: 'Roboto', sans-serif; }
    body {
      background-color: #f9f9f9;
      display: flex; justify-content: center; align-items: center;
      height: 100vh; margin: 0;
    }
    .register-container {
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
    input[type="text"], input[type="email"], input[type="password"] {
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
    .login-link {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.9rem;
    }
    .login-link a {
      color: #c8102e;
      text-decoration: none;
      font-weight: bold;
    }
    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Registro</h2>
    <form method="post" action="register.php">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" required />

      <label for="email">Correo Electrónico</label>
      <input type="email" id="email" name="email" required />

      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena" required />

      <label for="contrasena2">Confirmar Contraseña</label>
      <input type="password" id="contrasena2" name="contrasena2" required />

      <button type="submit">Registrarse</button>

      <?php if (isset($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>
    </form>
    <div class="login-link">
      ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
    </div>
  </div>
</body>
</html>
