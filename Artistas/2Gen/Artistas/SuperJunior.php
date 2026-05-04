<?php
require_once '../../../includes/db.php';
$current_page = 'artistas';
$extra_css = 'Artistas/2Gen/Artistas/css/lightMode.css';
$extra_css_tablet = 'Artistas/2Gen/Artistas/css/lightModeTablet.css';
$extra_css_mobile = 'Artistas/2Gen/Artistas/css/lightModeMovil.css';
include '../../../includes/header.php';
?>

<div class="wiki-page">

  <h1>Super Junior</h1>

  <div class="wiki-top">
    <nav class="wiki-toc">
      <h2>Contenido</h2>
      <ul>
        <li><a href="#informacion">Información</a></li>
        <li><a href="#historia">Historia</a>
          <ul>
            <li><a href="#pre-debut">Pre-debut</a></li>
            <li><a href="#debut">2005: Debut 'TWINS (Knock Out)' y Album 'SuperJunior05 (TWINS)'</a></li>
            <li><a href="#permanencia">2006: Finalización de promociones, nuevo integrante y permanencia del grupo</a></li>
            <li><a href="#2007">2007: Nuevas Sub-Unidades 'Super Junior T' y 'Super Junior M' y Accidente automovilistico</a></li>
            <li><a href="#segundo">Segundo Album 'Don't Don.</a></li>
            <li><a href="#2008">2008: Primer Tour 'Super Show' y Nueva Sub-Unidad 'Super Junior-Happy'</a></li>
            <li><a href="#2009">2009: Reducción del grupo 'Salida de Han Geng' y Servicio Militar</a></li>
            <li><a href="#2010">2010: Cuarto Album 'Bonamana' Y 'Super Show 3'</a></li>
            <li><a href="#2011">2011: Nueva Sub-Unidad 'Donghae & Eunhyuk' , 'Super Show 4' , Mr Simple y Accidente.</a></li>
            <li><a href="#2012">2012: Sexto Album 'Sexy, Free & Single</a></li>
            <li><a href="#2013">2013: 'Super Show 5', Primer Album Japones 'Hero' y Ingreso al Servicio Militar 'Yesung y Heechul'</a></li>
            <li><a href="#2014">2014: Séptimo Album 'MAMACITA' y 'Super Show 6'</a></li>
            <li><a href="#2015">2015: "Devil" Album especial, Regreso oficial de Yesung y Hiatus</a></li>
            <li><a href="#2017">2017 :Regreso con 7 integrantes</a></li>
            <li><a href="#2019">2019-2021: Salida de Kangin, Time Slip, Super Show 8, 15.º aniversario y The Renaissance</a></li>
            <li><a href="#actualidad">2022-presente: The Road, Super Show 9, documental, renovación de contrato, "Show Time"</a></li>
          </ul>
        </li>
        <li><a href="#discografia">Discografía</a></li>
      </ul>
    </nav>

    <aside class="wiki-info">
      <img src="<?= $base_url ?>/fotos/Artistas/2Gen/SuperJunior.jpg" alt="Super Junior foto del grupo">
      <h2>Información del Grupo</h2>
      <ul>
        <li>Nombre: Super Junior (Internacional), 슈퍼주니어 (Corea), スーパージュニア (Japón)</li>
        <li>Origen: Corea del Sur</li>
        <li>Debut: 06 de Noviembre del 2005</li>
        <li>Fanclub oficial: E.L.F</li>
        <li>Color oficial: Azul Zafiro Perlado.</li>
        <li>Agencia: SM Entertainment</li>
        <li>Integrantes: Lee Teuk, Heechul, Ye Sung, Shin Dong, Eun Hyuk, Donghae, Siwon, Ryeo Wook, Kyuhyun</li>
        <li>Ex-Integrantes: Han Geng, Kibum, Kang In</li>
      </ul>
    </aside>
  </div>

  <main class="wiki-content">

    <section>
      <h2 id="informacion">Información</h2>
      <p>
        Super Junior (슈퍼주니어; estilizado en mayúsculas SUPER JUNIOR), también conocido como SJ o SuJu, es un grupo masculino bajo SM Entertainment y Label SJ. El grupo fue formado por el fundador de SM Entertainment, Lee Soo-man en 2005 como un grupo de 12 integrantes con miembros rotativos, pero el concepto fue abandonado después de la incorporación de Kyuhyun en 2006.
        También son apodados por los medios como los "Reyes de la Ola Hallyu" debido a sus contribuciones en la Ola Coreana. Debutaron el 6 de noviembre de 2005 en Inkigayo de SBS con su presentación debut de "Twins (Knock Out)", la canción principal de su primer álbum de estudio Super Junior 05.
        Super Junior alcanzó reconocimiento internacional tras el lanzamiento de su exitoso sencillo "Sorry Sorry" en 2009, la canción principal de su álbum más exitoso, Sorry, Sorry. A lo largo de los años, se han dividido en subunidades, apuntando simultáneamente a diferentes industrias musicales y audiencias. Los miembros también se han especializado en diferentes áreas como presentadores, anfitriones y actores. Sus éxitos y popularidad como artistas completos han llevado a otras empresas de entretenimiento coreanas a comenzar también a capacitar a sus grupos musicales en otros aspectos de la industria del entretenimiento.
        Super Junior fue el artista de K-pop con mayores ventas durante cuatro años consecutivos. El grupo ha ganado trece premios musicales de los Mnet Asian Music Awards, diecinueve de los Golden Disc Awards y es el segundo grupo en ganar el premio Artista Favorito de Corea en los MTV Asia Awards de 2008 después de jtL en 2003. En 2012, fueron nominados a "Mejor Artista Asiático" en los MTV Europe Music Awards. Ganaron los premios "Artista Internacional" y "Mejor Fandom" en los Teen Choice Awards de 2015. En marzo de 2020, Super Junior rompió su propio récord encabezando la lista de álbumes coreanos de KKBOX de Taiwán durante 122 semanas consecutivas desde 2017 con su octavo álbum Play,
        el octavo álbum repackage Replay en 2018, el noveno álbum Time Slip de 2019 y el noveno álbum repackage Timeless.
      </p>
    </section>

    <section>
      <h2 id="historia">Historia</h2>

      <h3 id="pre-debut">Pre-Debut</h3>
      <p>
        Selección de integrantes:
        <br>
        En el año 2000, Leeteuk fue recomendado por un caza-talentos para una audición de SM Entertainment Starlight Casting System, después de realizar varias pruebas, firmó el contrato y se convirtió en estudiante de la empresa. En ese mismo año, Eunhyuk fue seleccionado para ser contratado, a través de la misma audición.
        <br>
        En ese mismo año (2000), en Beijing (China), la compañía realiza su primera audición en el extranjero en la que descubre a Hangeng, quien fue elegido de entre cerca de 3000 personas. Ese mismo año, Yesung fue descubierto tras realizar un casting en Seúl. Al mismo tiempo Sungmin y Donghae ganan el primer puesto en el concurso la Mejor Apariencia Exterior, patrocinado por SM, tras el que pasaron a ser alumnos (trainees).
        <br>
        En el 2002, Heechul y Kangin fueron captados junto con Kibum, encontrado en Los Ángeles (EE.UU.).
        Siwon fue reclutado en el 2003 después de haber sido descubierto a los 16 años frente a su escuela secundaria
        En el año 2004, Ryeowook, participa en el Concurso de Canto Chin Chin en el Festival de la Juventud y es seleccionado.
        En el 2005, Shindong fue seleccionado. Ese mismo año, el último miembro, Kyuhyun, fue descubierto después de ganar el tercer lugar en el Concurso de Canto Chin Chin.
        <br><br><br>
        Proyecto Inicial:
        <br>
        A inicios del 2005, Lee Soo man anunció el proyecto de un grupo masculino de doce miembros que debutarían a final de año. Él llamó a este grupo "La puerta para el estrellato en Asia", ya que la mayoría de los miembros fueron escogidos por sus habilidades como actores, modelos y conductores de radio y televisión. Antes de debutar Heechul y Kibum ya habían sido establecidos como actores y la mayoría de los miembros ya habían tenido varias apareciones en televisión y en los medios. Inspirado en el concepto de rotación del grupo femenino japonés Morning Musume, Lee Soo man dijo que el nuevo grupo también tendría cambios en su formación, con miembros nuevos reemplazando a miembros selectos cada año para mantener al grupo en un constante cambio por gente más joven, lo cual era completamente nuevo en ese tiempo dentro de la industria del Kpop.
        <br><br>
        En el proyecto inicial el grupo tendría como nombre "O.V.E.R." ("Obey the Voice for Each Rhythm"), pero eventualmente se cambió a "Super Junior 05". "Junior" era una denominación para los jóvenes aprendices de su sistema de entrenamiento, y "super" refería al factor de haber destacado en la medida adecuada como para debutar como parte del proyecto. El '05' es el sufijo que indicaba la temporalidad de sus integrantes: ya que debutarían en el 2005 sería el año de su "generación", cuya alineación no se mantendría por más de un año. Este sistema de "graduación" daría paso a "Super Junior 06" mientras que los miembros graduados iniciarían sus carreras individuales. En su lugar, nuevos y jóvenes talentos de entre los aprendices "super juniors" de SM, harían su aparición hasta el siguiente año y así sucesivamente dotando de "rostros frescos que se mantuvieran llamativos" cada año.
      </p>

      <h3 id="debut">2005: Debut 'TWINS (Knock Out)' y Album 'SuperJunior05 (TWINS)'</h3>
      <p>
        El 6 de Noviembre del 2005, Super Junior 05 debuta en el programa “Popular Songs / Canciones Populares” de la SBS, presentándose con su primer single “TWINS (Knock Out)”.
        <br><br>
        Un CD-single estaba programado para salir la siguiente semana pero, en vez de eso el 6 de Diciembre de ese mismo año se lanzó un álbum más completo llamado SuperJunior05 (TWINS). Su álbum debut vendió 28,536 copias el primer mes tras el lanzamiento y debutó como nº3 en las listas mensuales de Diciembre de 2005.
        <br><br>
        Ese mismo mes, ellos lanzaron “Show Me Your Love” un single en colaboración con TVXQ, que se volvió el más vendido de ese mes, vendiendo 49,945 antes de finalizar el año.
      </p>

      <h3 id="permanencia">2006: Finalización de promociones, nuevo integrante y permanencia del grupo</h3>
      <p>
        En Febrero del 2006, Super Junior'05 comenzó sus presentaciones para “Miracle”, el segundo single promocional para su álbum debut. “Miracle” fue el primer single de un grupo en alcanzar el primer lugar en las listas de música online de Corea del Sur, así como también en Tailandia, recibiendo el interés del mercado internacional.
        <br><br>
        Después de que las promociones de “Miracle” llegaron a su fin, la SM Entertainment comenzó a seleccionar nuevos miembros para la segunda alineación del proyecto de Super Junior, "Super Junior'06". La compañía incluso había preparado una lista de miembros seleccionados para graduarse del grupo. Sin embargo, tras las promociones exitosas de los primeros 12 integrantes, el plan de reinicio generaba problemas a causa del fuerte apego que se desarrolló del público hacia los miembros, debido a esto ningún miembro fue sacado, y un décimo-tercero fue agregado en Mayo de 2006, Kyuhyun, quien fue descubierto a través de una competición en 2005. Al final el proyecto de alineación fue abandonado desde entonces y el el sufijo “05” fue eliminado quedando como nombre de grupo “Super Junior” hasta la fecha.
        <br><br>
        Nuevo Sencillo 'U' y Primera Sub-Unidad 'Super Junior K.R.Y'
        <br>
        Lanzaron su single “U” en línea para descarga gratuita el 25 de Mayo de 2006 en su sitio web oficial. “U” resultó ser un éxito, habiendo alrededor de 400 mil descargas durante las primeras 5 horas de haber sido lanzado para después llegar al millón, provocando el bloqueo de los servidores.
        <br><br>
        La primera sub-unidad, el trío que canta baladas Super Junior K.R.Y., debutó el 5 de Noviembre de 2006 con la presentación del tema del drama Hyena “The One I Love” en el programa Music Bank de la KBS.
      </p>

      <h3 id="2007">2007: Nuevas Sub-Unidades 'Super Junior T' y 'Super Junior M' y Accidente automovilistico</h3>
      <p>
        Una segunda sub-unidad llegó en Febrero del 2007, llamada Super Junior T . El grupo trot reveló su single “Rokkugo” el 23 de Febrero del 2007 e hizo su presentación debut en Popular Songs dos días después. <br><br>
        El segundo álbum oficial de Super Junior estaba previsto para finales de 2006, pero debido a diferentes accidentes, Don’t Don no fue lanzado hasta el 20 Septiembre del 2007. Aunque Dont Don recibió críticas mixtas de los críticos, el álbum pudo vender más de 160,000 copias para el final del año, convirtiéndose en el mejor- registro de ventas del 2007. Super Junior recibió siete nominaciones en el Festival de Música Mnet / KM 2007, ganando tres de ellas, que incluyeron Artista del Año, calificado como el más alto reconocimiento de la ceremonia, obtuvo dos reconocimientos más en el 22° Golden Disk Awards, incluido un premio Disk Bonsang (Album del año). <br><br>
        Accidente <br>
        En 2007, poco antes del primer aniversario de Kyuhyun de Super Junior, el 19 de Abril, tuvo lugar un accidente automovilístico en el que se vieron involucrados junto a él, Leeteuk, Shindong, Eunhyuk y Kyuhyun que sufrió mas daños y representantes.Ocurrió cuando un neumático delantero explotó y el auto chocó contra una valla de seguridad cuando retornaban del programa radial Super Junior Kiss the Radio show.  Durante el accidente, Leeteuk, dado que era el que más sangraba por los cortes que recibió, fue al que atendieron antes, pero él solo repetía que buscaran al maknae. Eunhyuk contó en un programa que solo podía pensar en Kyuhyun, que se acercó a él, y al verlo inconsciente solo pudo rezar y llorar a su lado.  Kyuhyun se sentaba detrás del chófer cuando ocurrió el accidente, y fue el que salió más herido, con una fractura de cadera, neumotórax debido a la fractura de costillas y contusiones faciales. <br><br>
        El doctor le informó a los padres de Kyuhyun que para curar las perforaciones de sus pulmones deberían realizar una cirugía en su cuello (traqueotomía), lo que finalizaría su carrera como cantante. El padre de Kyuhyun fue el primero en rechazar la operación, afirmando que Kyuhyun preferiría morir antes que dejar de cantar, por lo que le pidió encontrar otra manera de reparar sus pulmones.. Kyuhyun estuvo en coma durante cuatro días, y los doctores dijeron que "solo tiene el 20% de probabilidades de vivir".Hasta que llego otro medico llamado Wang Yong Pil que encontro otra manera en operarlo y que el pueda seguir cantando. Kyuhyun pasó seis días en UCI antes de poder ser trasladado a un cuarto común del hospital, luego de eso, logró volver a respirar sin necesitar la máquina que lo ayudaba. Logró volver a caminar sin ayuda luego de un mes del accidente. Kyuhyun fue dado de alta el 5 de julio de 2007, luego de 78 días.Y volvio a los ecenario despues de 5 meses.
      </p>
      <h3 id="segundo">Segundo Album 'Don't Don.</h3>
      <p>
        El segundo álbum oficial de Super Junior planeó ser lanzado para finales del 2006, sin embargo debido a un severo accidente de auto, Don't Don no fue revelado hasta el 20 de septiembre del 2007. Don't Don vendió más de 60,000 copias el primer día de lanzamiento y debutó en el primer lugar del ranking mensual por el mes de septiembre del 2007. <br><br>
        A pesar de que el álbum recibió críticas variadas, vendió más de 160,000 copias para final de año, siendo el segundo más vendido del 2007. Super Junior recibió 7 nominaciones en los MKMF (Mnet Korean Music Festival) del 2007, ganando tres de ellos incluyendo "Artista del Año", el reconocimiento más alto de la ceremonia. Super Junior ganó dos premios más en Golden Disk Awards, incluyendo el "Disk Bonsang award".
      </p>
      <h3 id="2008">2008: Primer Tour 'Super Show' y Nueva Sub-Unidad 'Super Junior-Happy'</h3>
      <p>
        El primer tour principal de Super Junior, fue Super Show, que comenzó el 22 de febrero de 2008 en Seúl. La gira abarcó tres países y se muestra en seis ciudades diferentes, entre ellas Bangkok, Shanghái y Pekín. <br><br>
        Todos los miembros de Super Junior ya habían sido colocados en uno de los sub-grupos, excepto Kibum. Super Junior-Happy consta de todos los miembros anteriores de Super Junior-T, salvo Heechul, que se sustituye por Yesung. Super Junior-Happy hizo un debut no oficial el 3 de mayo del 2008 en el Power Concert. <br><br>
        El 8 de abril del año 2008, Super Junior se convirtió en el primer grupo de K-Pop en crear una sub-unidad que se enfocara en otro idioma y promocionara en otro país: China. Sin embargo antes de debutar SM Entertainment anunció que el grupo contaría con dos nuevos integrantes, Zhou Mi y Henry, quienes no contaron con el apoyo de los fans coreanos por creer que esto era una forma de volver al antiguo formato de generaciones de SuperJunior05 en el que los integrantes serían reemplazados despues de cierto periodo de tiempo. Debido a la fuerte controversia SM decidió integrarlos como miembros exclusivos de la sub unidad Super Junior M y no como miembros oficiales de Super Junior. <br><br>
        Los días 8 y 9 de Julio del año 2008, Super Junior celebró su primer fan meeting en Japón, en el Nippon Budōkan de Tokio, como una celebración para la gran inauguración de su Japanese Homepage, que se puso en marcha el 1 de abril de ese mismo año. <br>
      </p>
      <h3 id="2009">2009: Reducción del grupo 'Salida de Han Geng' y Servicio Militar</h3>
      <p>
        El 21 de diciembre del 2009, fuentes chinas confirmaron la demanda presentada por el miembro de Super Junior Han Geng y líder del sub-grupo Super Junior M <br><br>
        El 10 de mayo del 2010, a las 10 de la mañana, fue lanzado el cuarto álbum de Super Junior, titulado "미인아 (BONAMANA)". Sin embargo en él participaron sólo 10 de sus integrantes, los mismos que aparecen en el MV. <br><br>
        El 5 de julio del 2010, Kangin ingresó a realizar su servicio militar, mientras que el 1 de Septiembre del 2011 fue Heechul quien se en listó para sus 2 años de servicio. <br><br><br>
        Tercer Album 'Sorry Sorry' y 'Super Show 2'<br>
        El grupo lanzó su tercer álbum estudio Sorry, Sorry el 12 de marzo del 2009. Fue el primer álbum del grupo en debutar en el puesto 1 del ranking Hanteo vendiendo más de 29.000 copias en el primer día. Después de solo un mes el álbum se convirtió en el más vendido del año 2009, vendieron al rededor de 250.000 copias en Corea del Sur. Así mismo, se convirtió en el álbum coreano más vendido en Taiwán, Tailandia, China y Filipinas, en donde también recibió el crédito de ser el primer álbum coreano en llegar al puesto 1 en los rankings de música de ese país. <br>
        El álbum titulado Sorry, Sorry se convirtió e un hit instantáneo, ganando un total de 10 números #1 por 10 semanas consecutivas en Corea del Sur, y rompió un récord al quedar en el primer lugar por 37 semanas en el ranking de sencillos de Kpop en Taiwán. Sorry, Sorry logró éxito nacional e internacional, ganando varios premios en el #24 Golden Disk Awards, incluyendo el gran premio "Disk Daesang" (Disco del año). <br>
        Después del éxito de Sorry, Sorry, Super Junior comenzó su segundo tour por Asia llamado "Super Show 2", el 17 de julio del 2009, en Seúl.
      </p>
      <h3 id="2010">2010: Cuarto Album 'Bonamana' Y 'Super Show 3'</h3>
      <p>
        Con solo los 10 miembros restantes, Super Junior lanzó su cuarto álbum estudio Bonamana, en mayo del 2010. Aunque el álbum no recibió buenas críticas como Sorry, Sorry, vendió más que éste con más de 300.000 copias en Corea del Sur. El álbum se mantuvo en el puesto 1 del ránking taiwanés, por 61 semanas rompiendo su propio récord que habían tenido antes. <br><br>
        Para promocionar el álbum, Super Junior tuvo su tercer concierto por Asia, "Super Show 3", durante el 2010 y el 2011, agotando las entradas en cada una de las paradas. En febrero 2011, Super Junior lanzó una película en 3D de el tour, Super Show 3 3D, en todos los cines CGV y Primus. La película debutó en el puesto 6 de los rankings y se convirtió en la película 3D mejor vendida de Corea del Sur. Después de sus presentaciones en Japón, Super Junior lanzó Super Junior Japan 'Super Show 3, un álbum conmemorativo, en febrero de 2011, debutando en el puesto en el ranking de Tower Records por ventas vía online. La versión en DVD de Super Junior Japan Limited Special Edition – Super Show 3 también debutó en el puesto 2 mientras que la versión em CD debutó en el puesto 10. El álbum también se mantuvo en el puesto 3 en el ranking diario de Oricon por dos días consecutivos y en el puesto 6 en el ranking semanal de Oricon. Tras el éxito comercial en Japón, el grupo lanzó la versión en japonés de Bonamana como sencillo, que debutó en el puesto 2 del ranking diario de Oricon tras vender más de 59.000 copias en la primera semana de lanzamiento. Sin embargo, SM Entertainment no lanzó el sencillo como una forma de debut oficial y señalaron que debutarían en Japón posteriormente. <br><br>
        Entre las paradas del Super Show 3, el grupo participó del tour mundial de SMTOWN Live World Tour '10 y se presentaron en Los Ángeles, París, Tokio y Nueva York junto a otros artistas que están bajo SM Entertainment, presentándose fuera de Asia por primera vez. Las presentaciones de Super Junior fueron bien recibidos por los medios y recibieron honores como "Íconos nacionales de la cultura pop coreana" por su rol de expandir la onda Hallyu. También recibieron un premio del Ministro de Cultura, Deportes y Turismo en los Pop Culture Art Awards. Aparecieron en el programa de CNN "Talk Asia" en donde hablaron de su popularidad y estrategias para avanzar en la industria musical mundial. El grupo alcanzó reconocimiento fuera de Asia, notablemente en Europa, América del Norte y América del Sur. El ranking de los 30 hombres más sexys del mundo de Perú incluyó a todos los miembros en la lista. Tuvieron entrevistas exclusivas con revista de Eslovenia e Irán y fueron seleccionados por los fans en Brasil como el artista que más querían que visitara el país. Tanto TV Azteca de México como la BBC del Reino Unido nombraron a Super Junior como el icono líder del efecto Hallyu.
      </p>
      <h3 id="2011">2011: Nueva Sub-Unidad 'Donghae & Eunhyuk' , 'Super Show 4' , Mr Simple y Accidente.</h3>
      <p>
        En el Super Show 4 llevado a cabo entre los días 4 y 19 de Noviembre del 2011, fue presentada por primera vez, la canción "Oppa, Oppa" por dos de sus miembros, Super Junior D&E. Un mes más tarde, S.M. Entertainment anunció que promocionarían la canción en varios shows. <br><br>
        Super Junior D&E lanzaron su single digital llamado '떴다 오빠 (Oppa, Oppa)' el día 16 de Diciembre de 2011, a través de diferentes portales coreanos de música, presentándola ese mismo día en Music Bank. <br><br>
        Mr. Simple debutó en el puesto 1 del ranking coreano Gaon tras vender 287,427 copias. El álbum se mantuvo en el número uno del ranking por cuatro semanas y vendió más de 441.000 copias en Corea del Sur para octubre del 2011. El álbum también llegó al puesto 3 en el ranking "World Albums" de Billboard y llegó al puesto 17 en el ranking de álbumes de Oricon en Japón. El sencillo que da título al álbum "Mr. Simple" ganó once premios en los programas de música durante la promoción del álbum. En septiembre del 2011, Heechul dejó el grupo temporalmente para cumplir con el servicio militar obligatorio. Super Junior comenzó su Tour mundial, "Super Show 4" en noviembre del 2011. El segundo sencillo japonés del grupo, "Mr. Simple" fue lanzado el 7 de diciembre en Japón a pesar de que la empresa no lo reconoció como su debut oficial en el país. Fue el primer sencillo japonés de Super Junior en alcanzar el primer puesto del ranking diario de Oricon. <br><br>
        En el 2011, Super Junior fue seleccionado como las estrellas del Hallyu con los que a las fans internacionales les gustaría salir en una cita. En una encuesta de Arirang en donde participaron 188 países, Super Junior también salió escogido como el artista más querido. <br><br>
        Kyuhyun a vuelto a tener un accidente de coche, ha ocurrido en la madrugada del día de hoy sobre las 5:00 de la madrugada cuando se dirigia a Gwangju para actuar en la obra en la que participa desde el pasado mes de enero, “Los tres mosqueteros“. <br>
        Al parecer se encontraba cerca de Gwangju, en una pequeña ciudad de nombre Jeong Eub, cuando su coche ha sido golpeado por un camión. Rápidamente se le ha trasladado al hospital dónde sólo se le han encontrado contusiones en un brazo y en una pierna. <br>
        La SM Entertainment ha declarado lo siguiente: “Sobre las 5 a.m. del viernes, Kyu Hyun ha sido trasladado a un hospital local después de chocar contra un camión al cambiar de carril. Ha sido diagnosticado de contusiones en un brazo y una pierna, pero no se han encontrado daños estructurales en los huesos.
      </p>
      <h3 id="2012">2012: Sexto Album 'Sexy, Free & Single</h3>
      <p>
        Comenzando el tercer trimestre del 2012 fue lanzado su sexto álbum titulado 'Sexy, Free & Single'. En el mercado fue lanzado el 4 de julio pero se podía adquirir digitalmente desde el 1 de Julio (KST), día en que fue liberado el vídeo musical y que en su primer día recibió alrededor de 2 millones de visitas. Cabe destacar que este álbum contó con el regreso de Kangin, quien terminó en abril su servicio militar después de 21 meses. <br><br>
        En agosto de 2012 se lanzó la versión repackage del sexto álbum que fue titulada ‘Spy’ con su vídeo musical correspondiente y poco después, en este mismo mes, se reveló la versión japonesa del vídeo de Sexy, Free & Single que sería su cuarto single japonés. <br><br>
        El 30 de octubre de 2012 el líder del grupo Leeteuk se despidió de todos y comenzó su servicio militar, siendo el tercer miembro en enlistarse después de Kangin y Heechul. <br><br>
        El 2 de noviembre de 2012 estuvieron presentes en el Music Bank en Chile junto a los grupos CNBlue, After School, MBLAQ, Rania, y Davichi. Esta fue la primera vez de Super Junior en un país latinoamericano. <br><br>
        Según el ranking Gaon el álbum Sexy, Free & Single registró más de 480.000 copias vendidas durante el segundo semestre del año, es decir, de julio a diciembre, lo que puso a Super Junior en el primer puesto en ventas físicas del 2012.
      </p>
      <h3 id="2013">2013: 'Super Show 5', Primer Album Japones 'Hero' y Ingreso al Servicio Militar 'Yesung y Heechul'</h3>
      <p>
        La principal actividad del grupo para el 2013 fue el tour mundial Super Show 5, el cual dio inicio en Corea del Sur el 23 y 24 de marzo. Seguidamente pasaron por Sudamérica, siendo este uno de los nuevos destinos agregados a este tour. Exactamente estuvieron en Brasil, Argentina, Chile y Perú, para luego seguir sus presentaciones por diferentes países de Asia. Meses después regresaron al continente americano para dar su primer show en México y luego en Londres, que fue el único país europeo incluido en la gira. Los chicos contaron con una gran participación en cuanto a la escogencia de canciones, vestuario, entre otras cosas. <br><br>
        El 6 de mayo Yesung inició el servicio militar el cual durará 2 años. Por políticas del ejército él no podía abandonar el país cierto tiempo antes de su enlistamiento, por lo cual no pudo estar presente en las presentaciones del Super Show 5 en Sudamérica y demás. <br><br>
        El 24 de julio lanzaron su primer álbum japonés llamado "Hero", el cual se posicionó #1 en el ranking diario Oricon, registrando 52.532 copias vendidas. Para el sexto día ya había alcanzado las 100.000 copias. <br>
        El 8 de agosto lanzaron "Super Show 4 in Seoul - Super Junior World Tour 3D" como su segunda película en 3D sobre su tour oficial, en diferentes cines de Corea del Sur. Su primera película fue el Super Show 3 3D, lanzada en febrero del 2011. <br>
        El 30 de agosto se dio por terminado el servicio militar de Heechul, quien se ha ido integrando a las actividades del grupo desde el 26 de septiembre con un fanmeeting en Japón. <br>
        El 11 de diciembre lanzaron su quinto sencillo japonés llamado "Blue World" el cual se posicionó #2 en el ranking diario Oricon, registrando 46.968 copias vendidas. Para el tercer día había alcanzado 63.340 copias.
      </p>
      <h3 id="2014">2014: Séptimo Album 'MAMACITA' y 'Super Show 6'</h3>
      <p>
        El inicio del 2014 marcó el cierre de la gira "Super Show 5" que contó con alrededor de 450.000 fans durante 28 fechas en diferentes países de Asia, América y Europa. Su último concierto fue el 22 de febrero en Beijing, siendo éste el show #97 de toda la gira de conciertos "Super Show", gira que acumuló un total de 1.35 millones de audiencia hasta ese momento. <br><br>
        El 29 de julio se dio por terminado el servicio militar del líder Leeteuk, quien quiso una salida del ejército tranquila, sin ningún evento especial. A cambio de esto llevo a cabo un fanmeeting para saludar a sus fans. Su primera aparición de vuelta a en los escenarios fue en el SMTown en Seúl (Corea del Sur) el 15 de agosto. <br><br>
        El 2014 también marca el regreso de Super Junior después de más de 2 años de pausa en el ámbito musical surcoreano. Esta vez su regreso fue con el álbum titulado “MAMACITA”. El vídeo de la canción principal fue lanzado el 28 de agosto y logró obtener más de 2 millones de visitas en su primer día de lanzamiento. El 29 de agosto se lanzó digitalmente en los sitios de música online coreanos y el 1 de septiembre se lanzó físicamente. En sus primeras semanas el álbum lideró charts semanales en Corea (Hanteo y Sinnara Records), Hong Kong (KKBOX) y Taiwán (Five Music). En iTunes el álbum estuvo #1 en países como: Hong Kong, Thailanda, Filipinas y Singapur, #2 en Japón y Malasia y #5 en México. Al finalizar el mes de septiembre el álbum logró registrar 237,646 copias vendidas según el ranking Gaon. <br><br>
        La versión repackage del 7o álbum, renombrada como ‘Edición Especial’, fue titulada “This is Love”. El 23 de octubre se lanzó el álbum en formato digital mientras que el 27 de octubre se lanzó el álbum físico y en tan solo unos pocos días para acabar el mes logró registrar 114,216 copias vendidas para el mes de octubre según el ranking Gaon. Además ésta versión especial contó con 2 vídeos musicales: “This is Love” y “Evanesce”, siendo de alguna manera el uno la contraparte del otro. <br><br>
        Por otro lado la nueva gira mundial "Super Show 6" inició en septiembre de 2014. Su primera parada como es costumbre fue en Seúl (Corea del Sur) del 19 al 21 de septiembre. Aunque inicialmente sólo lanzaron 2 fechas, agregaron una más dada la alta demanda de boletería, puesto que se vendieron en su totalidad en menos de 10 minutos. Esa nueva fecha agregada marcó un hecho importante ya que lograron realizar su show #100 convirtiéndose en el primer grupo surcoreano en realizar 100 conciertos en una gira mundial. <br><br>
        El 13 de noviembre Kyuhyun debutó como solista con su álbum titulado "광화문에서 (At Gwanghwamun)". El álbum fue muy bien recibido en Corea y estuvo liderando todas las listas online surcoreanas. <br>
        Al finalizar el año se dio a conocer que el álbum “Mamacita” + su edición especial “This is Love” registraron más de 400 mil copias vendidas según el ranking Gaon.
      </p>
      <h3 id="2015">2015: "Devil" Album especial, Regreso oficial de Yesung y Hiatus</h3>
      <p>
        Se suponía que Yesung terminaría su Servicio Militar Obligatorio el 5 de Mayo pero ese fue un día festivo en Corea por lo que termino oficialmente el 4 de Mayo, su regreso al escenario fue con la gira de Super Junior KRY en Japón, pero en Corea fue en el Super Show 6 Encore. Si bien Yesung había participado del Álbum número 7 de Super Junior, solo pudo hacerlo vocalmente ya que no se le permitía promocionar junto con el grupo, por lo cual el nuevo Album Devil marcaría su regreso a los escenarios. <br><br>
        Durante el "Super Show 6" Encore se presentan 4 de las canciones del nuevo álbum incluidas " Devil", "Dont wake me up", "Allright" y "We can" el 11 y 12 de Julio, siendo los fans los primeros en escuchar las canciones. <br>
        El 15 de Julio de 2015 Super Junior realiza una conferencia de prensa en el SMTOWN COEX Artium para anunciar el lanzamiento oficial de su Album "Devil". <br>
        Ese mismo día SM lanza el vídeo musical en su canal de Youtube. El 16 de Julio la versión física de Devil es lanzada , este Álbum es para conmemorar los 10 años del grupo, en una forma de agradecimiento hacia los fans que han acompañado al grupo durante todo este tiempo. <br><br>
        Super Junior comienza sus promociones el 16 de Julio en M!Countdown, presentado "Devil" y "Dont wake me up" <br>
        Se ha confirmado recientemente que habrá una segunda parte de el Album especial "Devil",Llamado "Magic" el album contiene 4 canciones. Sera Lanzado el día 16 de septiembre. <br>
        El día 5 de Diciembre a las 10:15 am KST, SM Ent. declaro oficialmente a Super Junior en Hiatus de 3 años, ya que la mayoría de sus integrantes se enlistaron al servicio militar obligatorio este año, y los restantes lo harán el siguiente. El grupo retomará actividades a mediados o finales de 2018 después de cumplir con su servicio militar obligatorio, por lo tanto los miembros enlistados en el ejercito ya no se consideran miembros inactivos, pues todo el grupo esta en hiatus.
      </p>
      <h3 id="2017">2017 :Regreso con 7 integrantes</h3>
      <p>
        Se confirmo en la primera mitad del 2017 que el grupo haría comeback en Noviembre del mismo año con un álbum completo. <br>
        El 24 de mayo de 2016, Kangin se vio involucrado en un accidente de auto en el cual chocó contra una columna de luz y abandonó la escena luego del incidente. A la mañana siguiente, se presentó en la estación de policía y declaró saber que había golpeado algo pero no sabía qué. Se confirmó que su tasa de alcohol en sangre era de 0.05 cantidad suficiente para que le suspendan la licencia de conducir. <br><br>
        SM declaro : “Somos SM Entertainment. Es cierto que Kangin tuvo un accidente por conducción ebria. Kangin contactó con la policía por el accidente y formó parte de la investigación a la hora acordada. Kangin está profundamente arrepentido por sus actos y cesará su agenda relacionada con el entretenimiento para tomarse un tiempo de reflexión. Una vez más, les pedimos disculpas por preocuparles”. <br><br>
        Unos días después del incidente fans de Super Junior iniciaron una petición para que Kangin abandone el grupo : “Ya que es cierto que los desagradables actos de Kangin dañarán las actividades en grupo de Super Junior, esta petición es para que Kangin deje de promocionar junto a Super Junior”. “Previamente Kangin fue castigado por otro incidente por conducción bajo los efectos del alcohol en 2009. Él faltó a un entrenamiento obligatorio de reserva en 2015 y ahora de nuevo ha cometido otro incidente del mismo tipo. Vemos que es un acto fraudulento hacia los fans e integrantes quienes le creyeron y apoyaron a pesar de los casos previos”. <br><br>
        Luego de darse a conocer la noticia del comeback varias comunidades coreanas de fans de Super Junior publicaron declaraciones exigiendo que Sungmin no fuera parte del mismo e incluso que fuera sacado del grupo debido a las controversias entorno a su matrimonio. <br>
        “Cuando había informes sobre su relación, la mayoría de los fans lo felicitaron. Pero cuando los fans le pidieron información sobre los rumores matrimoniales, ignoró esas peticiones. Fue cuando los fans se enteraron de su matrimonio a través de la prensa que decidieron darle la espalda”  “Ya no apoyamos a Sungmin, quien ha mostrado actitudes y comportamientos irrespetuosos hacia los fans, y vamos a boicotear todas sus actividades como una celebridad. Creemos que Sungmin siendo parte de Super Junior afectará sus actividades en el futuro y le pedimos que detenga sus actividades como miembro de Super Junior”. <br><br>
        SM confirmo que Sungmin y Kangin no serian parte de este comeback y que el grupo haría un regreso con 7 miembros. <br>
        El 27 de septiembre el sitio oficial de Super Junior lanzo una cuenta atrás que finaliza el 6 de Noviembre y anunciaron esta como la fecha de su regreso. <br>
        Se anuncio que el grupo iniciaría una gira mundial bajo el nombre "Super Show 7" a partir de diciembre con Seul como su primera parada. A finales de Septiembre el grupo abrió su canal de Vapp en el cual seria lanzado su reality show “SJ Returns – Super Junior Real Comeback Story.” <br>
        A comienzos de Octubre Siwon se vio envuelto en una controversia debido a que el perro de su familia mordió a un vecino y este falleció 6 días después a causa de la herida, luego del incidente Siwon publico una disculpa para la familia. <br>
        A pesar de que la familia del fallecido acepto las disculpas y declaro que no iban a iniciar acciones legales Siwon no participara en las promociones televisivas del álbum pero si aparecerá en el vídeo musical de las dos canciones principales. <br>
        El 18 de Octubre se revelo que el nombre del álbum seria "Play" el cual constara de 10 canciones. El 31 de Octubre se revelo la canción pre lanzamiento del álbum compuesta por Donghae "One more chance" <br><br><br>
        2018: <br>
        SM STATION 2, álbum repackaged “Replay” <br>
        El grupo anunció un regreso para abril del 2018 con el álbum repackaged para “Play”, el cual fue revelado en noviembre de 2017. El álbum terminará la trilogía “Play-Pause-Replay y será revelado el 12 de abril a las 6 p.m. KST; como pre-lanzamiento para el álbum se lanzó la canción número 50 de SM STATION 2 “Super Duper” se reveló por primera vez durante su gira mundial “Super Show 7” en Seúl, que se celebró del 15 al 17 de diciembre del año anterior. El líder, Leeteuk, participó en la composición de la canción y la escritura de la letra. <br><br>
        El 18 de marzo del 2018 el grupo liberó sus primera imagen promocional a través del sitio web oficial de SM, así como en todas su SNS oficiales (Instagram, Facebook y Twitter), también anunció que la canción principal de “Replay”, se llamará “Lo Siento” explicándola como "una canción de género pop latino que trae una melodía adictiva al ritmo tropical, y la armonía rítmica de los sonidos del piano eléctrico, en una variedad de sonidos de guitarra impresionante". También se dió información de que  incluirán otras tres nuevas canciones, “Me & U”, “Super Duper” y “Hug” junto con las canciones anteriores de play dando un total de 14 canciones. <br><br>
        Comeback con su primer Mini-Álbum Especial ONE MORE TIME <br>
        El 17 de septiembre de 2018, Super Junior lanzó el primer teaser para el álbum, junto con su título y fecha de lanzamiento. Este es el primer lanzamiento del grupo desde que Ryeo Wook regresó de su servicio militar. La canción principal, "One More Time" es un género pop latino. El álbum contiene cinco canciones, e incluye a REIK y Leslie Grace <br>
        En julio de 2018, Heechul anunció en un video en vivo de Weibo que no participaría en las actividades del álbum para continuar la recuperación. Sin embargo, junto con el lanzamiento de su foto teaser, Label SJ anunció que Heechul participaría en la grabación, pero no en las promociones de álbumes
      </p>
      <h3 id="2019">2019-2021: Salida de Kangin, Time Slip, Super Show 8, 15.º aniversario y The Renaissance</h3>
      <p>
        El 7 de mayo de 2019, Kyuhyun cumplió con su alistamiento obligatorio, marcando el final de los servicios militares de Super Junior. El 11 de julio, Kangin dejó voluntariamente Super Junior, aunque mantiene su contrato con SM y Label SJ. El 12 de julio de 2019, Super Junior llevó su gira mundial Super Show 7S a King Abdullah Sports City como parte del festival Jeddah Season, convirtiéndose en el primer acto asiático y de K-Pop en realizar un concierto en solitario en Arabia Saudita. Las subunidades Super Junior-K.R.Y y Super Junior-D&E se presentaron en el festival el 13 de julio. <br><br>
        La alineación de nueve miembros de Super Junior lanzó su noveno álbum de estudio, Time Slip, el 14 de octubre de 2019, con Sungmin teniendo actividades personales fuera del grupo mientras tanto.Detuvieron temporalmente las presentaciones y la promoción debido a la muerte de su compañera de sello Sulli.
        El álbum está respaldado por cuatro sencillos de prelanzamiento, "Show", "Somebody New", "The Crown" y "I Think I", y el sencillo principal "Super Clap". El 12 de octubre, el grupo se embarcó en su octava gira antes del lanzamiento de su álbum, Super Show 8: Infinite Time, comenzando en Seúl, Corea del Sur.
        El 20 de octubre, Super Junior reanudó sus actividades apareciendo en Inkigayo para interpretar su sencillo principal "Super Clap".Sin embargo, Heechul no participó en las promociones debido a su lesión.[125] El álbum también ganó el primer lugar en los programas musicales semanales M! Countdown y Music Bank. Time Slip recibió su certificación de álbum de platino el 12 de diciembre de 2019 <br><br>
        Lanzaron su segundo EP japonés, I Think U el 29 de enero de 2020, que rápidamente subió al número uno en Oricon Daily Albums Chart.En mayo de 2020, se anunció que Super Junior encabezaría un concierto en línea en vivo: el sexto concierto organizado conjuntamente por SM Entertainment y Naver como parte de la primera serie de conciertos en línea de alta tecnología del mundo Beyond Live. Este fue el primer concierto de Super Junior después de la cancelación de varias fechas del Super Show 8 debido al impacto de la pandemia de COVID-19, y se organizó como parte de un proyecto de actividades en 2020 para celebrar los 15 años desde el debut del grupo.
        El concierto en vivo se llevó a cabo el 31 de mayo y Super Junior tocó en vivo para una audiencia de más de 123.000 personas en todo el mundo. Los ingresos del concierto se estimaron en más de 60 mil millones de wones. Cuando terminó, el video del concierto principal, así como las cámaras de los miembros individuales, recibieron un total de 2.8 mil millones de corazones en Vlive, el récord más alto hasta la fecha de seis conciertos dentro de la serie Beyond Live. Durante el concierto, el hashtag #SUPERJUNIOR_BeyondLIVE' fue tendencia primero en 13 países y territorios de todo el mundo repartidos por Asia, Sudamérica y Oriente Medio.
        Durante el concierto, se tocaron canciones del grupo y sus subunidades. El concierto también marcó la primera presentación en el escenario de "Home", la nueva canción inédita de la subunidad Super Junior-K.R.Y. de su primer álbum coreano desde el debut de la subunidad en 2006, que se lanzó el 8 de junio de 2020. <br><br>
        Super Junior tenía previsto lanzar su décimo álbum de estudio, The Renaissance, en diciembre de 2020. El 6 de noviembre de 2020 se lanzó un sencillo de prelanzamiento titulado "The Melody" para celebrar el 15.º aniversario del grupo. En el mismo mes, el grupo firmó con una agencia con sede en EE. UU., ICM Partners, para que los representara en otras regiones además de Asia.
        El 10 de diciembre, se anunció que el lanzamiento de su álbum se retrasaría hasta enero de 2021 para mejorar la calidad del álbum. Mientras tanto, Super Junior dio a conocer un nuevo sencillo inédito de su álbum durante los The Fact Music Awards de 2020 el 12 de diciembre. El 8 de enero, se anunció que la nueva fecha de lanzamiento del álbum sería el 16 de febrero. Sin embargo, el 1 de febrero, se anunció que la fecha de lanzamiento del álbum se retrasó nuevamente hasta el 16 de marzo <br><br>
        Por otro lado, también lanzaron un álbum recopilatorio japonés el 27 de enero de 2021, en celebración de su 15º aniversario. El álbum, Star fue lanzado bajo su sello japonés Avex Trax y solo contó con dos temas nuevos, "Star" y "Coming Home". El álbum fue bien recibido, alcanzando el puesto número 3 en Oricon Daily Albums Chart el día de su lanzamiento, y el número 5 en Oricon Weekly Albums Chart.
      </p>
      <h3 id="actulidad">2022-presente: The Road, Super Show 9, documental, renovación de contrato, "Show Time"</h3>
      <p>
        El 28 de febrero de 2022, Super Junior lanzó un álbum sencillo especial titulado "The Road: Winter for Spring". El 13 de junio, Super Junior anunció su primer volumen del undécimo álbum de estudio The Road: Keep on Going, que se lanzó el 12 de julio. El 15 de julio, el grupo se embarcó en su novena gira antes del lanzamiento de su álbum, Super Junior World Tour - Super Show 9 : Road, comenzando en Seúl, Corea del Sur.
        El segundo volumen, titulado The Road: Celebration, fue lanzado el 15 de diciembre.El 27 de diciembre, Super Junior anunció el lanzamiento de su undécimo álbum de estudio, The Road, el 6 de enero de 2023. El álbum contenía una compilación de pistas de sus tres lanzamientos de álbumes anteriores, incluidos "The Road: Winter for Spring", The Road: Keep on Going y The Road: Celebration. <br><br>
        El 18 de enero de 2023, Super Junior lanzó un documental titulado Super Junior: The Last Man Standing en Disney+. El documental mostró la historia del grupo, con los miembros compartiendo sus pensamientos y emociones internas a través del documental.  El 14 de julio, SM Entertainment anunció que Donghae, Eunhyuk y Kyuhyun decidieron no renovar sus contratos con la agencia, pero continuarán promocionando con el grupo, mientras que los miembros restantes del grupo renovaron sus contratos.
        Super Junior-LSS, la sexta subunidad de Super Junior formada por los miembros Leeteuk, Shindong y Siwon, celebró su primer fanmeeting en Japón el 30 de noviembre y el 1 de diciembre de 2022. La subunidad lanzó su primer sencillo japonés, titulado "Close The Shutter" el 5 de julio de 2023, justo antes de su fanmeeting en Japón del 7 al 8 de julio.
        El 4 de noviembre, el grupo celebró una reunión de fans para celebrar su 18.º aniversario. El evento contó con la participación de los nueve miembros activos del grupo y se transmitió en vivo para una audiencia internacional. <br><br>
        El 8 de mayo de 2024, SM Entertainment anunció que Super Junior lanzaría un sencillo en el segundo trimestre del año. El 7 de junio, el grupo anunció que lanzarían el sencillo digital "Show Time" el 11 de junio.
      </p>
    </section>

    <section class="discografia">
      <h2 id="discografia">Discografía</h2>

      <h3>SuperJunior05 (Twins)</h3>
      <ul>
        <li>Miracle</li>
        <li>Twins (Knock Out)</li>
        <li>You Are The One</li>
        <li>Rock This House</li>
        <li>차근 차근 (Way For Love)</li>
        <li>So I</li>
        <li>Over</li>
        <li>Keep In Touch</li>
        <li>L.O.V.E</li>
        <li>Believe</li>
        <li>Twins (Knock Out) (Inst.)</li>
      </ul>

      <h3>Don't Don</h3>
      <ul>
        <li>돈 돈! (Don't Don!)</li>
        <li>소원이 있나요 (Sapphire Blue)</li>
        <li>You're My Endless Love (말하자면)</li>
        <li>미워 (Hate U, Love U)</li>
        <li>Disco Drive</li>
        <li>Marry U</li>
        <li>I Am</li>
        <li>She's Gone (사랑이 떠나다)</li>
        <li>Missin' U</li>
        <li>Mirror (거울)</li>
        <li>Our Love (우리들의 사랑)</li>
        <li>Midnight Fantasy</li>
        <li>Thank You</li>
        <li>Song For You (Bonus Track)</li>
      </ul>

      <h3>Sorry, Sorry</h3>
      <ul>
        <li>쏘리 쏘리 (Sorry, Sorry)</li>
        <li>니가 좋은 이유 (Why I Like You)</li>
        <li>마주치지 말자 (Let's Not...)</li>
        <li>앤젤라 (Angela)</li>
        <li>Reset</li>
        <li>Monster</li>
        <li>What If</li>
        <li>이별... 넌 쉽니 (Heartquake) (Feat. U-Know Yunho y Park Yoo Chun)</li>
        <li>Club No.1 (Feat. Lee Yeon Hee)</li>
        <li>Happy Together</li>
        <li>죽어있는 것 (Dead At Heart)</li>
        <li>Shining Star</li>
      </ul> 

      <h3>Bonamana</h3>
      <ul>
        <li>미 인 아 (Bonamana)</li>
        <li>나쁜 여자 (Boom Boom)</li>
        <li>응결 (Coagulation)</li>
        <li>나란 사람 (Your Eyes)</li>
        <li>My Only Girl</li>
        <li>사랑이 así (My All Is In You)</li>
        <li>Shake It Up!</li>
        <li>잠들고 싶어 (In My Dream)</li>
        <li>봄날 (One Fine Spring Day)</li>
        <li>좋은 사람 (Good Person)</li>
        <li>Here We Go</li>
      </ul>

      <h3>Mr. Simple</h3>
      <ul>
        <li>Mr. Simple</li>
        <li>오페라 (Opera)</li>
        <li>라라라라 (Be My Girl)</li>
        <li>Walkin’</li>
        <li>폭풍 (Storm)</li>
        <li>어느새 우린 (Good Friends)</li>
        <li>결투 (Feels Good)</li>
        <li>기억을 따라 (Memories)</li>
        <li>해바라기 (Sunflower)</li>
        <li>엉뚱한 상상 (White Christmas)</li>
        <li>Y</li>
        <li>My Love, My Kiss, My Heart</li>
        <li>태완미 / 太完美 (Perfection) (Korean Ver.)</li>
      </ul>
      <h3>Sexy, Free & Single</h3>
      <ul>
        <li>Sexy, Free & Single</li>
        <li>너로부터 (From U)</li>
        <li>NOW</li>
        <li>Rockstar</li>
        <li>걸리버 (Gulliver)</li>
        <li>언 가는 (Someday)</li>
        <li>달콤씁쓸 (Bittersweet)</li>
        <li>빠삐용 (Butterfly)</li>
        <li>머문다 (Daydream)</li>
        <li>헤어지는 날 (A ‘Good’Bye)</li>
      </ul>
      <h3>MAMACITA</h3>
      <ul>
        <li>MAMACITA (아야야)</li>
        <li>춤을 춘다 (Midnight Blues)</li>
        <li>백일몽 (Evanesce)</li>
        <li>사랑이 멋지 않게 (Raining Spell for Love)</li>
        <li>Shirt</li>
        <li>This Is Love</li>
        <li>Let's Dance</li>
        <li>Too Many Beautiful Girls</li>
        <li>환절기 (Mid-Season)</li>
        <li>Islands</li>
      </ul>
      <h3>PLAY</h3>
      <ul>
        <li>Black Suit</li>
        <li>Scene Stealer</li>
        <li>비처럼 가지 마요 (One More Chance)</li>
        <li>Good Day for a Good Day</li>
        <li>Runaway</li>
        <li>The Lucky Ones</li>
        <li>예뻐 보여 (Girlfriend)</li>
        <li>Spin Up!</li>
        <li>시간 차 (Too late)</li>
        <li>I Do (두 번째 고백)</li>
      </ul>
      <h3>Time Slip</h3>
      <ul>
        <li>The Crown</li>
        <li>SUPER Clap</li>
        <li>I Think I</li>
        <li>Game</li>
        <li>Somebody New</li>
        <li>Skydive</li>
        <li>Heads Up</li>
        <li>Stay With Me</li>
        <li>No Drama</li>
        <li>Show</li>
      </ul>
      <h3>The Renaissance</h3>
      <ul>
        <li>SUPER</li>
        <li>House Party</li>
        <li>Burn The Floor</li>
        <li>Paradox</li>
        <li>Closer</li>
        <li>우리에게 (The Melody)</li>
        <li>사랑이 멎지 않게 (Raining Spell For Love) (Remake ver.)</li>
        <li>Mystery</li>
        <li>같이 걸읅까 (More Days With You)</li>
        <li>하얀 거짓말 (Tell Me Baby)</li>
      </ul>
      <h3>The Road: Keep on Going Vol.1</h3>
      <ul>
        <li>Mango</li>
        <li>Don’t Wait</li>
        <li>My Wish</li>
        <li>Everyday</li>
        <li>Always</li>
      </ul>
      <h3>The Road: Celebration Vol.2</h3>
      <ul>
        <li>Celebrate</li>
        <li>Hate Christmas</li>
        <li>Snowman</li>
        <li>White Love (스키장에서)</li>
        <li>너였으면 참 좋겠다… (If only you) (Special Track)</li>
      </ul>
      <h3>Super Junior25</h3>
      <ul>
        <li>Express Mode</li>
        <li>Haircut</li>
        <li>Air</li>
        <li>Delight</li>
        <li>I Know</li>
        <li>Say Less</li>
        <li>D.N.A.</li>
        <li>Finale</li>
        <li>우리의 꽃말 (Stuck With You)</li>
      </ul>
    </section>

  </main>

</div>

<?php include '../../../includes/footer.php'; ?>
