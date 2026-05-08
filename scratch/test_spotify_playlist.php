<?php
require_once 'includes/spotify_api.php';

$spotify_client_id = '122ebc1464c94029a5e41da645f6fcbc';
$spotify_client_secret = '33a92fa790c240438c468f66ed650669';

$spotify = new SpotifyAPI($spotify_client_id, $spotify_client_secret);
if ($spotify->authenticate()) {
    echo "Autenticación exitosa\n";
    $playlistId = '37i9dQZF1DX5OHwEYdG9bL';
    $playlist = $spotify->getPlaylist($playlistId);
    if (isset($playlist['items'])) {
        foreach ($playlist['items'] as $item) {
            $track = $item['track'];
            echo $track['name'] . " - " . $track['artists'][0]['name'] . "\n";
        }
    } else {
        echo "No se pudo obtener la playlist o está vacía.\n";
        print_r($playlist);
    }
} else {
    echo "Error de autenticación\n";
}
