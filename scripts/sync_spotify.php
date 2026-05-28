<?php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/spotify_api.php';

set_time_limit(600);
header('Content-Type: text/plain; charset=utf-8');
echo "Iniciando extracción híbrida (HTML + API individual)...\n";

$spotify = new SpotifyAPI($spotify_client_id, $spotify_client_secret);

$playlist_urls = [
    'https://open.spotify.com/playlist/37i9dQZF1DX5OHwEYdG9bL', // All New K-Pop
    'https://open.spotify.com/playlist/37i9dQZF1DX3ZeFHRhhi7Y', // WOR K OUT
    'https://open.spotify.com/playlist/37i9dQZF1DX9tPFwDMOaN1', // K-Pop Fresh
    'https://open.spotify.com/playlist/37i9dQZF1DX4FcAKI5Nhzq', // K-Pop Rising
    'https://open.spotify.com/playlist/37i9dQZF1DX6Cy4Vr7Hu2y', // Women of K-Pop
    'https://open.spotify.com/playlist/37i9dQZF1DX9tPFwDMOaN1', // K-Pop ON! (온)
    'https://open.spotify.com/playlist/37i9dQZF1EId9F7angZ9bw'  // Dance K-Pop Mix
];

$all_track_ids = [];
$unique_ids = [];

foreach ($playlist_urls as $url) {
    echo "Extrayendo IDs de: $url\n";

    $html = @file_get_contents($url);
    if (!$html) {
        echo "  -> Error al descargar el HTML.\n";
        continue;
    }

    if (preg_match_all('/href="\/track\/([a-zA-Z0-9]+)"/', $html, $matches)) {
        $count = 0;
        foreach ($matches[1] as $id) {
            if (!isset($unique_ids[$id])) {
                $unique_ids[$id] = true;
                $all_track_ids[] = $id;
                $count++;
            }
        }
        echo "  -> $count nuevos IDs únicos extraídos.\n";
    } else {
        echo "  -> No se encontraron canciones.\n";
    }
}

$top_100_ids = $all_track_ids;

echo "\nObteniendo metadatos de " . count($top_100_ids) . " canciones individualmente (esto puede tardar)...\n";

$all_tracks = [];
$popularity_base = count($top_100_ids);

foreach ($top_100_ids as $id) {
    $track = $spotify->getPlaylistCustom('', "https://api.spotify.com/v1/tracks/$id");

    if (isset($track['name'])) {
        $title_lower = strtolower($track['name']);

        if (
            strpos($title_lower, 'video') !== false ||
            strpos($title_lower, 'film') !== false ||
            strpos($title_lower, 'live') !== false
        ) {
            echo "  -> Saltando video/live: " . $track['name'] . "\n";
            continue;
        }

        $all_tracks[] = [
            'id' => $track['id'],
            'title' => $track['name'],
            'artist' => $track['artists'][0]['name'],
            'album' => $track['album']['name'],
            'image' => $track['album']['images'][0]['url'] ?? '',
            'spotify' => $track['external_urls']['spotify'] ?? '',
            'preview' => $track['preview_url'] ?? '',
            'date' => $track['album']['release_date'] ?? date('Y-m-d'),
            'popularity' => $track['popularity'] ?? $popularity_base
        ];
        $popularity_base--;
    } else {
        $error_msg = isset($track['error']['message']) ? $track['error']['message'] : "Desconocido / Token Inválido";
        echo "  -> Error obteniendo datos del ID $id (Razón: $error_msg)\n";

        if ($track === null || (isset($track['error']['status']) && $track['error']['status'] == 429)) {
            echo "     [!] IP Penalizada temporalmente por Spotify. Pausando 10 segundos...\n";
            sleep(10);
        }
    }
    usleep(500000);
}

usort($all_tracks, function ($a, $b) {
    return $b['popularity'] - $a['popularity'];
});

$filtered_tracks = [];
$seen_songs = [];
foreach ($all_tracks as $track) {
    $song_key = strtolower(trim($track['artist'])) . '|' . strtolower(trim($track['title']));
    if (!isset($seen_songs[$song_key])) {
        $seen_songs[$song_key] = true;
        $filtered_tracks[] = $track;
    } else {
        echo "  -> Filtrando duplicado de menor popularidad: " . $track['artist'] . " - " . $track['title'] . " (Popularidad: " . $track['popularity'] . ")\n";
    }
}
$all_tracks = $filtered_tracks;

try {
    $pdo->prepare("TRUNCATE TABLE virales")->execute();

    $sql = "INSERT INTO virales (ranking, song_name, artist_name, album_name, release_info, image_url, spotify_url, preview_url, popularity) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    $count = 0;
    foreach ($all_tracks as $index => $track) {
        $ranking = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
        $stmt->execute([
            $ranking,
            $track['title'],
            $track['artist'],
            $track['album'],
            $track['date'],
            $track['image'],
            $track['spotify'],
            $track['preview'],
            $track['popularity']
        ]);
        $count++;
    }

    echo "¡Éxito! Se han importado $count canciones virales a la base de datos con metadatos completos.\n";

} catch (Exception $e) {
    echo "Error en la base de datos: " . $e->getMessage() . "\n";
}
