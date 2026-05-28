<?php
require_once '../includes/db.php';

if (isset($_SESSION['user_id'])) {
    header("Location: perfil.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_input = trim($_POST['login_input'] ?? '');
    $password = $_POST['password'] ?? '';
    $csrf_token = $_POST['csrf_token'] ?? '';

    if (!validarTokenCSRF($csrf_token)) {
        $error = 'Error de seguridad: Token CSRF inválido.';
    } elseif (empty($login_input) || empty($password)) {
        $error = 'Por favor, rellena todos los campos.';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$login_input, $login_input]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'] ?? 'user';
            header("Location: ../PaginaPrincipal/principal.php");
            exit();
        } else {
            $error = 'Usuario o contraseña incorrectos.';
        }
    }
}

$current_page = 'login';
$extra_js_local = 'Usuarios/js/app.js';
ob_start();
include '../includes/header.php';
$header = ob_get_clean();
echo str_replace($base_url . '/PaginaPrincipal/css/', $base_url . '/Usuarios/css/', $header);
?>

<main class="auth-page">
    <div class="auth-card">
        <div class="auth-header">
            <h2>Bienvenido</h2>
            <p>Inicia sesión para gestionar tus favoritos</p>
        </div>

        <?php if ($error): ?>
            <div class="alert-error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form action="login.php" method="POST" class="auth-form" autocomplete="off">
            <input type="hidden" name="csrf_token" value="<?= generarTokenCSRF() ?>">
            <div class="input-group">
                <label><i class="fa-solid fa-user"></i> Usuario o Email</label>
                <input type="text" name="login_input" required placeholder="Ej: kpopfan o fan@ejemplo.com"
                    autocomplete="off">
            </div>
            <div class="input-group">
                <label><i class="fa-solid fa-lock"></i> Contraseña</label>
                <input type="password" name="password" required placeholder="Contraseña">
            </div>
            <button type="submit" class="btn-primary">ENTRAR</button>
        </form>

        <div class="auth-footer">
            ¿No tienes cuenta? <a href="registro.php">Regístrate gratis</a>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>