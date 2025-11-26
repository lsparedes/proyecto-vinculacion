<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - UCSC</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">

</head>
<body>

    <header class="header-institucional">
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('imagenes/logo-ucsc.png') }}" alt="Logo UCSC" />
                    </a>
                </div>

                <nav class="navegacion-principal">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Nuestras Sedes</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="hero-content">
                <h1>proyecto de vinculacion de realidad aumentada</h1>
                <p>proyecto intercede desarrollado por alumnos de la carrera de Ingeniería en ejecucion en ejecucion en iformatica</p>
            </div>
        </section>

        <section class="seccion-sedes" id="sedes">
            <div class="container">
                <h2>Nuestras Sedes</h2>
                <p class="subtitulo-sedes">
                </p>

                <div class="sedes-container">
                    <a href="{{ url('/thno') }}" class="sede-card">
                        <img src="{{ asset('imagenes/cede-talcahuano.png') }}" alt="Foto Sede Talcahuano">
                        <h3>Sede Talcahuano</h3>
                        <p>“Buscamos mostrar las instalaciones de la UCSC sede Talcahuano para que los futuros estudiantes conozcan de forma sencilla y entretenida las salas y espacios de cada especialidad usando Realidad Aumentada.”</p>
                        <span class="boton-sede">Visitar Sede</span>
                    </a>

                    <a href="{{ url('/chillan') }}" class="sede-card">
                        <img src="{{ asset('imagenes/sede-chillan.png') }}" alt="Foto Sede Chillán">
                        <h3>Sede Chillán</h3>
                        <p>aqui va un mensaje sobre el proyecto de Chillán.</p>
                        <span class="boton-sede">Visitar Sede</span>
                    </a>

                    <a href="#" class="sede-card">
                        <img src="{{ asset('imagenes/cede-angeles.png') }}" alt="Foto Sede Los Ángeles">
                        <h3>Sede Los Ángeles</h3>
                        <p>aqui va un mensaje sobre el proyecto de los angeles.</p>
                        <span class="boton-sede">Visitar Sede</span>
                    </a>

                    <a href="#" class="sede-card">
                        <img src="{{ asset('imagenes/cede-cañete.png') }}" alt="Foto Sede de Cañete">
                        <h3>Sede Cañete</h3>
                        <p>aqui va un mensaje sobre el proyecto de Cañete.</p>
                        <span class="boton-sede">Visitar Sede</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="ucsc-footer" id="contacto">

        <div class="footer-main">
            <div class="footer-grid">

                <div class="footer-column" id="footer-identidad">
                    <div class="footer-logo">UCSC</div>
                    <p class="acreditacion">
                        <strong>UNIVERSIDAD ACREDITADA</strong><br>
                        AVANZADA / MARZO 2021 - MARZO 2026
                    </p>
                    <p class="acreditacion-areas">
                        Docencia de Pregrado, Gestión Institucional, Investigación y Vinculación con el Medio.
                    </p>
                </div>

                <div class="footer-column">
                    <h4>Facultades y Carreras</h4>
                    <ul>
                        <li><a href="#">Facultad de Estudios Teológicos</a></li>
                        <li><a href="#">Facultad de Derecho</a></li>
                        <li><a href="#">Facultad de Ciencias</a></li>
                        <li><a href="#">Facultad de Educación</a></li>
                        <li><a href="#">Facultad de Medicina</a></li>
                        <li><a href="#">Facultad de Ingeniería</a></li>
                        <li><a href="#">Instituto Tecnológico</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Información Para</h4>
                    <ul>
                        <li><a href="#">Futuros Estudiantes</a></li>
                        <li><a href="#">Estudiantes</a></li>
                        <li><a href="#">Académicos</a></li>
                        <li><a href="#">Alumni</a></li>
                        <li><a href="#">Trabajadores</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Medios UCSC</h4>
                    <ul>
                        <li><a href="#">Noticias UCSC</a></li>
                        <li><a href="#">UCSC Radio</a></li>
                        <li><a href="#">Galería UCSC</a></li>
                        <li><a href="#">UCSC TV</a></li>
                        <li><a href="#">Normas Gráficas</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="footer-bottom-bar">
            <div class="footer-bottom-content">
                <div class="footer-social">
                    <a href="#" aria-label="Facebook">f</a>
                    <a href="#" aria-label="Instagram">i</a>
                    <a href="#" aria-label="Twitter">t</a>
                    <a href="#" aria-label="LinkedIn">in</a>
                    <a href="#" aria-label="YouTube">y</a>
                </div>
                <div class="footer-copyright">
                    <p>Campus San Andrés. Alonso de Ribera 2850, Concepción, Chile.</p>
                    <p>© 2025 Universidad Católica de la Santísima Concepción.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
