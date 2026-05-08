<?php

class SpotifyAPI
{
    private $clientId;
    private $clientSecret;
    private $accessToken;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }


    public function authenticate()
    {
        if (isset($_SESSION['spotify_token']) && isset($_SESSION['spotify_token_expires']) && time() < $_SESSION['spotify_token_expires']) {
            $this->accessToken = $_SESSION['spotify_token'];
            return true;
        }

        $url = 'https://accounts.spotify.com/api/token';
        $auth = base64_encode($this->clientId . ':' . $this->clientSecret);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Basic ' . $auth,
            'Content-Type: application/x-www-form-urlencoded'
        ]);
        // Deshabilitar verificación SSL para entornos locales (XAMPP)
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            error_log('Error en Spotify Auth: ' . curl_error($ch));
            return false;
        }
        curl_close($ch);

        $data = json_decode($result, true);
        if (isset($data['access_token'])) {
            $this->accessToken = $data['access_token'];
            $_SESSION['spotify_token'] = $this->accessToken;
            $_SESSION['spotify_token_expires'] = time() + $data['expires_in'] - 60; // Margen de 1 min
            return true;
        }

        return false;
    }

    public function getPlaylist($playlistId)
    {
        if (!$this->accessToken && !$this->authenticate())
            return null;

        $url = "https://api.spotify.com/v1/playlists/$playlistId/tracks?market=ES";
        return $this->makeRequest($url);
    }

    public function getPlaylistCustom($playlistId, $customUrl)
    {
        if (!$this->accessToken && !$this->authenticate())
            return null;

        return $this->makeRequest($customUrl);
    }

    public function getTrack($trackId)
    {
        if (!$this->accessToken && !$this->authenticate())
            return null;

        $url = "https://api.spotify.com/v1/tracks/$trackId";
        return $this->makeRequest($url);
    }

    public function getSeveralTracks($trackIds)
    {
        if (!$this->accessToken && !$this->authenticate())
            return null;

        $ids = is_array($trackIds) ? implode(',', $trackIds) : $trackIds;
        $url = "https://api.spotify.com/v1/tracks?ids=$ids";
        return $this->makeRequest($url);
    }

    public function searchTracks($query, $limit = 10)
    {
        if (!$this->accessToken && !$this->authenticate())
            return null;

        $params = [
            'q' => $query,
            'type' => 'track',
            'limit' => (int)$limit
        ];
        $url = "https://api.spotify.com/v1/search?" . http_build_query($params);
        return $this->makeRequest($url);
    }

    private function makeRequest($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->accessToken,
            'User-Agent: KPopWikiTFC/1.0'
        ]);
        // Deshabilitar verificación SSL para entornos locales (XAMPP)
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    public static function extractTrackId($url)
    {
        if (preg_match('/track\/([a-zA-Z0-9]+)/', $url, $matches)) {
            return $matches[1];
        }
        return null;
    }
}
