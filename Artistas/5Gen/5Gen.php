<?php
require_once '../../includes/db.php';

$current_page = 'artistas';

$limit = 8;
$page = isset($_GET['p']) ? max(1, (int) $_GET['p']) : 1;
$offset = ($page - 1) * $limit;

$total_stmt = $pdo->prepare("SELECT COUNT(*) FROM artists WHERE generation = 5");
$total_stmt->execute();
$total_artists = $total_stmt->fetchColumn();
$total_pages = ceil($total_artists / $limit);

$stmt = $pdo->prepare("SELECT * FROM artists WHERE generation = 5 ORDER BY name ASC LIMIT $limit OFFSET $offset");
$stmt->execute();
$artists = $stmt->fetchAll();

$favorites = [];
if (isset($_SESSION['user_id'])) {
    $stmt = $pdo->prepare("SELECT artist_id FROM user_favorites WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $favorites = $stmt->fetchAll(PDO::FETCH_COLUMN);
}

$extra_css = 'Artistas/5Gen/css/lightMode.css';
$extra_css_tablet = 'Artistas/5Gen/css/lightModeTablet.css';
$extra_css_mobile = 'Artistas/5Gen/css/lightModeMovil.css';
include '../../includes/header.php';
?>

<main class="grupos">

    <h2>Quinta generación</h2>

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
                <a href="<?= ($artist['wiki_url'] === '#' || empty($artist['wiki_url'])) ? '#' : $base_url . htmlspecialchars($artist['wiki_url']) ?>"
                    class="grupo-main-link">
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

    <?php if ($total_pages > 1): ?>
        <nav class="paginacion">
            <?php if ($page > 1): ?>
                <a href="?p=<?= $page - 1 ?>" class="flecha">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?p=<?= $i ?>" class="<?= ($page == $i) ? 'activo' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?p=<?= $page + 1 ?>" class="flecha">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            <?php endif; ?>
        </nav>
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
<?php include '../../includes/footer.php'; ?>
</body>

</html>
