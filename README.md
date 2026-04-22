# Kpop-Wiki - Tu Enciclopedia K-Pop Dinámica

<img src="fotos/logo.jpeg" alt="Logo Kpop-Wiki" width="250">

<!-- Insignias -->
![Estado](https://img.shields.io/badge/estado-en%20desarrollo-yellow)
![Licencia](https://img.shields.io/badge/licencia-CC%20BY--NC--SA%204.0-blue)
![Version](https://img.shields.io/badge/version-1.0.0-green)
![Tecnología](https://img.shields.io/badge/PHP-8.x-777bb4)

---

## Índice

- [Descripción del Proyecto](#descripción-del-proyecto)
- [Estado del Proyecto](#estado-del-proyecto)
- [Funciones Principales](#funciones-principales)
- [Acceso al Proyecto](#acceso-al-proyecto)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Persona Desarrolladora](#persona-desarrolladora)
- [Licencia](#licencia)

---

## Descripción del Proyecto

**Kpop-Wiki** es una plataforma web dinámica diseñada para fans del K-Pop. El objetivo es centralizar la información sobre los últimos lanzamientos (comebacks), promociones en programas musicales y trayectorias de artistas de todas las generaciones. El sitio ofrece una experiencia premium con una interfaz fluida, gestión de datos mediante base de datos y un sistema de personalización visual con modo oscuro.

---

## Estado del Proyecto

> 🚧 **En desarrollo**  
Actualmente el proyecto cuenta con la estructura principal, el sistema de navegación dinámico, la gestión de banners y la sección de promociones con paginación funcional. Próximamente se completará la migración total de la base de datos de artistas.

---

## Funciones Principales

### Características implementadas

- **Gestión Dinámica:** Todo el contenido (banners, videos recomendados, comebacks y promociones) se sirve desde una base de datos MySQL.
- **Paginación Inteligente:** La sección de promociones carga exactamente 6 elementos por página, optimizando el rendimiento.
- **Modo Oscuro/Claro:** Sistema de temas persistente mediante JavaScript y CSS dinámico.
- **Navegación Modular:** Uso de componentes PHP (`header`, `footer`) para una consistencia total en todo el sitio.

### Aplicaciones

- Consultar los últimos videos musicales y banners de noticias.
- Seguir el calendario de promociones en programas como Inkigayo, Music Bank o M Countdown.
- Explorar artistas organizados por su generación dentro de la industria.

---

## Acceso al Proyecto

Sigue estos pasos para configurar el proyecto en tu entorno local utilizando **XAMPP**:

### 📋 Requisitos Previos

1. Tener instalado [XAMPP](https://www.apachefriends.org/) (versión compatible con PHP 8.x).
2. Tener habilitados los módulos **Apache** y **MySQL** desde el Panel de Control de XAMPP.

### 🔧 Instalación Paso a Paso

1. **Descarga de archivos:**
   Descarga este repositorio y coloca la carpeta `tfc` dentro del directorio `htdocs` de tu instalación de XAMPP. La ruta final debería ser similar a:
   `C:\xampp\htdocs\tfc`

2. **Configuración de la Base de Datos:**
   - Abre tu navegador y accede a [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Crea una nueva base de datos haciendo clic en "Nueva" y asígnale el nombre **`kpop_wiki`**.
   - Haz clic en la base de datos recién creada y ve a la pestaña **Importar**.
   - Selecciona el archivo **`database.sql`** ubicado en la raíz del proyecto y haz clic en "Continuar".

3. **Ejecución del sitio:**
   Abre tu navegador y accede a la siguiente URL para ver la página principal:
   > [http://localhost/tfc/PaginaPrincipal/principal.php](http://localhost/tfc/PaginaPrincipal/principal.php)

---

## Tecnologías Utilizadas

- **Backend:** PHP 8.x (Arquitectura basada en Includes y PDO)
- **Base de Datos:** MySQL / MariaDB
- **Frontend:** HTML5, CSS3 (Variables, Grid, Flexbox), JavaScript Vanilla
- **Diseño:** FontAwesome 6, Google Fonts (Bebas Neue, Noto Serif KR)

---

## 🛠️ Herramientas de Diagnóstico

Si encuentras problemas con la conexión a la base de datos, puedes utilizar el script de comprobación incluido:

- **Script:** `tools/check_tables.php`
- **Uso:** Accede a [http://localhost/tfc/tools/check_tables.php](http://localhost/tfc/tools/check_tables.php) para verificar que las tablas se han creado correctamente en tu entorno local.

---

## Persona Desarrolladora

- [@dfernandezp24](https://github.com/dfernandezp24) (Desarrollo y diseño principal)

---

## Licencia

Este proyecto está bajo la licencia [CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/).

---
