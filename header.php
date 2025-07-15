<header>
  <img src="imagenes/Gloria_3.png" alt="Logo Gloria Yogurt">
</header>
<nav>
  <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Nosotros</a>
  <a href="productos.php" class="<?= basename($_SERVER['PHP_SELF']) == 'productos.php' ? 'active' : '' ?>">Productos</a>
  <a href="showroom.php" class="<?= basename($_SERVER['PHP_SELF']) == 'showroom.php' ? 'active' : '' ?>">Showroom</a>
  <a href="contacto.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contacto.php' ? 'active' : '' ?>">Contacto</a>
  <?php if (isset($_SESSION['usuario'])): ?>
    <a href="logout.php">Cerrar Sesión</a>
  <?php else: ?>
    <a href="login.php">Login</a>
  <?php endif; ?>
</nav>
