<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi página estilo UCSC</title>
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  
  <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
  <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>

  <style> 
    .action-buttons { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 10px; }
    .btn-ar { background-color: #e63946; color: white; }
    .instrucciones-globales { background-color: #f4f4f4; padding: 20px; margin: 40px auto; border-radius: 10px; max-width: 800px; text-align: center; border: 1px solid #ddd; }
  </style>
</head>
<body>

  <header class="site-header">
    <div class="header-inner">
      <div class="logo">
        <img src="{{ asset('imagenes/logo-ucsc.png') }}" alt="Logo UCSC" />
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="{{ url('principal') }}">Inicio</a></li>
          <li><a href="#">Sede Talcahuano</a></li>
          <li><a href="#">Sede Los Ángeles</a></li>
          <li><a href="#">Sede de Cañete</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Proyecto de vinculación de Realidad Aumentada</h1>
      <p>Explora nuestra galería 3D institucional</p>
    </div>
  </section>

  <section class="noticias">
    <h2>Proyectos de las demas sedes</h2>
    <div class="cards">
      <div class="card">
        <img src="{{ asset('imagenes/cede-talcahuano.png') }}" alt="">
        <h3>Sede de Talcahuano</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
      <div class="card">
        <img src="{{ asset('imagenes/cede-angeles.png') }}" alt="">
        <h3>Sede Los Ángeles</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
      <div class="card">
        <img src="{{ asset('imagenes/cede-cañete.png') }}" alt="">
        <h3>Sede de Cañete</h3>
        <a href="#" class="product-button">Ver proyectos</a>
      </div>
    </div>
  </section>

  <section class="galeria-3d">
    <h2>Modelos 3D</h2>
    <div class="models-grid">

      <div class="product-card">
        <div class="product-model">
          <model-viewer src="{{ asset('felipe (2).glb') }}" camera-controls auto-rotate></model-viewer>
        </div>
        <div class="product-info">
          <h3>Modelo <span class="highlight">exterior</span></h3>
          <p>el modelo 3d de la sede por fuera, sin el complejo interno.</p>
          
          <div class="action-buttons">
              <a href="{{ url('modelo-completo') }}" class="product-button">Ver Web 3D</a>
              <a href="{{ url('ar-modelo-1') }}" class="product-button btn-ar"> Ver en AR</a>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-model">
          <model-viewer src="{{ asset('Primer pisovf.glb') }}" camera-controls auto-rotate></model-viewer>
        </div>
        <div class="product-info">
          <h3>Primer<span class="highlight">Piso</span></h3>
          <p>el modelo 3d del primer pido de la sede de chillan de la ucsc.</p>
          
          <div class="action-buttons">
              <a href="{{ url('primer-piso') }}" class="product-button">Ver Web 3D</a>
              <a href="{{ url('ar-modelo-2') }}" class="product-button btn-ar"> Ver en AR</a>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-model">
          <model-viewer src="{{ asset('segundo piso vf.glb') }}" camera-controls auto-rotate></model-viewer>
        </div>
        <div class="product-info">
          <h3>segundo <span class="highlight">piso</span></h3>
          <p>modelo del segundo piso en creacion por ahora.</p>
          
          <div class="action-buttons">
              <a href="{{ url('segundo-piso') }}" class="product-button">Ver Web 3D</a>
              <a href="#" class="{{ url('ar-modelo-3') }}" class="product-button btn-ar"> Ver en AR</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="instrucciones-globales">
    <h3>¿Cómo funciona la Realidad Aumentada?</h3>
    <p>Para ver los modelos en tu entorno, sigue estos pasos:</p>
    <ol style="text-align: left; display: inline-block;">
        <li>Haz clic en el botón <strong>" Ver en AR"</strong> de la tarjeta que quieras ver.</li>
        <li>Si estás en PC, enfoca con tu celular el <strong>Marcador HIRO</strong> de abajo.</li>
        <li>Si estás en celular, necesitarás tener este marcador impreso o en otra pantalla.</li>
    </ol>
    <br><br>
    <p><strong>Escanea este marcador con la cámara AR:</strong></p>
    <center>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Hiro_marker_ARjs.png" alt="Marcador HIRO" width="200" style="border: 4px solid #333; border-radius: 5px;">
    </center>
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
                <p> Alumno en practica a cargo de esta pagina: Felipe Alejandro Espinosa Barrera.</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>