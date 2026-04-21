<?php
require_once '../includes/db.php';
$current_page = 'inicio';
$banners = $pdo->query("SELECT * FROM banners ORDER BY order_num ASC")->fetchAll();
$s = $pdo->query("SELECT setting_key, setting_value FROM site_settings")->fetchAll(PDO::FETCH_KEY_PAIR);
include '../includes/header.php';
?>

<main class="contenido">
  <div class="banner">
    <div class="slides">
      <?php foreach ($banners as $i => $b): ?>
      <div class="slide">
        <img src="<?= $base_url . $b['image_url'] ?>" alt="<?= $b['caption'] ?>">
        <div class="overlay-texto"><p><?= $b['caption'] ?></p></div>
        <div class="flecha izquierda">&#10094;</div>
        <div class="flecha derecha">&#10095;</div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="indicadores">
      <?php foreach ($banners as $i => $b): ?>
      <div class="punto <?= !$i ? 'active' : '' ?>" data-index="<?= $i ?>"></div>
      <?php endforeach; ?>
    </div>
  </div>

  <h1 class="titulo-comeback"><?= $s['recommended_video_heading'] ?? 'Comeback recomendado' ?></h1>

  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/<?= $s['recommended_video_id'] ?>" title="<?= $s['recommended_video_title'] ?>" frameborder="0" allowfullscreen></iframe>
  </div>
</main>

<?php include '../includes/footer.php'; ?>