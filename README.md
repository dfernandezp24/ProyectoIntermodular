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
Actualmente se ha completado la migración de todos los módulos principales (Inicio, Comebacks, Promociones y Artistas) a una arquitectura dinámica basada en PHP y MySQL. Se han estandarizado los estilos responsivos y el sistema de temas en todo el sitio. El proyecto cumple con todos los requisitos técnicos de seguridad y gestión de datos.

## Cumplimiento Técnico (TFC)

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
