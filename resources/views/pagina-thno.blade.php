<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi página estilo UCSC</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
</head>
<body>

  <header class="site-header">
    <div class="header-inner">
      <div class="logo">
        <img src="{{ asset('imagenes/logo-ucsc.png') }}" alt="Logo UCSC" />
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="{{ url('/principal') }}">Inicio</a></li>
          <li><a href="#">Sede Talcahuano</a></li>
          <li><a href="#">Sede Los Ángeles</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Proyecto de vinculación de Realidad Aumentada (RA)</h1>
      <p>Explora nuestra galería 3D institucional</p>
    </div>
  </section>

 <section class="noticias">
    <h2>proyectos de las demas cedes</h2>
    <div class="cards">
      <div class="card">
        <img src="{{ asset('imagenes/sede-chillan.png') }}" alt="Sede Chillan">
        <h3>Sede de chillan</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
      <div class="card">
        <img src="{{ asset('imagenes/cede-angeles.png') }}" alt="Sede Los Ángeles">
        <h3>Sede los angeles</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
      <div class="card">
        <img src="{{ asset('imagenes/cede-cañete.png') }}" alt="Sede Los Ángeles">
        <h3>Sede los Sede de cañete</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
    </div>
  </section>

<!-- Sección: Card con imagen de código QR -->
<section class="qr-card-section" style="padding:36px 16px;background:#fafafa;">
  <div style="max-width:1100px;margin:0 auto;display:flex;justify-content:center;">

    <div class="qr-card" style="width:320px;background:#fff;border-radius:10px;box-shadow:0 8px 28px
     rgba(0,0,0,0.06);overflow:hidden;padding:18px;text-align:center;">
      <h3 style="font-size:1.05rem;margin:0 0 10px;color:#222;">Código QR — Acceso rápido</h3>

      <img src="" alt="QR para abrir modelo"
       style="width:100%;max-width:260px;margin:0 auto 12px;display:block;border-radius:6px;">

      <p style="font-size:0.92rem;color:#444;margin:0 0 12px;">
        Escanea con la cámara de tu teléfono para abrir la página del modelo en tu dispositivo.</p>
    </div>
  </div>
</section>

 <footer class="ucsc-footer" id="footer">

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
