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
          <li><a href="#">cede talcahuano</a></li>
          <li><a href="#">cede los angeles</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>proyecto de vinculazion de realidad aumentada</h1>
      <p>Explora nuestra galería 3D institucional</p>
    </div>
  </section>

  <section class="noticias">
    <h2>proyectos de las demas cedes</h2>
    <div class="cards">
      <div class="card">
        <img src="{{ asset('imagenes/cede-talcahuano.png') }}" alt="Sede Talcahuano">
        <h3>cede de talcahuano</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
      <div class="card">
        <img src="{{ asset('imagenes/cede-angeles.png') }}" alt="Sede Los Ángeles">
        <h3>cede los angeles</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
      <div class="card">
        <img src="{{ asset('imagenes/cede-cañete.png') }}" alt="Sede Los Ángeles"> 
        <h3>cede los Cede de cañete</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
    </div>
  </section>

  <section class="galeria-3d">
    <h2>Modelos 3D</h2>
    <div class="models-grid">

      <div class="product-card">
        <div class="product-model">
          <model-viewer src="{{ asset('stefano/scene.gltf') }}" camera-controls auto-rotate></model-viewer>
        </div>
        <div class="product-info">
          <h3>Modelo de Diseño <span class="highlight">3D Avanzado</span></h3>
          <p>Explora los detalles intrincados y la ingeniería detrás de nuestro último prototipo. Visualiza el modelo interactivo con todas sus características.</p>
          <a href="{{ url('modelo-estefano') }}" class="product-button">Ver Modelo</a>
        </div>
      </div>

      <div class="product-card">
        <div class="product-model">
          <model-viewer src="{{ asset('goldenskull/scene.gltf') }}" camera-controls auto-rotate></model-viewer>
        </div>
        <div class="product-info">
          <h3>Artefacto <span class="highlight">Dorado</span></h3>
          <p>Un artefacto antiguo con detalles finos. Rota el modelo para inspeccionar cada ángulo de esta reliquia digital.</p>
          <a href="{{ url('/modelo-goldenskull') }}" class="product-button">Ver Modelo</a>
        </div>
      </div>

      <div class="product-card">
        <div class="product-model">
          <model-viewer src="{{ asset('auto/scene.gltf') }}" camera-controls auto-rotate></model-viewer>
        </div>
        <div class="product-info">
          <h3>Vehículo <span class="highlight">Deportivo</span></h3>
          <p>El diseño conceptual de nuestro último vehículo. Haz clic para ver el interior y los componentes del motor.</p>
          <a href="{{ url('/modelo-auto') }}" class="product-button">Ver Modelo</a>
        </div>
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