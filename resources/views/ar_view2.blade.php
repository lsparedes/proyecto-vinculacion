<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, viewport-fit=cover">
    <title>AR Pro Interface - Primer Piso</title>

    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>

    <style>
        body { 
            margin: 0; overflow: hidden; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            touch-action: none; 
            user-select: none; -webkit-user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .a-enter-vr, .a-enter-vr-button { display: none !important; }

        .arjs-video {
            width: 100vw !important; height: 100vh !important;
            position: absolute !important; top: 0 !important; left: 0 !important;
            object-fit: cover !important; z-index: -1 !important;
        }

        #top-bar {
            position: absolute; top: 0; left: 0; width: 100%;
            height: 70px; 
            pointer-events: none;
            display: flex; justify-content: space-between; align-items: flex-end; 
            padding: 10px 15px; box-sizing: border-box; z-index: 9999;
        }

        .btn-pill {
            pointer-events: auto;
            background: rgba(20, 20, 20, 0.6);
            backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
            color: white; border: 1px solid rgba(255,255,255,0.2);
            padding: 8px 16px; border-radius: 20px;
            font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;
            display: flex; align-items: center; gap: 5px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
            transition: transform 0.1s;
        }
        .btn-pill:active { transform: scale(0.92); background: rgba(255,255,255,0.9); color: black; }
        .btn-danger { background: rgba(220, 40, 40, 0.7); border: none; }

        #ui-layer {
            position: absolute; bottom: 0; left: 0; width: 100%;
            padding: 10px 15px 30px 15px; 
            box-sizing: border-box; z-index: 9999;
            pointer-events: none;
            display: flex; justify-content: space-between; align-items: flex-end;
        }

        .joystick-area {
            pointer-events: auto;
            position: relative;
            width: 38vw; height: 38vw; 
            max-width: 160px; max-height: 160px; 
            min-width: 120px; min-height: 120px; 
            
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .d-pad-grid {
            width: 100%; height: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
        }

        .d-btn {
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.8);
            font-size: 24px; cursor: pointer;
            border-radius: 50%;
        }
      
        .d-btn:active { background: rgba(255,255,255,0.3); color: white; }
 
        .cell-up { grid-column: 2; grid-row: 1; }
        .cell-down { grid-column: 2; grid-row: 3; }
        .cell-left { grid-column: 1; grid-row: 2; }
        .cell-right { grid-column: 3; grid-row: 2; }
        .cell-center { 
            grid-column: 2; grid-row: 2; 
            font-size: 10px; font-weight: bold; color: rgba(255,255,255,0.4);
            pointer-events: none; text-align: center; display: flex; align-items: center;
        }

        .center-stack {
            pointer-events: auto;
            display: flex; flex-direction: column; gap: 10px;
            margin-bottom: 10px; 
        }

        .control-pair {
            display: flex; flex-direction: column; align-items: center;
            background: rgba(0,0,0,0.5);
            padding: 5px; border-radius: 20px;
            backdrop-filter: blur(10px);
        }
        
        .mini-label { font-size: 9px; color: #aaa; font-weight: 700; margin-bottom: 4px; letter-spacing: 1px;}
        
        .btn-row { display: flex; gap: 2px; }
        
        .btn-sq {
            width: 40px; height: 35px;
            background: rgba(255,255,255,0.1);
            border: none; color: white;
            font-size: 16px; font-weight: bold;
            display: flex; align-items: center; justify-content: center;
        }
        .btn-sq:first-child { border-radius: 10px 0 0 10px; border-right: 1px solid rgba(255,255,255,0.1); }
        .btn-sq:last-child { border-radius: 0 10px 10px 0; }
        .btn-sq:active { background: white; color: black; }

        .accent-blue .btn-sq:active { background: #0099ff; color: white; }

        @media (max-width: 360px) {
            .joystick-area { width: 35vw; height: 35vw; }
            .btn-sq { width: 30px; }
            .d-btn { font-size: 20px; }
            #ui-layer { padding-bottom: 10px; }
        }
    </style>
</head>

<body>

    <div id="top-bar">
        <div class="btn-pill btn-danger" onclick="goHome()" ontouchend="goHome()">
            <span>&larr;</span> Inicio
        </div>
        <div class="btn-pill" onclick="resetModel()" ontouchend="resetModel()">
            <span>&#8634;</span> Reset
        </div>
    </div>

    <div id="ui-layer">
        
        <div class="joystick-area">
            <div class="d-pad-grid">
                <div class="d-btn cell-up" onmousedown="startLoop('moveZ', -1)" ontouchstart="startLoop('moveZ', -1)">&#9650;</div>
                <div class="d-btn cell-left" onmousedown="startLoop('moveX', -1)" ontouchstart="startLoop('moveX', -1)">&#9664;</div>
                <div class="cell-center">MOVE</div>
                <div class="d-btn cell-right" onmousedown="startLoop('moveX', 1)" ontouchstart="startLoop('moveX', 1)">&#9654;</div>
                <div class="d-btn cell-down" onmousedown="startLoop('moveZ', 1)" ontouchstart="startLoop('moveZ', 1)">&#9660;</div>
            </div>
        </div>

        <div class="center-stack">
            <div class="control-pair">
                <span class="mini-label">ZOOM</span>
                <div class="btn-row">
                    <div class="btn-sq" onmousedown="startLoop('zoom', -1)" ontouchstart="startLoop('zoom', -1)">-</div>
                    <div class="btn-sq" onmousedown="startLoop('zoom', 1)" ontouchstart="startLoop('zoom', 1)">+</div>
                </div>
            </div>
            <div class="control-pair accent-blue">
                <span class="mini-label">ALTURA</span>
                <div class="btn-row">
                    <div class="btn-sq" onmousedown="startLoop('moveY', -1)" ontouchstart="startLoop('moveY', -1)">&#9660;</div>
                    <div class="btn-sq" onmousedown="startLoop('moveY', 1)" ontouchstart="startLoop('moveY', 1)">&#9650;</div>
                </div>
            </div>
        </div>

        <div class="joystick-area">
            <div class="d-pad-grid">
                <div class="d-btn cell-up" onmousedown="startLoop('rotX', -1)" ontouchstart="startLoop('rotX', -1)">&#8635;</div>
                <div class="d-btn cell-left" onmousedown="startLoop('rotY', -1)" ontouchstart="startLoop('rotY', -1)">&#8634;</div>
                <div class="cell-center">ROT</div>
                <div class="d-btn cell-right" onmousedown="startLoop('rotY', 1)" ontouchstart="startLoop('rotY', 1)">&#8635;</div>
                <div class="d-btn cell-down" onmousedown="startLoop('rotX', 1)" ontouchstart="startLoop('rotX', 1)">&#8634;</div>
            </div>
        </div>

    </div>

    <a-scene 
        embedded 
        arjs='sourceType: webcam; debugUIEnabled: false; sourceWidth:1280; sourceHeight:960; displayWidth: 1280; displayHeight: 960; smooth: true; smoothCount: 5; smoothTolerance: 0.01;'
        vr-mode-ui="enabled: false"
        renderer="logarithmicDepthBuffer: true;">

        <a-marker preset="hiro">
            <a-entity
                id="target-model"
                gltf-model="{{ asset('Primer pisovf.glb') }}"
                position="0 0 0"
                scale="0.2 0.2 0.2"
                rotation="-90 0 0">
            </a-entity>
        </a-marker>

        <a-entity camera></a-entity>
    </a-scene>

    <script>
        let interval = null;
        const model = document.getElementById('target-model');
        
        const INIT_SCALE = 0.2;
        const INIT_ROT_X = -90; 
        const S_MOVE = 0.05;
        const S_ROT = 2.5;
        const S_ZOOM = 0.02;

        function goHome(e) {
            if(e) e.preventDefault(); 
            window.location.href = "{{ url('/') }}";
        }

        function resetModel(e) {
            if(e) e.preventDefault();
            stopLoop();
            const mesh = model.object3D;
            mesh.position.set(0, 0, 0);
            mesh.rotation.set(INIT_ROT_X * (Math.PI/180), 0, 0); 
            mesh.scale.set(INIT_SCALE, INIT_SCALE, INIT_SCALE);
        }

        function startLoop(action, dir) {
            if (interval) clearInterval(interval);
         
            if (window.navigator && window.navigator.vibrate) {
                window.navigator.vibrate(5); 
            }

            interval = setInterval(() => {
                const mesh = model.object3D;
                switch(action) {
                    case 'moveX': mesh.position.x += dir * S_MOVE; break;
                    case 'moveZ': mesh.position.z += dir * S_MOVE; break;
                    case 'moveY': mesh.position.y += dir * S_MOVE; break;
                    case 'rotY':  mesh.rotation.y += dir * (S_ROT * Math.PI / 180); break;
                    case 'rotX':  mesh.rotation.x += dir * (S_ROT * Math.PI / 180); break;
                    case 'zoom':  
                        const s = mesh.scale.x + (dir * S_ZOOM);
                        if (s > 0.01) mesh.scale.set(s, s, s);
                        break;
                }
            }, 30);
        }

        function stopLoop() {
            if (interval) {
                clearInterval(interval);
                interval = null;
            }
        }

        window.addEventListener('mouseup', stopLoop);
        window.addEventListener('touchend', stopLoop);

        document.addEventListener('contextmenu', event => event.preventDefault());

    </script>
</body>
</html>