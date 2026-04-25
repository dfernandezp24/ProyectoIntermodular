<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kpop-Wiki</title>
  <?php
  $v = time(); // Versión para evitar caché
  $main_css = isset($extra_css) ? $extra_css : 'PaginaPrincipal/css/lightMode.css';
  $tablet_css = isset($extra_css_tablet) ? $extra_css_tablet : 'PaginaPrincipal/css/lightModeTablet.css';
  $mobile_css = isset($extra_css_mobile) ? $extra_css_mobile : 'PaginaPrincipal/css/lightModeMovil.css';

  $path_main = $base_url . '/' . ltrim($main_css, '/') . '?v=' . $v;
  $path_tablet = $base_url . '/' . ltrim($tablet_css, '/') . '?v=' . $v;
  $path_mobile = $base_url . '/' . ltrim($mobile_css, '/') . '?v=' . $v;
  ?>
  <link id="theme-main" rel="stylesheet" href="<?= $path_main ?>">
  <link id="theme-tablet" rel="stylesheet" href="<?= $path_tablet ?>"
    media="screen and (min-width: 601px) and (max-width: 1024px)">
  <link id="theme-mobile" rel="stylesheet" href="<?= $path_mobile ?>" media="(max-width: 600px)">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@200..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/bb7eda0c53.js" crossorigin="anonymous"></script>
  <script>
    const BASE_URL = '<?= rtrim($base_url, '/') ?>';
  </script>
</head>

<body>

  <header class="header">
    <div class="izquierda">
      <a href="<?= $base_url ?>/PaginaPrincipal/principal.php" class="logo-link">
        <img src="<?= $base_url ?>/fotos/logo.jpeg" alt="Logo" class="logo">
      </a>
      <a href="<?= $base_url ?>/PaginaPrincipal/principal.php" class="nombre-link">
        <h1 class="nombre">Kpop-Wiki</h1>
      </a>
      <form class="buscador-form" action="<?= $base_url ?>/Artistas/buscar.php" method="GET">
        <input type="text" name="q" class="busqueda" placeholder="Buscar artistas...">
      </form>
    </div>

    <nav class="menu">
      <div class="item">
        <a href="<?= $base_url ?>/PaginaPrincipal/principal.php"
          class="<?= ($current_page == 'inicio') ? 'activo' : '' ?>">Inicio</a>
      </div>
      <div class="item">
        <a href="<?= $base_url ?>/Comeback/comebackSelector.php"
          class="<?= ($current_page == 'comebacks') ? 'activo' : '' ?>">Comebacks</a>
        <div class="submenu">
          <a href="<?= $base_url ?>/Comeback/Recientes/recientes.php">Comebacks recientes</a>
          <a href="<?= $base_url ?>/Comeback/virales/virales.php">Canciones virales</a>
          <a href="<?= $base_url ?>/Comeback/Promociones/promociones.php">Promociones</a>
          <a href="<?= $base_url ?>/Comeback/2025/cb_p1.php">Comebacks 2025</a>
        </div>
      </div>
      <div class="item">
        <a href="<?= $base_url ?>/Artistas/artistasSelector.php"
          class="<?= ($current_page == 'artistas') ? 'activo' : '' ?>">Artistas</a>
        <div class="submenu">
          <a href="<?= $base_url ?>/Artistas/1Gen/1Gen.php">Primera generación</a>
          <a href="<?= $base_url ?>/Artistas/2Gen/2Gen.php">Segunda generación</a>
          <a href="<?= $base_url ?>/Artistas/3Gen/3Gen.php">Tercera generación</a>
          <a href="<?= $base_url ?>/Artistas/4Gen/4Gen.php">Cuarta generación</a>
          <a href="<?= $base_url ?>/Artistas/5Gen/5Gen.php">Quinta generación</a>
        </div>
      </div>
    </nav>

    <div class="header-derecha">
      <?php if (isset($_SESSION['user_id'])): ?>
        <a href="<?= $base_url ?>/Usuarios/perfil.php" class="user-link">
          <i class="fa-solid fa-user"></i>
          <span><?= htmlspecialchars($_SESSION['username']) ?></span>
        </a>
        <a href="<?= $base_url ?>/Usuarios/logout.php" class="logout-link" title="Cerrar sesión">
          <i class="fa-solid fa-right-from-bracket"></i>
        </a>
      <?php else: ?>
        <a href="<?= $base_url ?>/Usuarios/login.php" class="login-link">
          <i class="fa-solid fa-circle-user"></i>
          <span>Entrar</span>
        </a>
      <?php endif; ?>
    </div>
  </header>