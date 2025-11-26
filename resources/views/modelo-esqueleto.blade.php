<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueleto</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/esqueleto.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>   
    <script src="https://unpkg.com/aframe-orbit-controls@1.3.2/dist/aframe-orbit-controls.min.js"></script>
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
    <h2>Esqueleto Humano</h2>

    <div id="visor" style="position: relative;"> 
        
        <div class="controles-zoom">
            <button id="btn-up" type="button" title="Subir cámara">↑</button>
            <button id="btn-down" type="button" title="Bajar cámara">↓</button>
            
            <div style="height: 10px;"></div>

            <button id="btn-zoom-in" type="button" title="Acercar">+</button>
            <button id="btn-zoom-out" type="button" title="Alejar">-</button>
            <button id="btn-reset" title="Restablecer vista">⟲</button>
        </div>
        
        <a-scene embedded background="color #fff">

            <a-entity light="type: ambient; intensity: 1"></a-entity>
            <a-entity light="type: directional; intensity: 0.6" position="1 1 1"></a-entity>
            
            <a-entity id="esqueleto"
                gltf-model="{{ asset('esqueleto/huesos.glb') }}"
                scale="1 1 1" position="0 -3 -10"></a-entity>

            <a-entity id="zoom" camera
                orbit-controls="
                    target: 0 -3 -10;
                    enableDamping: true;
                    dampingFactor: 0.125;
                    rotateSpeed: 0.5;
                    enableZoom: true;
                    zoomSpeed: 1;
                    minDistance: 2;
                    maxDistance: 20;
                    enablePan: false;
                    initialPosition: 0 1 5">
            </a-entity>

        </a-scene>
    </div>
    
    <section id="informacion">
        <h2 id="titulo">Haz clic en un hueso</h2>
        <p id="descripcion">Seleccione un hueso para ver su información</p>
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
<script>
    const huesosDesdeLaravel = @json($huesosData);
</script>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>