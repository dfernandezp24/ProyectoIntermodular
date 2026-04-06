<?php
// 1. Conexión a la base de datos
require_once '../includes/db.php';

// 2. Configuración de la página
$page_title = 'Kpop-Wiki - Inicio';
$current_page = 'inicio';

// 3. Obtener Banners de la DB
$stmtBanners = $pdo->query("SELECT * FROM banners ORDER BY order_num ASC");
$banners = $stmtBanners->fetchAll();

// 4. Obtener Ajustes (video y título)
$stmtSettings = $pdo->query("SELECT setting_key, setting_value FROM site_settings");
$settings = $stmtSettings->fetchAll(PDO::FETCH_KEY_PAIR);

// 5. Incluir la cabecera
include '../includes/header.php';
?>

<main class="contenido">

  <div class="banner">
    <div class="slides">
      <?php foreach ($banners as $index => $banner): ?>
      <div class="slide">
        <img src="<?php echo $base_url . htmlspecialchars($banner['image_url']); ?>" alt="<?php echo htmlspecialchars($banner['caption']); ?>">
        <div class="overlay-texto">
          <p><?php echo htmlspecialchars($banner['caption']); ?></p>
        </div>
        <div class="flecha izquierda">&#10094;</div>
        <div class="flecha derecha">&#10095;</div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="indicadores">
      <?php foreach ($banners as $index => $banner): ?>
      <div class="punto <?php echo ($index === 0) ? 'active' : ''; ?>" data-index="<?php echo $index; ?>"></div>
      <?php endforeach; ?>
    </div>
  </div>

  <h1 class="titulo-comeback">
    <?php echo htmlspecialchars($settings['recommended_video_heading'] ?? 'Comeback recomendado del mes'); ?>
  </h1>

  <div class="video-container">
    <iframe 
      src="https://www.youtube.com/embed/<?php echo htmlspecialchars($settings['recommended_video_id']); ?>"
      title="<?php echo htmlspecialchars($settings['recommended_video_title']); ?>"
      frameborder="0"
      allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen>
    </iframe>
  </div>

<?php 
// 6. Incluir el pie de página
include '../includes/footer.php'; 
?>
