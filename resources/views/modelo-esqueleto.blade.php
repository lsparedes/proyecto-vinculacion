<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueleto</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aframe-orbit-controls@1.3.1/dist/aframe-orbit-controls.min.js"></script>
    
</head>
<body>
<!--Header-->
    <header>
    <div class="barra-superior"></div>
    <div class="contenedor-header">
      <img src="./assets/LogoUcsc2.png" alt="Logo UCSC" class="logo">
      <h1>Universidad Católica de la Santísima Concepción</h1>
    </div>
  </header>
<!--Main-->
  <main>
    <h2>Esqueleto Humano</h2>
    <div id="visor">
        <a-scene embedded background="color #fff" raycaster="objects: .clickable" cursor="rayOrigin: mouse">
            <!--Luz-->
            <a-entity light="type: ambient; intensity: 1"></a-entity>
            <a-entity light="type: directional; intensity: 0.6" position="1 1 1"></a-entity>
            <!--Modelo-->
            <a-entity id="esqueleto"
            gltf-model="./modelos/huesos.glb"
            scale="1 1 1" position="0 -3 -10"></a-entity>
            <!--zoom-->
            <a-camera id="zoom" 
          position="0 1 5"
          look-controls="enabled: false"
          orbit-controls="
          target: 0 -3 -10; 
          enableDamping: true;
          dampingFactor: 0.125;
          rotateSpeed: 0.25;
          enableZoom: true;
          zoomSpeed: true;
          minDistance: 2;
          maxDistance: 20;
          mouseButtons: rotate: RIGHT; pan: MIDDLE; zoom: WHEEL;"></a-camera>
        </a-scene>
    </div>
    <section id="informacion">
      <h2 id="titulo">Haz clic en un hueso</h2>
      <p id="descripcion">Seleccione un hueso para ver su información</p>
    </section>
    </main>

<!--Footer-->
<footer>
  <div class="footer-top">
    <div class="footer-logo">
      <img src="./assets/LogoUcsc2.png" alt="Logo UCSC">
       <p>Universidad Católica de la Santísima Concepción</p>
     </div>

    <div class="footer-links">
      <ul>
        <li>Inicio</li>
        <li>Admisión</li>
        <li>La Universidad</li>
        <li>Facultades y Carreras</li>
        <li>Ediciones UCSC</li>
        <li>Librería UCSC</li>
      </ul>
      <ul>
        <li>Postgrados</li>
        <li>Formación Continua</li>
        <li>Investigación</li>
        <li>Vinculación</li>
        <li>Términos de Privacidad</li>
      </ul>
      <ul>
        <li>Agenda</li>
        <li>UCSC Radio</li>
        <li>Normas Gráficas</li>
        <li>Trabaja en la UCSC</li>
        <li>Proveedores</li>
      </ul>
    </div>
  </div>

    <div class="footer-middle">
      <div class="footer-acreditacion">
        <img src="./assets/acreditacion.png" alt="Acreditación">
        <p>Universidad acreditada nivel avanzado<br>Próxima acreditación marzo 2026</p>
      </div>

      <div class="footer-campus">
        <h4>Campus San Andrés</h4>
        <p>Alonso de Ribera 2850, Concepción, Chile<br>Teléfono: +56 41 234 5000</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>UCSC - 2025 · Todos los derechos reservados</p>
    </div>
  </footer>
    <script src="script.js"></script>
</body>
</html>