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
