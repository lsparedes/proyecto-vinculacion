<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modelo Stefano</title>
  
  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>

  <style>
    body, html {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background-color: #f0f0f0;
    }

    model-viewer {
      width: 100%;
      height: 100%;
    }

    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 10;
      background-color: #D93025; 
      color: #ffffff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      font-weight: 700;
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .back-button:hover {
      background-color: #b0261e;
    }
  </style>
</head>
<body>
  <a href="{{ url('/') }}" class="back-button">← Volver a la Galería</a>

  <model-viewer 
      src="{{ asset('stefano/scene.gltf') }}" 
      camera-controls 
      auto-rotate
      ar
      shadow-intensity="1"
      alt="Modelo 3D de Stefano">
  </model-viewer>

</body>
</html>