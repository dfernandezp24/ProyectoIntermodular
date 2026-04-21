-- Crear base de datos
CREATE DATABASE IF NOT EXISTS kpop_wiki;
USE kpop_wiki;

-- Tabla para el banner dinámico
CREATE TABLE IF NOT EXISTS banners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    caption TEXT,
    order_num INT DEFAULT 0
);

-- Tabla para ajustes dinámicos de la web (como el vídeo recomendado)
CREATE TABLE IF NOT EXISTS site_settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(50) UNIQUE,
    setting_value TEXT
);

-- Insertar los banners actuales
INSERT INTO banners (image_url, caption, order_num) VALUES
('/fotos/banner/banner-le-sserafim.jpg', 'Spaghetti el primer single album de Le Sserafim ya está disponible', 1),
('/fotos/banner/skzDaesang.jpg', 'Stray Kids recibe el daesang por karma', 2),
('/fotos/banner/iveMama.jpg', 'IVE recibe un premio en los MAMA en la categoría Global Trend Song', 3),
('/fotos/banner/illitNotCuteAnyMore.jpeg', 'Illit arrasa globalmente en todas las plataformas con su primer single album Not Cute Anymore', 4),
('/fotos/banner/kep1WaterBomb.jpeg', 'Kep1er sigue presente en los grandes escenarios de 2025', 5);

-- Insertar los ajustes del vídeo recomendado
INSERT INTO site_settings (setting_key, setting_value) VALUES
('recommended_video_id', 'E8i32NXMxnc'),
('recommended_video_title', 'Stray Kids "신선놀음 (DIVINE)" M/V'),
('recommended_video_heading', 'Comeback recomendado del mes');

-- Tabla para todos los comebacks (Recientes, Virales, Mensuales, etc.)
CREATE TABLE IF NOT EXISTS comebacks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artist_name VARCHAR(100) NOT NULL,
    album_name VARCHAR(100),
    release_info VARCHAR(100), -- Ejemplo: "1st Mini Album · 08-12-2025"
    image_url VARCHAR(255),
    spotify_url VARCHAR(255),
    apple_url VARCHAR(255),
    youtube_url VARCHAR(255),
    category VARCHAR(50) DEFAULT 'recientes'
);

-- Insertar comebacks recientes iniciales
INSERT INTO comebacks (artist_name, album_name, release_info, image_url, spotify_url, apple_url, youtube_url, category) VALUES
('ALLDAY PROJECT', 'ALLDAY PROJECT', '1st Mini Album · 08-12-2025', '/fotos/recientes/alldayproyect.webp', 'https://open.spotify.com/intl-es/album/2llGDqePFTgjCIxOW1RehG?si=gMiP38ZWQBucA7RHsjk2Qg', 'https://music.apple.com/us/album/allday-project-ep/1856093326', 'https://music.youtube.com/playlist?list=OLAK5uy_m3s2YrAhZg77LQ5mAoVtH_Ytk6fssCKbc&si=MY7G8XwHR2JNp30n', 'recientes'),
('RESCENE', 'Lip Bomb', '3rd Mini Album · 25-11-2025', '/fotos/recientes/lipBomb.jpg', 'https://open.spotify.com/intl-es/album/3H7MTJVprjcvlvCeQdRe1H', 'https://music.apple.com/us/album/lip-bomb-ep/1852644693', 'https://music.youtube.com/playlist?list=OLAK5uy_kZrQiqGr_bgCcTLvKpgOzIebfJRBHdFqU&si=gKCHSEeicAFflL8K', 'recientes'),
('ILLIT', 'Not Cute Anymore', '1st Single Album · 24-11-2025', '/fotos/recientes/NotCuteAnymore.jfif', 'https://open.spotify.com/intl-es/track/1k0JAiH11gHL9dc5dfQjQr?si=4a9bc742073c4f5c', 'https://music.apple.com/us/album/not-cute-anymore-single/1849105513', 'https://music.youtube.com/playlist?list=OLAK5uy_m22yyMNSqCGR5lMlu6aDGpBC9lyvnU9gM&si=e_exAVKTEOx2YcvN', 'recientes'),
('STRAY KIDS', 'Do It', 'SKZ IT TAPE (Special Album) · 21-11-2025', '/fotos/recientes/DoIt.jpg', 'https://open.spotify.com/intl-es/album/4lkJ6i3LDK8HvcU2tPWX9k?si=724c2194d0fb4fec', 'https://music.apple.com/us/album/do-it-ep/1846266203', 'https://music.youtube.com/playlist?list=OLAK5uy_nYozrF8dvixMpZLFrbNMngS1EYCfNjes0&si=Ls5jnmOEbjz00ssb', 'recientes'),
('NCT DREAM', 'Beat It Up', '6th Mini Album · 17-11-2025', '/fotos/recientes/BeatItUp.webp', 'https://open.spotify.com/intl-es/album/7jd5hUsxFPUsM0dqfpRjmp?si=1fVBZIoVQziPuXXFoIDbAg', 'https://music.apple.com/us/album/beat-it-up-ep/1849135853', 'https://music.youtube.com/playlist?list=OLAK5uy_kmoOC0j8PL4v7z-W8wwq64_jv29sWPCmE&si=HD-LswrjStZPfyWI', 'recientes'),
('GIRLSET', 'Little Miss', 'Digital Single · 14-11-2025', '/fotos/recientes/LittleMiss.png', 'https://open.spotify.com/intl-es/album/5ychqszZ89oPl6rBKSkGc6?si=E8XrjQibTficeXX7_2s0tw', 'https://music.apple.com/us/album/little-miss-single/1848461044', 'https://music.youtube.com/playlist?list=OLAK5uy_kNqTFB-Txe3nDm7MZ-pCp6RX9pikUtEJU&si=5A9aiUMSgsiPt51V', 'recientes'),
('ITZY', 'TUNNEL VISION', '11th Mini Album · 10-11-2025', '/fotos/recientes/TunnelVision.jfif', 'https://open.spotify.com/intl-es/album/7CD7NdEDOMY5Owl9MEzgRw?si=2Z2q2Ea3R1uhwZuKZkkRUQ', 'https://music.apple.com/us/album/tunnel-vision-ep/1846236584', 'https://music.youtube.com/playlist?list=OLAK5uy_nAwplpKBLvrFvJQUrR89jEkhA6EoNW8SA&si=LIQKw2STi7uODMFD', 'recientes'),
('YEONJUN', 'NO LABELS: PART 01', '1st Mini Album · 07-11-2025', '/fotos/recientes/NoLabelsPart01.jfif', 'https://open.spotify.com/intl-es/album/4tv1yPD1RAs8Zg5oOjthNF?si=IOubPBU8Qou68DfkUuWxbw', 'https://music.apple.com/us/album/no-labels-part-01-ep/1846790579', 'https://music.youtube.com/playlist?list=OLAK5uy_n4HvZHp-O-r2-ZkzmDrn4yNUC8pFTtRu4&si=bg-RR91yjaSAogAv', 'recientes');
