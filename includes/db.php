<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = 'localhost';
$dbname = 'kpop_wiki';
$username = 'root';
$password = '';
$doc_root = !empty($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])) : '';
$proj_root = str_replace('\\', '/', realpath(dirname(__DIR__)));
$base_url = '';
if ($doc_root && stripos($proj_root, $doc_root) === 0) {
    $base_url = substr($proj_root, strlen($doc_root));
} else {
    $base_url = '/ProyectoIntermodular';
}
$base_url = rtrim(str_replace('\\', '/', $base_url), '/');

$spotify_client_id = '7993fa2e391340f48203e931a0fdb16d';
$spotify_client_secret = 'c3e388926abb42c29ba2289b242dffb3';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Lo sentimos, ha ocurrido un problema con la conexión. Por favor, inténtalo más tarde.");
}


function generarTokenCSRF()
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validarTokenCSRF($token)
{
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}
?>