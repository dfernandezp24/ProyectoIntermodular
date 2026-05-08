# Kpop-Wiki - Tu Enciclopedia K-Pop  

<img src="fotos/logo.jpeg" alt="Logo Kpop-Wiki" width="250">

<!-- Insignias -->
![Estado](https://img.shields.io/badge/estado-completado-brightgreen)
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

>  **Proyecto Finalizado y Entregado**  
Actualmente el proyecto cuenta con todos los módulos operativos (Inicio, Comebacks, Promociones, Usuarios y Artistas). Se ha implementado un sistema de seguridad robusto, sincronización con APIs externas y  diseño responsive. El código está debidamente estructurado para su mantenimiento.

## Cumplimiento Técnico 

Este proyecto ha sido desarrollado siguiendo estrictamente los requisitos técnicos exigidos para el Trabajo de Fin de Curso (TFC), garantizando los siguientes estándares de calidad y seguridad:

### 1. Base de Datos y Entidades
- **Entidades:** Uso de MariaDB/MySQL con una estructura de tablas normalizada que incluye entidades como `users`, `artists` y `comebacks`.
- **Relaciones:**
    - **1:N (Uno a Muchos):** Relación entre Artistas y sus respectivos lanzamientos (Comebacks).
    - **N:M (Muchos a Muchos):** Implementación de un sistema de favoritos donde múltiples usuarios pueden seguir a múltiples artistas mediante la tabla intermedia `user_favorites`.

### 2. Seguridad y Autenticación
- **Gestión de Sesiones:** Sistema de autenticación básica implementado con sesiones nativas de PHP para el control de acceso a áreas privadas (Perfil).
- **Hashing de Contraseñas:** Uso de los algoritmos industriales `password_hash()` para el registro y `password_verify()` para la validación de credenciales.
- **Protección CSRF:** Todos los formularios críticos (**Login, Registro, Edición de Perfil y Borrado de Favoritos**) integran **Tokens CSRF** únicos por sesión, verificados en el servidor para mitigar ataques de Cross-Site Request Forgery.
- **Prevención de Inyección SQL:** Blindaje total mediante el uso de **Sentencias Preparadas con PDO** en todas las interacciones con la base de datos que manejan datos de entrada.

### 3. Validación y Control de Errores
- **Validación de Formularios:** Implementación de validación dual:
    - **Cliente:** Uso de atributos HTML5 (`required`, `type="email"`, `minlength`).
    - **Servidor:** Lógica en PHP para el saneamiento de datos (`trim`, `htmlspecialchars`), verificación de duplicados y validación de reglas de negocio.
- **Privacidad de Trazas:** Configuración centralizada en `db.php` para evitar que errores del sistema o trazas SQL se expongan al usuario final.
- **Logging Seguro:** Los errores críticos se registran internamente mediante `error_log()` para facilitar el mantenimiento técnico sin comprometer la seguridad.

---

## Estructura del Proyecto

La arquitectura del sitio sigue un modelo modular para facilitar el mantenimiento y la escalabilidad:

-   **/includes**: Componentes reutilizables (`header.php`, `footer.php`) y núcleo de seguridad/base de datos (`db.php`).
-   **/Usuarios**: Módulo de gestión de cuentas (Login, Registro, Perfil, Logout) con lógica de edición y borrado protegida.
-   **/PaginaPrincipal**: Interfaz de bienvenida y noticias dinámicas.
-   **/Comeback**: Secciones dinámicas para la gestión de lanzamientos y promociones.
-   **/Artistas**: Catálogo de información organizado por generaciones.
-   **/fotos**: Almacén centralizado de recursos multimedia.

---

## Funciones Principales

###  Gestión de Usuario (CRUD Seguro)
- **Registro (Alta):** Creación de cuentas con validación de duplicados.
- **Login:** Autenticación segura con persistencia de sesión.
- **Perfil (Edición):** Permite al usuario actualizar sus datos personales (Nombre/Email) de forma segura.
- **Favoritos (Borrado):** Sistema interactivo para gestionar la lista de artistas favoritos con eliminación inmediata.

###  Dinamismo y Datos
- **Consultas PDO:** Extracción dinámica de información para todas las secciones del sitio.
- **Buscador Global:** Sistema de búsqueda de artistas en tiempo real conectado a la base de datos.
- **Paginación Inteligente:** Sistema de navegación para grandes volúmenes de datos en promociones y artistas.
- **Tematización Dinámica:** Cambio de modo claro/oscuro con persistencia en el navegador y soporte para rutas dinámicas en subcarpetas.
- **Integración con Spotify API:** Sistema de consumo de datos en tiempo real mediante el API de Spotify para la sección de canciones virales.

---

## Integración Avanzada con Spotify API (Arquitectura Híbrida)

El proyecto cuenta con un módulo robusto para mantener actualizada la sección de **"Canciones Virales"** sin intervención manual. Debido a las severas restricciones anti-bot de la API oficial de Spotify (bloqueos 403 Forbidden en playlists editoriales), se ha desarrollado un innovador sistema de **Sincronización Híbrida**.

### Arquitectura de Extracción
La extracción de datos se realiza en dos fases diferenciadas para garantizar estabilidad y evitar baneos:
1. **Fase de Scraping (Fuerza Bruta):** El script `sync_spotify.php` extrae directamente del HTML público de 6 playlists de Spotify oficiales los identificadores únicos (IDs) de todas las canciones disponibles (evitando así la restricción de seguridad de la API).
2. **Fase de API (Metadatos HD):** Con los IDs recolectados, el backend hace peticiones individuales (`v1/tracks/{id}`) a la API de Spotify mediante autenticación OAuth2 (*Client Credentials Flow*). Esto nos permite obtener la información oficial, las imágenes de carátulas en alta resolución y la popularidad sin ser bloqueados.
3. **Persistencia y Limpieza (TRUNCATE):** Finalmente, la base de datos se limpia completamente borrando registros obsoletos, y se realiza un volcado atómico de todas las canciones recolectadas en la tabla `virales`.

### Cómo funciona en la Web
El frontend (`virales.php`) ha sido desacoplado de la API de Spotify. En lugar de hacer lentas llamadas en tiempo real, simplemente extrae el **TOP 100** de canciones directamente desde la tabla local `virales` mediante `PDO`. Esto garantiza tiempos de carga casi instantáneos y 0% de errores en la experiencia del usuario.

### Cómo actualizar el Ranking Viral
Para refrescar la base de datos con los éxitos mundiales de Spotify, debes ejecutar el script maestro:
1. Accede a tu terminal o consola (o configúralo como un proceso Cron).
2. Ejecuta el comando: `c:\xampp\php\php.exe c:\xampp\htdocs\tfc\scripts\sync_spotify.php` (o accede vía web a la ruta si no hay restricciones de timeout).
3. El script extraerá dinámicamente **todas** las canciones (aprox. 140+), limpiará la base de datos y guardará la nueva información fresca lista para consumirse en el frontend.

---

## Acceso al Proyecto

Sigue estos pasos para configurar el proyecto en tu entorno local utilizando **XAMPP**:

###  Requisitos Previos

1. Tener instalado [XAMPP](https://www.apachefriends.org/) (versión compatible con PHP 8.x).
2. Tener habilitados los módulos **Apache** y **MySQL** desde el Panel de Control de XAMPP.

###  Instalación Paso a Paso

1. **Descarga de archivos:**
   Coloca la carpeta `tfc` dentro del directorio `htdocs` de XAMPP.
2. **Configuración de la Base de Datos:**
   - Crea una base de datos llamada **`kpop_wiki`** en phpMyAdmin.
   - Importa el archivo **`database.sql`** ubicado en la raíz del proyecto.
3. **Ejecución del sitio:**
   Accede a: [http://localhost/tfc/PaginaPrincipal/principal.php](http://localhost/tfc/PaginaPrincipal/principal.php)

---

## Tecnologías Utilizadas

- **Backend:** PHP 8.x (PDO, Sesiones, CSRF Protection)
- **Base de Datos:** MySQL / MariaDB (Normalizada, Relaciones 1:N y N:M)
- **Frontend:** HTML5, CSS3 (Custom Properties, Grid, Flexbox), JavaScript Vanilla
- **Diseño:** FontAwesome 6, Google Fonts

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
