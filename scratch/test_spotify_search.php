<?php
require_once 'includes/spotify_api.php';

$spotify_client_id = '122ebc1464c94029a5e41da645f6fcbc';
$spotify_client_secret = '33a92fa790c240438c468f66ed650669';

$spotify = new SpotifyAPI($spotify_client_id, $spotify_client_secret);
if ($spotify->authenticate()) {
    echo "Autenticación exitosa\n";
    $results = $spotify->searchTracks('K-pop', 10);
    foreach ($results['tracks']['items'] as $track) {
        echo $track['name'] . " - " . $track['artists'][0]['name'] . "\n";
    }
} else {
    echo "Error de autenticación\n";
}
