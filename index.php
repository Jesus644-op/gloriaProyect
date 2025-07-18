<?php
session_start();

// Si no está logueado, redirigir a login.php
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

$titulo = "Nosotros - Gloria";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($titulo); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; font-family: 'Roboto', sans-serif; }
    body { margin: 0; background-color: #f9f9f9; color: #333; min-height: 100vh; display: flex; flex-direction: column; }
    header { 
      background-color: #c8102e; 
      padding: 1rem; 
      display: flex; 
      justify-content: space-between; 
      align-items: center;
      box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }
    header img { max-width: 150px; height: auto; user-select: none; }
    nav { 
      background-color: #f2f2f2; 
      display: flex; 
      justify-content: center; 
      flex-wrap: wrap; 
      padding: 0.5rem 0; 
      box-shadow: inset 0 -2px 0 #c8102e;
    }
    nav a { 
      margin: 0.5rem 1rem; 
      text-decoration: none; 
      color: #c8102e; 
      font-weight: bold; 
      position: relative;
      padding-bottom: 4px;
      transition: color 0.3s ease;
    }
    nav a.active {
      text-decoration: underline;
    }
    nav a:hover,
    nav a:focus {
      color: #a50d24;
      outline: none;
    }
    main { 
      max-width: 900px; 
      margin: 2rem auto 4rem;
      padding: 1rem 1.5rem 2rem;
      background-color: white; 
      border-radius: 10px; 
      box-shadow: 0 0 10px rgba(0,0,0,0.1); 
      flex-grow: 1;
    }
    h2 { 
      text-align: center; 
      margin-bottom: 1.5rem; 
      color: #c8102e;
      font-weight: 700;
      font-size: 2rem;
    }
    p {
      line-height: 1.6;
      font-size: 1.05rem;
      margin-bottom: 2rem;
      color: #444;
    }
    .logout-button {
      background: white;
      color: #c8102e;
      border: none;
      padding: 0.5rem 1rem;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
      text-decoration: none;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .logout-button:hover {
      background: #a50d24;
      color: white;
    }
    .welcome-text {
      color: white;
      font-weight: bold;
      margin-right: 1rem;
      user-select: none;
    }
    img.main-image {
      width: 100%;
      max-width: 600px;
      display: block;
      margin: 0 auto 3rem;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(200,16,46,0.3);
    }

    /* Sección promociones */
    .promociones {
      background: #f2f2f2;
      border-radius: 10px;
      padding: 1.5rem 1rem;
      box-shadow: 0 0 12px rgba(0,0,0,0.07);
      max-width: 900px;
      margin: 0 auto 3rem;
      text-align: center;
    }
    .promociones h3 {
      color: #c8102e;
      margin-bottom: 1rem;
      font-weight: 700;
      font-size: 1.8rem;
    }
    .promo-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
    }
    .promo-item {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 1rem 1.2rem;
      flex: 1 1 280px;
      max-width: 280px;
      text-align: left;
      transition: transform 0.3s ease;
      cursor: default;
    }
    .promo-item:hover {
      transform: translateY(-6px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }
    .promo-item h4 {
      color: #c8102e;
      margin-bottom: 0.6rem;
      font-weight: 700;
      font-size: 1.2rem;
    }
    .promo-item p {
      font-size: 0.95rem;
      color: #555;
      margin: 0;
    }

    @media (max-width: 600px) {
      nav { flex-direction: column; }
      nav a { margin: 0.4rem 0; font-size: 1.1rem; }
      .promo-list {
        flex-direction: column;
        align-items: center;
      }
      .promo-item {
        max-width: 100%;
      }
    }
    .promo-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
    margin-top: 1.5rem;
  }
  
  .promo-item {
    background: #fff;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    max-width: 260px;
    text-align: center;
  }
  
  .promo-img {
    width: 100%;
    max-height: 100px;
    object-fit: cover;
    border-radius: 20px;
    margin-bottom: 0.8rem;
  }
  </style>
</head>
<body>
  <header>
    <img src="imagenes/Gloria_3.png" alt="Logo Gloria" />
    <div style="display: flex; align-items: center;">
      <div class="welcome-text">Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?></div>
      <form method="post" action="logout.php" style="margin:0;">
        <button type="submit" class="logout-button">Cerrar sesión</button>
      </form>
    </div>
  </header>

  <nav>
    <a href="index.php" class="active">Nosotros</a>
    <a href="productos.php">Productos</a>
    <a href="showroom.php">Showroom</a>
    <a href="contacto.php">Contacto</a>
  </nav>

  <main>
    <h2>Bienvenidos a Gloria</h2>
    <p>
      Somos una empresa comprometida con la excelencia y la calidad en cada uno de nuestros productos.
      Con décadas de experiencia en el mercado, nos hemos consolidado como líderes gracias a nuestra pasión por la innovación y la satisfacción de nuestros clientes.
      En Gloria, entendemos la importancia de brindar soluciones saludables y deliciosas que acompañen el bienestar de las familias.
      Nuestra dedicación se refleja en cada etapa de producción, asegurando que cada producto cumpla con los más altos estándares de calidad y sabor.
      Nos enorgullece ser parte de la vida cotidiana de miles de personas, ofreciendo productos que nutren, inspiran y generan confianza.
      Te invitamos a descubrir nuestro portafolio, lleno de tradición y compromiso con un futuro más saludable para todos.
    </p>
    <img src="imagenes/R.jpg" alt="Nuestra Empresa" class="main-image" />

    <section class="promociones" aria-label="Promociones destacadas">
  <h3>Promociones que no te puedes perder</h3>
  <div class="promo-list">
    <article class="promo-item" tabindex="0">
      <img src="imagenes/77b69a2401bb174acb87bdea20a9fb67 (1).jpg" alt="Yogurt Fresa y Plátano" class="promo-img" />
      <h4>Yogurt Fresa y Plátano - 20% OFF</h4>
      <p>Disfruta nuestro delicioso yogurt bebible con un descuento especial durante todo el mes.</p>
    </article>
    <article class="promo-item" tabindex="0">
      <img src="imagenes/pique-nique-repas-famille.jpg" alt="Pack Familiar Natural" class="promo-img" />
      <h4>Pack Familiar Natural</h4>
      <p>Compra el pack de 6 unidades y recibe un precio exclusivo para toda la familia.</p>
    </article>
    <article class="promo-item" tabindex="0">
      <img src="imagenes/IMG_40611-01-1024x683.jpg" alt="Showroom Visita Guiada" class="promo-img" />
      <h4>Showroom: Visita Guiada Gratis</h4>
      <p>Coordina tu visita a nuestra planta y conoce todo el proceso de producción.</p>
    </article>
  </div>
</section>

  </main>
</body>
</html>
