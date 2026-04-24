<?php
require_once '../includes/db.php';

if (isset($_SESSION['user_id'])) {
    header("Location: perfil.php");
    exit();
}

$error = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['reg_user_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $csrf_token = $_POST['csrf_token'] ?? '';

    if (!validarTokenCSRF($csrf_token)) {
        $error = 'Error de seguridad: Token CSRF inválido.';
    } elseif (empty($username) || empty($email) || empty($password)) {
        $error = 'Todos los campos son obligatorios.';
    } elseif ($password !== $confirm_password) {
        $error = 'Las contraseñas no coinciden.';
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->fetch()) {
            $error = 'El usuario o email ya existen.';
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $hashed]);
            $success = '¡Registro completado! Ya puedes iniciar sesión.';
        }
    }
}

$current_page = 'registro';
$extra_js_local = 'Usuarios/js/app.js';
ob_start();
include '../includes/header.php';
$header = ob_get_clean();
echo str_replace($base_url . '/PaginaPrincipal/css/', $base_url . '/Usuarios/css/', $header);
?>

<main class="auth-page">
    <div class="auth-card">
        <div class="auth-header">
            <h2>Crear Cuenta</h2>
            <p>Únete a la mayor wiki de K-Pop</p>
        </div>

        <?php if ($error): ?>
            <div class="alert-error"><?= htmlspecialchars($error) ?></div><?php endif; ?>
        <?php if ($success): ?>
            <div class="alert-success">
                <?= htmlspecialchars($success) ?>
                <br><br>
                <a href="login.php" class="btn-primary"
                    style="display: block; text-decoration: none; text-align: center;">IR AL LOGIN</a>
            </div>
        <?php else: ?>
            <form action="registro.php" method="POST" class="auth-form" autocomplete="off">
                <input type="text" name="fake_user" style="display:none" aria-hidden="true">
                <input type="password" name="fake_pass" style="display:none" aria-hidden="true">

                <input type="hidden" name="csrf_token" value="<?= generarTokenCSRF() ?>">
                <div class="input-group">
                    <label>Usuario</label>
                    <input type="text" name="reg_user_name" required 
                           autocomplete="new-password" placeholder="Tu nombre de usuario"
                           readonly onfocus="this.removeAttribute('readonly');">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" required value="<?= htmlspecialchars($email ?? '') ?>"
                        placeholder="ejemplo@correo.com">
                </div>
                <div class="input-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" required minlength="6" placeholder="Mínimo 6 caracteres">
                </div>
                <div class="input-group">
                    <label>Confirmar Contraseña</label>
                    <input type="password" name="confirm_password" required placeholder="Repite tu contraseña">
                </div>
                <button type="submit" class="btn-primary">REGISTRARSE</button>
            </form>
            <div class="auth-footer">
                ¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php include '../includes/footer.php'; ?>