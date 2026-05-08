<?php
require_once 'includes/spotify_api.php';

$spotify_client_id = '122ebc1464c94029a5e41da645f6fcbc';
$spotify_client_secret = '33a92fa790c240438c468f66ed650669';

$spotify = new SpotifyAPI($spotify_client_id, $spotify_client_secret);
if ($spotify->authenticate()) {
    echo "Autenticación exitosa\n";
    $trackId = '0fK7ie6XwGxQTIkpFoWkd1';
    $track = $spotify->getTrack($trackId);
    echo "Track: " . $track['name'] . " - " . $track['artists'][0]['name'] . "\n";
    echo "Preview URL: " . ($track['preview_url'] ?? 'No disponible') . "\n";
} else {
    echo "Error de autenticación\n";
}
