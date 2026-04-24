<?php
require_once '../includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrf_token = $_POST['csrf_token'] ?? '';
    if (!validarTokenCSRF($csrf_token)) {
        $error = 'Error de seguridad: Token CSRF inválido.';
    } else {
        if (isset($_POST['action']) && $_POST['action'] === 'update_profile') {
            $new_username = trim($_POST['username'] ?? '');
            $new_email = trim($_POST['email'] ?? '');

            if (empty($new_username) || empty($new_email)) {
                $error = 'Todos los campos son obligatorios.';
            } else {
                try {
                    $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
                    if ($stmt->execute([$new_username, $new_email, $user_id])) {
                        $_SESSION['username'] = $new_username;
                        $message = 'Perfil actualizado correctamente.';
                    }
                } catch (PDOException $e) {
                    $error = 'Error: El nombre de usuario o email ya están en uso.';
                }
            }
        } elseif (isset($_POST['action']) && $_POST['action'] === 'change_password') {
            $current_pw = $_POST['current_password'] ?? '';
            $new_pw = $_POST['new_password'] ?? '';
            $confirm_pw = $_POST['confirm_password'] ?? '';

            if (empty($current_pw) || empty($new_pw) || empty($confirm_pw)) {
                $error = 'Todos los campos de contraseña son obligatorios.';
            } elseif ($new_pw !== $confirm_pw) {
                $error = 'La nueva contraseña y la confirmación no coinciden.';
            } elseif (strlen($new_pw) < 6) {
                $error = 'La nueva contraseña debe tener al menos 6 caracteres.';
            } else {
                $stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
                $stmt->execute([$user_id]);
                $user = $stmt->fetch();

                if ($user && password_verify($current_pw, $user['password'])) {
                    $hashed = password_hash($new_pw, PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
                    if ($stmt->execute([$hashed, $user_id])) {
                        $message = 'Contraseña actualizada correctamente.';
                    } else {
                        $error = 'No se pudo actualizar la contraseña.';
                    }
                } else {
                    $error = 'La contraseña actual es incorrecta.';
                }
            }
        } elseif (isset($_POST['action']) && $_POST['action'] === 'remove_favorite') {
            $artist_id = (int) $_POST['artist_id'];
            $stmt = $pdo->prepare("DELETE FROM user_favorites WHERE user_id = ? AND artist_id = ?");
            if ($stmt->execute([$user_id, $artist_id])) {
                $message = 'Artista eliminado de tus favoritos.';
            } else {
                $error = 'No se pudo eliminar el artista.';
            }
        }
    }
}

// Obtener datos actualizados del usuario
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user_data = $stmt->fetch();

// Obtener lista de favoritos
$stmt = $pdo->prepare("
    SELECT a.* FROM artists a
    JOIN user_favorites uf ON a.id = uf.artist_id
    WHERE uf.user_id = ?
");
$stmt->execute([$user_id]);
$favoritos = $stmt->fetchAll();

$current_page = 'perfil';
$extra_js_local = 'Usuarios/js/app.js';
ob_start();
include '../includes/header.php';
$header = ob_get_clean();
echo str_replace($base_url . '/PaginaPrincipal/css/', $base_url . '/Usuarios/css/', $header);
?>

<main class="auth-page">
    <div class="auth-card" style="max-width: 900px; width: 95%;">
        <div class="auth-header">
            <h2>Mi Perfil</h2>
            <p>Gestiona tu cuenta y tus artistas favoritos</p>
        </div>

        <!-- Mensajes de Feedback -->
        <?php if ($message): ?>
            <div
                style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px; text-align: center; font-family: sans-serif; font-weight: bold;">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div
                style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px; text-align: center; font-family: sans-serif; font-weight: bold;">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <div style="display: flex; gap: 40px; flex-wrap: wrap;">

            <!-- SECCIÓN: EDICIÓN DE PERFIL -->
            <div style="flex: 1; min-width: 300px;">
                <h3
                    style="font-family: 'Bebas Neue', sans-serif; font-size: 28px; border-bottom: 2px solid #ffca28; padding-bottom: 5px; margin-bottom: 20px;">
                    Datos del Usuario</h3>

                <form action="perfil.php" method="POST" class="auth-form" style="gap: 15px;">
                    <input type="hidden" name="csrf_token" value="<?= generarTokenCSRF() ?>">
                    <input type="hidden" name="action" value="update_profile">

                    <div class="input-group">
                        <label>Nombre de Usuario</label>
                        <input type="text" name="username" value="<?= htmlspecialchars($user_data['username']) ?>"
                            required>
                    </div>

                    <div class="input-group">
                        <label>Correo Electrónico</label>
                        <input type="email" name="email" value="<?= htmlspecialchars($user_data['email']) ?>" required>
                    </div>

                    <p style="font-size: 14px; color: #888; font-family: sans-serif;">Miembro desde:
                        <?= date('d/m/Y', strtotime($user_data['created_at'])) ?></p>

                    <button type="submit" class="btn-primary"
                        style="padding: 10px; width: auto; font-size: 18px; margin-top: 10px;">GUARDAR CAMBIOS</button>
                </form>

                <h3
                    style="font-family: 'Bebas Neue', sans-serif; font-size: 28px; border-bottom: 2px solid #ffca28; padding-bottom: 5px; margin-top: 40px; margin-bottom: 20px;">
                    Seguridad de la Cuenta</h3>

                <form action="perfil.php" method="POST" class="auth-form" style="gap: 15px;">
                    <input type="hidden" name="csrf_token" value="<?= generarTokenCSRF() ?>">
                    <input type="hidden" name="action" value="change_password">

                    <div class="input-group">
                        <label>Contraseña Actual</label>
                        <input type="password" name="current_password" required placeholder="••••••••">
                    </div>

                    <div class="input-group">
                        <label>Nueva Contraseña</label>
                        <input type="password" name="new_password" required minlength="6"
                            placeholder="Mínimo 6 caracteres">
                    </div>

                    <div class="input-group">
                        <label>Confirmar Nueva Contraseña</label>
                        <input type="password" name="confirm_password" required
                            placeholder="Repite la nueva contraseña">
                    </div>

                    <button type="submit" class="btn-primary"
                        style="padding: 10px; width: auto; font-size: 18px; margin-top: 10px; background-color: #6c757d; border-color: #6c757d; color: white;">ACTUALIZAR
                        CONTRASEÑA</button>
                </form>

                <hr style="margin: 30px 0; border: 0; border-top: 1px solid #ddd;">

                <a href="logout.php"
                    style="color: #721c24; text-decoration: none; font-weight: bold; font-family: sans-serif; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-power-off"></i> CERRAR SESIÓN
                </a>
            </div>

            <!-- SECCIÓN: BORRADO DE FAVORITOS -->
            <div style="flex: 1.5; min-width: 300px;">
                <h3
                    style="font-family: 'Bebas Neue', sans-serif; font-size: 28px; border-bottom: 2px solid #ffca28; padding-bottom: 5px; margin-bottom: 20px;">
                    Mis Artistas Favoritos</h3>

                <?php if (empty($favoritos)): ?>
                    <p style="font-family: sans-serif; color: #666;">Aún no has añadido ningún artista a tus favoritos.</p>
                <?php else: ?>
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); gap: 20px;">
                        <?php foreach ($favoritos as $fav): ?>
                            <div
                                style="text-align: center; position: relative; background: rgba(0,0,0,0.03); padding: 15px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.05);">
                                <!-- Botón de Borrado (Formulario con CSRF) -->
                                <form action="perfil.php" method="POST" style="position: absolute; top: 5px; right: 5px;">
                                    <input type="hidden" name="csrf_token" value="<?= generarTokenCSRF() ?>">
                                    <input type="hidden" name="action" value="remove_favorite">
                                    <input type="hidden" name="artist_id" value="<?= $fav['id'] ?>">
                                    <button type="submit"
                                        style="background: none; border: none; color: #dc3545; cursor: pointer; font-size: 18px;"
                                        title="Eliminar de favoritos">
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    </button>
                                </form>

                                <div
                                    style="width: 80px; height: 80px; background: #eee; border-radius: 50%; margin: 0 auto 10px; overflow: hidden; border: 3px solid #ffca28;">
                                    <?php if ($fav['image_url']): ?>
                                        <img src="<?= $base_url ?>/<?= $fav['image_url'] ?>"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    <?php endif; ?>
                                </div>
                                <span
                                    style="font-size: 16px; font-weight: bold; font-family: 'Bebas Neue', sans-serif; letter-spacing: 1px;"><?= htmlspecialchars($fav['name']) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>