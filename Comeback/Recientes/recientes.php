<?php
require_once '../../includes/db.php';
$current_page = 'comebacks';
$comebacks = $pdo->query("SELECT * FROM comebacks WHERE category = 'recientes'")->fetchAll();
include '../../includes/header.php';
?>

<main class="comebacks-recientes">
  <?php foreach ($comebacks as $cb): ?>
  <div class="comeback-card">
    <img src="<?= $base_url . $cb['image_url'] ?>" alt="Portada de <?= $cb['artist_name'] ?>">
    <div class="comeback-links">
      <a href="<?= $cb['spotify_url'] ?>" target="_blank"><i class="fa-brands fa-spotify"></i></a>
      <a href="<?= $cb['apple_url'] ?>" target="_blank"><i class="fa-brands fa-apple"></i></a>
      <a href="<?= $cb['youtube_url'] ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
    </div>
    <div class="comeback-info">
      <h3><?= $cb['artist_name'] ?></h3>
      <p class="album"><?= $cb['album_name'] ?></p>
      <p class="extra"><?= $cb['release_info'] ?></p>
    </div>
  </div>
  <?php endforeach; ?>
</main>

<?php include '../../includes/footer.php'; ?>
