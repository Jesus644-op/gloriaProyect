<?php
$titulo = "Contacto - Gloria";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?= $titulo ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
  <style>
    * { box-sizing: border-box; font-family: 'Roboto', sans-serif; }
    body { margin: 0; background: #f9f9f9; color: #333; }
    header { background: #c8102e; text-align: center; padding: 1rem; }
    header img { max-width: 150px; }
    nav { background: #f2f2f2; display: flex; justify-content: center; flex-wrap: wrap; padding: 0.5rem; }
    nav a { margin: 0.5rem 1rem; text-decoration: none; color: #c8102e; font-weight: bold; }
    nav a.active { text-decoration: underline; }

    main {
      max-width: 600px; margin: 2rem auto; background: white;
      padding: 2rem; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 { text-align: center; color: #c8102e; }
    form { display: flex; flex-direction: column; gap: 1rem; }

    label { font-weight: bold; }
    input, textarea {
      padding: 0.75rem; border: 1px solid #ccc;
      border-radius: 6px; font-size: 1rem;
    }

    button {
      background: #c8102e; color: white;
      padding: 0.75rem; border: none; border-radius: 6px;
      font-size: 1rem; cursor: pointer;
    }

    button:hover {
      background-color: #a50d24;
    }

    .mensaje-exito { color: green; text-align: center; margin-top: 1rem; }
    .mensaje-error { color: red; text-align: center; margin-top: 1rem; }

    @media (max-width: 600px) {
      nav { flex-direction: column; }
    }
  </style>
</head>
<body>
  <header><img src="imagenes/Gloria_3.png" alt="Logo Gloria Yogurt"></header>
  <nav>
    <a href="index.php">Nosotros</a>
    <a href="productos.php">Productos</a>
    <a href="showroom.php">Showroom</a>
    <a href="contacto.php" class="active">Contacto</a>
  </nav>
  <main>
    <h2>Contáctanos</h2>
    <?php if (isset($_GET['exito'])): ?>
      <div class="mensaje-exito">Mensaje enviado correctamente.</div>
    <?php elseif (isset($_GET['error'])): ?>
      <div class="mensaje-error">Hubo un error al enviar el mensaje.</div>
    <?php endif; ?>
    <form action="guardar_contacto.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email" required>

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

      <button type="submit">Enviar Mensaje</button>
    </form>
  </main>
</body>
</html>

