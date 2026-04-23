<?php
require_once '../../includes/db.php';

$current_page = 'comebacks';
$items_per_page = 6;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
if ($page < 1)
  $page = 1;
$offset = ($page - 1) * $items_per_page;

$total_items = $pdo->query("SELECT COUNT(*) FROM promociones")->fetchColumn();
$total_pages = ceil($total_items / $items_per_page);

$stmt = $pdo->prepare("SELECT * FROM promociones LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $items_per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$promociones = $stmt->fetchAll();


include '../../includes/header.php';
?>

<section class="promociones">
  <h2>Promociones</h2>

  <div class="promociones-grid">
    <?php foreach ($promociones as $p): ?>
      <div class="promo-card">
        <img src="<?= $base_url . $p['image_url'] ?>"
          alt="Stage de <?= htmlspecialchars($p['song_name']) ?> de <?= htmlspecialchars($p['artist_name']) ?>">

        <div class="promo-info">
          <h3><?= htmlspecialchars($p['artist_name']) ?></h3>
          <p class="cancion"><?= htmlspecialchars($p['song_name']) ?></p>
          <p class="programa"><?= htmlspecialchars($p['program_info']) ?></p>
        </div>

        <a href="<?= htmlspecialchars($p['youtube_url']) ?>" target="_blank" class="promo-youtube">
          <i class="fa-brands fa-youtube"></i>
        </a>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if ($total_pages > 1): ?>
    <div class="paginacion">
      <?php if ($page > 1): ?>
        <a href="?page=<?= $page - 1 ?>">
          <i class="fa-solid fa-chevron-left"></i>
        </a>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <a href="?page=<?= $i ?>" class="<?= ($i == $page) ? 'activo' : '' ?>"><?= $i ?></a>
      <?php endfor; ?>

      <?php if ($page < $total_pages): ?>
        <a href="?page=<?= $page + 1 ?>">
          <i class="fa-solid fa-chevron-right"></i>
        </a>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</section>

<?php include '../../includes/footer.php'; ?>