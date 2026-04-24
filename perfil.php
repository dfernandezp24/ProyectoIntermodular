<?php
require_once 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user_data = $stmt->fetch();

$stmt = $pdo->prepare("
    SELECT a.* FROM artists a
    JOIN user_favorites uf ON a.id = uf.artist_id
    WHERE uf.user_id = ?
");
$stmt->execute([$user_id]);
$favoritos = $stmt->fetchAll();

$current_page = 'perfil';
include 'includes/header.php';
?>

<main class="perfil-container">
    <div class="perfil-header">
        <div class="user-avatar">
            <i class="fa-solid fa-circle-user"></i>
        </div>
        <div class="user-info">
            <h1>Hola, <?= htmlspecialchars($user_data['username']) ?></h1>
            <p>Miembro desde: <?= date('d/m/Y', strtotime($user_data['created_at'])) ?></p>
        </div>
    </div>

    <section class="perfil-section">
        <h2>Mis Artistas Favoritos</h2>
        <div class="favoritos-grid">
            <?php if (empty($favoritos)): ?>
                <div class="empty-state">
                    <p>Aún no tienes artistas favoritos.</p>
                    <p>Explora la sección de <a href="Artistas/artistasSelector.php">Artistas</a> para añadir los tuyos.</p>
                </div>
            <?php else: ?>
                <?php foreach ($favoritos as $artist): ?>
                    <div class="artist-mini-card">
                        <img src="<?= htmlspecialchars($artist['image_url']) ?>" alt="<?= htmlspecialchars($artist['name']) ?>">
                        <h3><?= htmlspecialchars($artist['name']) ?></h3>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="perfil-section settings">
        <h2>Ajustes de cuenta</h2>
        <div class="settings-list">
            <div class="setting-item">
                <span class="label">Email:</span>
                <span class="value"><?= htmlspecialchars($user_data['email']) ?></span>
            </div>
            <a href="logout.php" class="btn-logout-big">Cerrar Sesión</a>
        </div>
    </section>
</main>

<style>
    .perfil-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: 'Noto Serif KR', serif;
    }

    .perfil-header {
        display: flex;
        align-items: center;
        gap: 30px;
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        border: 2px solid black;
        margin-bottom: 30px;
    }

    .user-avatar i {
        font-size: 100px;
        color: rgb(179, 157, 219);
    }

    .user-info h1 {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 50px;
        margin: 0;
    }

    .perfil-section {
        background-color: white;
        padding: 25px;
        border-radius: 15px;
        border: 2px solid black;
        margin-bottom: 30px;
    }

    .perfil-section h2 {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 32px;
        border-bottom: 2px solid rgb(255, 202, 40);
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .favoritos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 20px;
    }

    .empty-state {
        grid-column: 1 / -1;
        text-align: center;
        padding: 40px;
        color: #666;
    }

    .empty-state a {
        color: rgb(163, 140, 210);
        text-decoration: none;
        font-weight: bold;
    }

    .settings-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .setting-item {
        display: flex;
        gap: 10px;
        font-size: 18px;
    }

    .setting-item .label {
        font-weight: bold;
    }

    .btn-logout-big {
        display: inline-block;
        background-color: #f8d7da;
        color: #721c24;
        padding: 10px 20px;
        border-radius: 20px;
        text-decoration: none;
        text-align: center;
        font-weight: bold;
        border: 1px solid #f5c6cb;
        margin-top: 20px;
        transition: all 0.3s ease;
    }

    .btn-logout-big:hover {
        background-color: #f5c6cb;
    }
</style>

<?php include 'includes/footer.php'; ?>