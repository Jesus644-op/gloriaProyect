<?php
$titulo = "Showroom - Gloria Yogurt";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php echo htmlspecialchars($titulo); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }
    body {
      margin: 0;
      background: #f9f9f9;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    header {
      background: #c8102e;
      padding: 1.2rem;
      text-align: center;
      box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }
    header img {
      max-width: 160px;
      height: auto;
      user-select: none;
    }
    nav {
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      padding: 0.7rem 1rem;
      box-shadow: inset 0 -2px 0 #c8102e;
    }
    nav a {
      margin: 0.5rem 1.5rem;
      text-decoration: none;
      color: #c8102e;
      font-weight: 700;
      font-size: 1rem;
      position: relative;
      padding-bottom: 4px;
      transition: color 0.3s ease;
    }
    nav a:hover,
    nav a:focus {
      color: #a50d24;
      outline: none;
    }
    nav a.active::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: #c8102e;
      border-radius: 2px;
    }
    main {
      flex-grow: 1;
      max-width: 900px;
      margin: 2.5rem auto 3rem;
      padding: 1.5rem 1.5rem 2rem;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      text-align: center;
    }
    h2 {
      color: #c8102e;
      font-weight: 700;
      margin-bottom: 1rem;
      font-size: 2rem;
    }
    p {
      font-size: 1.1rem;
      margin: 1rem 0 2rem;
      color: #555;
    }
    iframe {
      width: 100%;
      height: 400px;
      border: none;
      border-radius: 12px;
      box-shadow: 0 3px 12px rgba(0,0,0,0.1);
      transition: box-shadow 0.3s ease;
    }
    iframe:hover,
    iframe:focus {
      box-shadow: 0 6px 18px rgba(0,0,0,0.2);
      outline: none;
    }
    @media (max-width: 600px) {
      nav {
        flex-direction: column;
        align-items: center;
      }
      nav a {
        margin: 0.3rem 0;
        font-size: 1.1rem;
      }
      main {
        margin: 1.5rem 1rem 2rem;
        padding: 1rem 1rem 1.5rem;
      }
      iframe {
        height: 280px;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="imagenes/Gloria_3.png" alt="Logo Gloria Yogurt" />
  </header>

  <nav>
    <a href="index.php">Nosotros</a>
    <a href="productos.php">Productos</a>
    <a href="showroom.php" class="active" aria-current="page">Showroom</a>
    <a href="contacto.php">Contacto</a>
  </nav>

  <main>
    <h2>Visítanos en nuestra planta – Gloria Yogurt</h2>
    <p>Planta Lima (Huachipa):</p>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.2253546932416!2d-76.96586268483187!3d-12.023145291440146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c90a9047e8c5%3A0x868b1f7b8a60e2aa!2sPlanta%20Gloria%20Huachipa!5e0!3m2!1ses-419!2spe!4v1696839408347!5m2!1ses-419!2spe"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
      tabindex="0"
      title="Mapa de Planta Gloria Huachipa, Lima">
    </iframe>
    <p>Para coordinar la visita a Planta Lima – Huachipa, puedes escribir a <strong>visitasaplanta@gloria.com.pe</strong>.</p>
  </main>
</body>
</html>
