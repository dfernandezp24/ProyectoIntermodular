<?php
require_once 'includes/db.php';
require_once 'includes/spotify_api.php';

$spotify = new SpotifyAPI($spotify_client_id, $spotify_client_secret);
if ($spotify->authenticate()) {
    echo $_SESSION['spotify_token'];
} else {
    echo "Error";
}
