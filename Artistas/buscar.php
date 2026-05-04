<?php
require_once '../includes/db.php';

$query = trim($_GET['q'] ?? '');
$current_page = 'artistas';
$extra_css = 'Artistas/css/lightMode.css';
$extra_css_tablet = 'Artistas/css/lightModeTablet.css';
$extra_css_mobile = 'Artistas/css/lightModeMovil.css';

$artists = [];
if (!empty($query)) {
    $stmt = $pdo->prepare("SELECT * FROM artists WHERE name LIKE ? OR company LIKE ?");
    $stmt->execute(["%$query%", "%$query%"]);
    $artists = $stmt->fetchAll();
}

$favorites = [];
if (isset($_SESSION['user_id'])) {
    $stmt = $pdo->prepare("SELECT artist_id FROM user_favorites WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $favorites = $stmt->fetchAll(PDO::FETCH_COLUMN);
}

include '../includes/header.php';
?>

<main class="grupos">
    <h2>Resultados de búsqueda para: "<?= htmlspecialchars($query) ?>"</h2>

    <?php if (empty($artists)): ?>
        <p style="text-align: center; font-size: 20px; margin: 50px 0;">No se encontraron artistas que coincidan con tu
            búsqueda.</p>
    <?php else: ?>
        <div class="grupos-grid">
            <?php foreach ($artists as $artist):
                $is_fav = in_array($artist['id'], $favorites);
                ?>
                <div class="grupo-card">
                    <div class="fav-container">
                        <button class="fav-btn <?= $is_fav ? 'active' : '' ?>" data-id="<?= $artist['id'] ?>">
                            <i class="<?= $is_fav ? 'fa-solid' : 'fa-regular' ?> fa-heart"></i>
                        </button>
                    </div>
                    <a href="<?= ($artist['wiki_url'] === '#' || empty($artist['wiki_url'])) ? '#' : $base_url . htmlspecialchars($artist['wiki_url']) ?>" class="grupo-main-link">
                        <img src="<?= $base_url . htmlspecialchars($artist['image_url']) ?>"
                            alt="Foto de <?= htmlspecialchars($artist['name']) ?>">
                        <div class="grupo-info">
                            <h3><?= htmlspecialchars($artist['name']) ?></h3>
                            <p><?= htmlspecialchars($artist['company']) ?></p>
                        </div>
                    </a>
                    <div class="grupo-links">
                        <?php if ($artist['spotify_url']): ?>
                            <a href="<?= htmlspecialchars($artist['spotify_url']) ?>" target="_blank"><i
                                    class="fa-brands fa-spotify"></i></a>
                        <?php endif; ?>
                        <?php if ($artist['apple_url']): ?>
                            <a href="<?= htmlspecialchars($artist['apple_url']) ?>" target="_blank"><i
                                    class="fa-brands fa-apple"></i></a>
                        <?php endif; ?>
                        <?php if ($artist['youtube_url']): ?>
                            <a href="<?= htmlspecialchars($artist['youtube_url']) ?>" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>

<script>
    document.querySelectorAll('.fav-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const artistId = this.dataset.id;
            const icon = this.querySelector('i');

            fetch('<?= $base_url ?>/Usuarios/toggle_favorite.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'artist_id=' + artistId
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        if (data.action === 'added') {
                            this.classList.add('active');
                            icon.classList.remove('fa-regular');
                            icon.classList.add('fa-solid');
                        } else {
                            this.classList.remove('active');
                            icon.classList.remove('fa-solid');
                            icon.classList.add('fa-regular');
                        }
                    } else if (data.message === 'Debes iniciar sesión') {
                        window.location.href = '<?= $base_url ?>/Usuarios/login.php';
                    }
                });
        });
    });
</script>
<?php include '../includes/footer.php'; ?>
</body>

</html>