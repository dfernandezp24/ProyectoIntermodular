<?php
require_once 'includes/db.php';

$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

session_destroy();


header("Location: " . $base_url . "/PaginaPrincipal/principal.php");
exit();
?>