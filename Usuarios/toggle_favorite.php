<?php
require_once '../includes/db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Debes iniciar sesión']);
    exit();
}

$user_id = $_SESSION['user_id'];
$artist_id = $_POST['artist_id'] ?? null;

if (!$artist_id) {
    echo json_encode(['status' => 'error', 'message' => 'ID de artista no proporcionado']);
    exit();
}

try {
    $stmt = $pdo->prepare("SELECT * FROM user_favorites WHERE user_id = ? AND artist_id = ?");
    $stmt->execute([$user_id, $artist_id]);
    $favorite = $stmt->fetch();

    if ($favorite) {
        $stmt = $pdo->prepare("DELETE FROM user_favorites WHERE user_id = ? AND artist_id = ?");
        $stmt->execute([$user_id, $artist_id]);
        echo json_encode(['status' => 'success', 'action' => 'removed']);
    } else {
        $stmt = $pdo->prepare("INSERT INTO user_favorites (user_id, artist_id) VALUES (?, ?)");
        $stmt->execute([$user_id, $artist_id]);
        echo json_encode(['status' => 'success', 'action' => 'added']);
    }
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error en la base de datos']);
}
