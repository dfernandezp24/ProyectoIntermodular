<?php
require_once '../../includes/db.php';

$current_page = 'comebacks';
$extra_css = 'Comeback/virales/css/lightMode.css';
$extra_css_tablet = 'Comeback/virales/css/lightModeTablet.css';
$extra_css_mobile = 'Comeback/virales/css/lightModeMovil.css';

// Obtener canciones de la nueva tabla 'virales'
try {
    $stmt = $pdo->prepare("SELECT * FROM virales ORDER BY CAST(ranking AS UNSIGNED) ASC LIMIT 100");
    $stmt->execute();
    $virales = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $virales = [];
}

// Paginación
$items_por_pagina = 12;
$total_items = count($virales);
$total_paginas = ceil($total_items / $items_por_pagina);
$pagina_actual = isset($_GET['p']) ? (int)$_GET['p'] : 1;

if ($pagina_actual < 1) $pagina_actual = 1;
if ($total_paginas > 0 && $pagina_actual > $total_paginas) $pagina_actual = $total_paginas;

$inicio = ($pagina_actual - 1) * $items_por_pagina;
$virales_pagina = array_slice($virales, $inicio, $items_por_pagina);

include '../../includes/header.php';
?>

<section class="virales">

  <h2>Canciones virales</h2>

  <?php if (empty($virales)): ?>
    <div style="text-align: center; padding: 50px; color: #666;">
        <p><i class="fa-solid fa-sync fa-spin"></i> No hay datos en la tabla 'virales'. Por favor, ejecuta el script de sincronización.</p>
    </div>
  <?php else: ?>
    <div class="virales-grid">
      <?php foreach ($virales_pagina as $song): ?>
        <div class="viral-row">
          <div class="ranking"><?= $song['ranking'] ?></div>

          <img src="<?= $song['image_url'] ?>" alt="Portada de <?= htmlspecialchars($song['song_name']) ?>">

          <div class="viral-info">
            <h3><?= htmlspecialchars($song['song_name']) ?></h3>
            <p class="artista"><?= htmlspecialchars($song['artist_name']) ?></p>
            <p class="extra"><?= htmlspecialchars($song['album_name'] . ' · ' . substr($song['release_info'], 0, 4)) ?></p>
            <?php if ($song['preview_url']): ?>
              <button class="btn-play" onclick="playPreview('<?= $song['preview_url'] ?>', this)"><i class="fa-solid fa-play"></i> Preview</button>
            <?php endif; ?>
          </div>

          <div class="viral-links">
            <?php if ($song['spotify_url']): ?>
              <a href="<?= $song['spotify_url'] ?>" target="_blank"><i class="fa-brands fa-spotify"></i></a>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="paginacion">
      <?php if ($pagina_actual > 1): ?>
        <a href="virales.php?p=<?= $pagina_actual - 1 ?>" class="flecha">
          <i class="fa-solid fa-chevron-left"></i>
        </a>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
        <a href="virales.php?p=<?= $i ?>" class="<?= ($i == $pagina_actual) ? 'activo' : '' ?>"><?= $i ?></a>
      <?php endfor; ?>

      <?php if ($pagina_actual < $total_paginas): ?>
        <a href="virales.php?p=<?= $pagina_actual + 1 ?>" class="flecha">
          <i class="fa-solid fa-chevron-right"></i>
        </a>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <audio id="spotify-preview"></audio>

  <script>
    function playPreview(url, btn) {
        const audio = document.getElementById('spotify-preview');
        const icon = btn.querySelector('i');
        
        if (audio.src === url && !audio.paused) {
            audio.pause();
            icon.className = 'fa-solid fa-play';
        } else {
            document.querySelectorAll('.btn-play i').forEach(i => i.className = 'fa-solid fa-play');
            audio.src = url;
            audio.play();
            icon.className = 'fa-solid fa-pause';
        }
        
        audio.onended = () => {
            icon.className = 'fa-solid fa-play';
        };
    }
  </script>

  <style>
    .btn-play {
        background: #1DB954;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 0.8rem;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: transform 0.2s;
    }
    .btn-play:hover {
        transform: scale(1.05);
        background: #1ed760;
    }
  </style>

</section>

<?php include '../../includes/footer.php'; ?>