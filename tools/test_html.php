<?php
$html = file_get_contents('https://open.spotify.com/playlist/37i9dQZF1DX5OHwEYdG9bL');
if (preg_match('/<script id="initial-state" type="text\/plain">(.*?)<\/script>/s', $html, $matches)) {
    $data = base64_decode($matches[1]);
    file_put_contents('spotify_data.json', substr($data, 0, 5000));
    echo "Found initial-state.\n";
} else {
    echo "Not found.\n";
}
