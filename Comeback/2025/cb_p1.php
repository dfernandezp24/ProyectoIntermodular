<?php
require_once '../../includes/db.php';

$current_page = 'comebacks';
$month = (int) ($_GET['month'] ?? 1);
$year = 2025;

$stmt = $pdo->prepare("SELECT * FROM comebacks WHERE month = ? AND year = ? AND category = '2025' ORDER BY id ASC");
$stmt->execute([$month, $year]);
$comebacks = $stmt->fetchAll();


$meses_nombres = [
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Septiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Diciembre'
];

$meses_abreviados = [
    1 => 'Ene',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Abr',
    5 => 'May',
    6 => 'Jun',
    7 => 'Jul',
    8 => 'Ago',
    9 => 'Sep',
    10 => 'Oct',
    11 => 'Nov',
    12 => 'Dic'
];

include '../../includes/header.php';
?>

<main class="comebacks-recientes">
    <h2><?= $meses_nombres[$month] ?> <?= $year ?></h2>

    <div class="comeback-grid">
        <?php if (empty($comebacks)): ?>
            <p style="text-align: center; grid-column: 1/-1; padding: 2rem;">No hay comebacks registrados para este mes.</p>
        <?php else: ?>
            <?php foreach ($comebacks as $cb): ?>
                <div class="comeback-card">
                    <img src="<?= $base_url . htmlspecialchars($cb['image_url']) ?>"
                        alt="Album Cover <?= htmlspecialchars($cb['album_name']) ?>">
                    <div class="comeback-info">
                        <h3><?= htmlspecialchars($cb['song_name']) ?></h3>
                        <div class="grupo"><?= htmlspecialchars($cb['artist_name']) ?></div>
                        <div class="badges">
                            <?php if ($cb['company']): ?>
                                <span class="badge empresa"><?= htmlspecialchars($cb['company']) ?></span>
                            <?php endif; ?>
                            <?php if ($cb['is_hot']): ?>
                                <span class="badge hot">HOT</span>
                            <?php endif; ?>
                        </div>
                        <div class="extra">
                            <span class="album"><?= htmlspecialchars($cb['album_name']) ?></span> • <span
                                class="fecha"><?= htmlspecialchars($cb['release_info']) ?></span>
                        </div>
                        <div class="comeback-links">
                            <?php if ($cb['spotify_url']): ?>
                                <a href="<?= htmlspecialchars($cb['spotify_url']) ?>" target="_blank"><i
                                        class="fa-brands fa-spotify"></i></a>
                            <?php endif; ?>
                            <?php if ($cb['apple_url']): ?>
                                <a href="<?= htmlspecialchars($cb['apple_url']) ?>" target="_blank"><i
                                        class="fa-brands fa-apple"></i></a>
                            <?php endif; ?>
                            <?php if ($cb['youtube_url']): ?>
                                <a href="<?= htmlspecialchars($cb['youtube_url']) ?>" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <nav class="paginacion">
        <?php foreach ($meses_abreviados as $num => $abr): ?>
            <a href="cb_p1.php?month=<?= $num ?>" class="<?= ($month == $num) ? 'activo' : '' ?>"><?= $abr ?></a>
        <?php endforeach; ?>
    </nav>
</main>

<?php include '../../includes/footer.php'; ?>