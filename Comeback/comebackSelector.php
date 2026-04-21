<?php
require_once '../includes/db.php';
$current_page = 'comebacks';
include '../includes/header.php';
?>

<div class="seleccionador">
  <a href="<?= $base_url ?>/Comeback/Recientes/recientes.php" class="card top">
    <img src="<?= $base_url ?>/fotos/cbSelector/Recientes.webp" alt="">
    <div class="card-text">
      <h3>Comebacks recientes</h3>
      <p>Los comebacks más recientes del K-pop,<br>
         nuevos conceptos, sonidos y visuales.<br>
         Descubre los últimos lanzamientos en un solo lugar.
      </p>
    </div>
  </a>

  <a href="<?= $base_url ?>/Comeback/virales/virales.php" class="card left">
    <img src="<?= $base_url ?>/fotos/cbSelector/Virales.png" alt="">
    <div class="card-text">
      <h3>Comebacks virales</h3>
      <p>Los comebacks más virales del K-pop,<br>
         los que rompieron tendencias y redes.<br>
         Escenarios, canciones y momentos imposibles de ignorar.
      </p>
    </div>
  </a>

  <a href="<?= $base_url ?>/Comeback/2025/cb_p1.php" class="card bottom">
    <img src="<?= $base_url ?>/fotos/cbSelector/2025.jpeg" alt="">
    <div class="card-text">
      <h3>Comebacks 2025</h3>
      <p>Los comebacks del K-pop a lo largo de 2025,<br>
         nuevos conceptos, música y visuales del año.<br>
         Los regresos más destacados reunidos aquí.
      </p>
    </div>
  </a>

  <a href="<?= $base_url ?>/Comeback/Promociones/promociones.php" class="card right">
    <img src="<?= $base_url ?>/fotos/cbSelector/Promociones.png" alt="">
    <div class="card-text">
      <h3>Promociones</h3>
      <p>Actuaciones y promociones en programas musicales,<br>
         Inkigayo, Music Bank, M Countdown y más.<br>
         Todos los stages y momentos clave reunidos.
      </p>
    </div>
  </a>
</div>


<?php include '../includes/footer.php'; ?>
