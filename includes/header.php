<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kpop-Wiki</title>
  <link id="theme-main" rel="stylesheet" href="css/lightMode.css">
  <link id="theme-tablet" rel="stylesheet" href="css/lightModeTablet.css" media="screen and (min-width: 601px) and (max-width: 1024px)">
  <link id="theme-mobile" rel="stylesheet" href="css/lightModeMovil.css" media="(max-width: 600px)">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@200..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/bb7eda0c53.js" crossorigin="anonymous"></script>
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
    <form class="buscador-form" action="<?= $base_url ?>/Artistas/artistasSelector.php" method="GET">
      <input type="text" name="q" class="busqueda" placeholder="Buscar artistas...">
    </form>
  </div>

  <nav class="menu">
    <div class="item">
        <a href="<?= $base_url ?>/PaginaPrincipal/principal.php" class="<?= ($current_page == 'inicio') ? 'activo' : '' ?>">Inicio</a>
    </div>
    <div class="item">
      <a href="<?= $base_url ?>/Comeback/comebackSelector.php" class="<?= ($current_page == 'comebacks') ? 'activo' : '' ?>">Comebacks</a>
      <div class="submenu">
        <a href="<?= $base_url ?>/Comeback/Recientes/recientes.php">Comebacks recientes</a>
        <a href="<?= $base_url ?>/Comeback/virales/virales.php">Canciones virales</a>
        <a href="<?= $base_url ?>/Comeback/Promociones/promociones.php">Promociones</a>
        <a href="<?= $base_url ?>/Comeback/2025/cb_p1.php">Comebacks 2025</a>
      </div>
    </div>
    <div class="item">
      <a href="<?= $base_url ?>/Artistas/artistasSelector.php" class="<?= ($current_page == 'artistas') ? 'activo' : '' ?>">Artistas</a>
      <div class="submenu">
        <a href="<?= $base_url ?>/Artistas/1Gen/1Gen.php">Primera generación</a>
        <a href="<?= $base_url ?>/Artistas/2Gen/2Gen.php">Segunda generación</a>
        <a href="<?= $base_url ?>/Artistas/3Gen/3Gen.php">Tercera generación</a>
        <a href="<?= $base_url ?>/Artistas/4Gen/4Gen.php">Cuarta generación</a>
        <a href="<?= $base_url ?>/Artistas/5Gen/5Gen.php">Quinta generación</a>
      </div>
    </div>
  </nav>
</header>
