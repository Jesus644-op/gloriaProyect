<?php
$titulo = "Productos - Gloria Yogurt";
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
      padding: 1rem;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    header img {
      max-width: 160px;
      height: auto;
    }
    nav {
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      padding: 0.75rem 1rem;
      box-shadow: inset 0 -1px 0 #c8102e;
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
      max-width: 1200px;
      margin: 2rem auto 3rem;
      padding: 0 1rem;
    }
    h2 {
      text-align: center;
      margin-bottom: 2rem;
      color: #c8102e;
      font-weight: 700;
      font-size: 2rem;
    }
    .productos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 2rem;
    }
    .producto {
      background: white;
      border-radius: 10px;
      padding: 1rem;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .producto:hover,
    .producto:focus-within {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
      outline: none;
    }
    .producto img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      user-select: none;
    }
    .producto h3 {
      margin: 1rem 0 0.5rem;
      font-size: 1.25rem;
      color: #222;
    }
    .producto p {
      font-size: 1rem;
      color: #555;
      margin-bottom: 1.25rem;
      min-height: 60px;
    }
    .producto button {
      background-color: #c8102e;
      color: white;
      border: none;
      padding: 0.7rem 1.6rem;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 700;
      transition: background-color 0.3s ease;
    }
    .producto button:hover,
    .producto button:focus {
      background-color: #a50d24;
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
    }
  </style>
</head>
<body>
  <header>
    <img src="imagenes/Gloria_3.png" alt="Logo Gloria Yogurt" />
  </header>
  <nav>
    <a href="index.php">Nosotros</a>
    <a href="productos.php" class="active" aria-current="page">Productos</a>
    <a href="showroom.php">Showroom</a>
    <a href="contacto.php">Contacto</a>
  </nav>

  <main>
    <h2>Nuestros Yogures Gloria</h2>
    <div class="productos" role="list">
      <article class="producto" role="listitem" tabindex="0" aria-label="Yogurt Fresa y Plátano">
        <img src="imagenes/image-ce593321b4c142f98bb17b7126a57d0f.jpg" alt="Yogurt Fresa y Plátano" />
        <h3>Fresa y Plátano</h3>
        <p>Delicioso yogurt bebible con fresa y plátano, fuente de proteína y vitaminas A y D.</p>
        <button onclick="alert('Añadido al carrito: Fresa y Plátano')" aria-label="Comprar Yogurt Fresa y Plátano">Comprar</button>
      </article>

      <article class="producto" role="listitem" tabindex="0" aria-label="Yogurt Natural">
        <img src="imagenes/GLORIA-NATURAL-YOGURT-1L-1000x1000.jpg" alt="Yogurt Natural" />
        <h3>Natural</h3>
        <p>Yogurt natural parcialmente descremado, ideal para toda la familia, aporta calcio y fósforo.</p>
        <button onclick="alert('Añadido al carrito: Natural')" aria-label="Comprar Yogurt Natural">Comprar</button>
      </article>

      <article class="producto" role="listitem" tabindex="0" aria-label="Yogurt Tutti Frutti">
        <img src="imagenes/fa_1657503867612_ilkgbu92v8eym6o.png" alt="Yogurt Tutti Frutti" />
        <h3>Tutti Frutti</h3>
        <p>Mezcla frutal (durazno, fresa, manzana, piña), sabroso y nutritivo, presentación 1 kg.</p>
        <button onclick="alert('Añadido al carrito: Tutti Frutti')" aria-label="Comprar Yogurt Tutti Frutti">Comprar</button>
      </article>

      <article class="producto" role="listitem" tabindex="0" aria-label="Yogurt Guanábana">
        <img src="imagenes/OIP.jpg" alt="Yogurt Guanábana" />
        <h3>Guanábana</h3>
        <p>Yogurt de sabor guanábana, fuente de proteína, en presentación de 1 kg y 1.7 kg.</p>
        <button onclick="alert('Añadido al carrito: Guanábana')" aria-label="Comprar Yogurt Guanábana">Comprar</button>
      </article>
    </div>
  </main>
</body>
</html>
