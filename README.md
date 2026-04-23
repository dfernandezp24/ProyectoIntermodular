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

>  **En fase de integración final**  
Actualmente se ha completado la migración de los módulos principales (Inicio, Comebacks y Promociones) a una arquitectura dinámica basada en PHP y MySQL. Se han estandarizado los estilos responsivos y el sistema de temas. La siguiente fase contempla la finalización del módulo de artistas y la validación final de la base de datos.

---

## Estructura del Proyecto

La arquitectura del sitio sigue un modelo modular para facilitar el mantenimiento y la escalabilidad:

-   **/includes**: Contiene los componentes reutilizables (`header.php`, `footer.php`) y la lógica de conexión a la base de datos (`db.php`).
-   **/PaginaPrincipal**: Directorio raíz de la interfaz principal con sus propios recursos de CSS, JS e imágenes.
-   **/Comeback**: Secciones dinámicas para la gestión de lanzamientos, con subcarpetas organizadas por categorías (Recientes, Virales, 2025, Promociones).
-   **/Artistas**: Módulos para la consulta de información organizada por generaciones.
-   **/fotos**: Repositorio centralizado de recursos multimedia del sitio.

## Funciones Implementadas

### Desarrollo Backend y Base de Datos
-   **Arquitectura Dinámica:** Implementación de consultas PDO para extraer banners, vídeos y fichas de artistas directamente desde MySQL.
-   **Sistema de Paginación:** Algoritmo en PHP para la segmentación de resultados en la sección de promociones (6 registros por página).
-   **Normalización de Datos:** Estructura de tablas optimizada para relacionar artistas, comebacks y stages.

### Desarrollo Frontend y UX
-   **Gestión de Temas (Dark/Light):** Lógica en JavaScript Vanilla que permite el intercambio de hojas de estilo en tiempo real, manteniendo la persistencia mediante `localStorage`.
-   **Diseño Responsivo:** Uso de Media Queries y Flexbox para garantizar la correcta visualización en smartphones (max-width: 600px) y tablets (max-width: 1024px).
-   **Optimización de CSS:** Estilos organizados por módulos para evitar redundancia y mejorar los tiempos de carga.

## Aplicaciones de la Plataforma

El sistema está diseñado para cubrir las necesidades informativas de la comunidad fan del K-Pop mediante:

-   **Portal de Novedades:** Visualización dinámica de los lanzamientos más recientes y noticias destacadas mediante banners gestionados desde base de datos.
-   **Calendario de Promociones:** Seguimiento detallado de las actuaciones en los principales programas musicales coreanos (Inkigayo, Music Bank, etc.).
-   **Archivo Generacional:** Base de datos histórica que permite explorar la evolución de los grupos y solistas según su generación en la industria.


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
