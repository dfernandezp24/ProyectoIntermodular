<?php
require 'includes/db.php';
require 'includes/spotify_api.php';
$s = new SpotifyAPI($spotify_client_id, $spotify_client_secret);
print_r($s->getPlaylistCustom('', 'https://api.spotify.com/v1/tracks/4wlEUhiWXY4ujj9bobwmMa'));
