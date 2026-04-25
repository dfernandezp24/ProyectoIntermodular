<?php
require_once '../includes/db.php';

$current_page = 'artistas';
$extra_css = 'Artistas/css/lightMode.css';
$extra_css_tablet = 'Artistas/css/lightModeTablet.css';
$extra_css_mobile = 'Artistas/css/lightModeMovil.css';
include '../includes/header.php';
?>

<div class="seleccionador">

    <a href="<?= $base_url ?>/Artistas/1Gen/1Gen.php" class="card top-left">
        <img src="<?= $base_url ?>/fotos/artSelector/HOT.jpg" alt="Foto de HOT grupo representativo de la 1ª Generación">
        <div class="card-text">
            <h3>1ª Generación</h3>
            <p>
                Grupos pioneros del K-pop,<br>
                sentaron las bases del género.
            </p>
        </div>
    </a>

    <a href="<?= $base_url ?>/Artistas/2Gen/2Gen.php" class="card top-right">
        <img src="<?= $base_url ?>/fotos/artSelector/SuperJunior.jpg" alt="Foto de Super Junior grupo representativo de la 2º Generación">
        <div class="card-text">
            <h3>2ª Generación</h3>
            <p>
                Grupos que llevaron el K-pop al mundo,<br>
                hits y coreografías icónicas.
            </p>
        </div>
    </a>

    <a href="<?= $base_url ?>/Artistas/3Gen/3Gen.php" class="card center">
        <img src="<?= $base_url ?>/fotos/artSelector/bities.jpg" alt="Foto de BTS grupo representativo de la 3º Generación">
        <div class="card-text">
            <h3>3ª Generación</h3>
            <p>
                Grupos que revolucionaron la industria,<br>
                creando alcance global y conceptos únicos.
            </p>
        </div>
    </a>

    <a href="<?= $base_url ?>/Artistas/4Gen/4Gen.php" class="card bottom-left">
        <img src="<?= $base_url ?>/fotos/artSelector/newjeans.jpg" alt="Foto de NewJeans grupo representativo de la 4º Generación">
        <div class="card-text">
            <h3>4ª Generación</h3>
            <p>
                Grupos innovadores y digitales,<br>
                mezclando tradición y modernidad.
            </p>
        </div>
    </a>

    <a href="<?= $base_url ?>/Artistas/5Gen/5Gen.php" class="card bottom-right">
        <img src="<?= $base_url ?>/fotos/artSelector/Illit.jpg" alt="Foto de Illit grupo represnetativo de la 5ª Generación">
        <div class="card-text">
            <h3>5ª Generación</h3>
            <p>
                Nuevos rostros del K-pop,<br>
                creando tendencias y futuro del género.
            </p>
        </div>
    </a>
</div>

<?php include '../includes/footer.php'; ?>
</body>

</html>
