
// VARIABLES GLOBALES Y CONFIGURACIÓN DE LARAVEL
const datosCrudos = typeof huesosDesdeLaravel !== 'undefined' ? huesosDesdeLaravel : [];
let mapaHuesos = {};
let huesoSeleccionado = null;
let mouseInicio = { x: 0, y: 0 };

// Función para limpiar nombres y coincidir con la BD
function limpiarNombre(nombreSucio) {
    if (!nombreSucio) return "";
    return nombreSucio
        .toLowerCase()
        .replace(/\.[0-9]+$/, '')
        .replace(/_mesh$/, '')
        .trim();
}

// Normalización de datos de Laravel al cargar el script
if (Array.isArray(datosCrudos)) {
    datosCrudos.forEach(h => {
        if (h.identificador) {
            mapaHuesos[limpiarNombre(h.identificador)] = h;
        }
    });
} else {
    Object.values(datosCrudos).forEach(h => {
        if (h.identificador) {
            mapaHuesos[limpiarNombre(h.identificador)] = h;
        }
    });
}

// INICIALIZACIÓN DEL DOM
document.addEventListener("DOMContentLoaded", () => {
    // Referencias a elementos del DOM
    const escena = document.querySelector("a-scene");
    const esqueleto = document.querySelector("#esqueleto");
    const visor = document.querySelector("#visor");
    
    // Botones
    const btnIn = document.getElementById("btn-zoom-in");
    const btnOut = document.getElementById("btn-zoom-out");
    const btnReset = document.getElementById("btn-reset");
    const btnUp = document.getElementById("btn-up");
    const btnDown = document.getElementById("btn-down");
    
    // ELEMENTOS DE CÁMARA
    const cameraEl = document.querySelector("[camera]"); 
    const zoomWrapperEl = document.querySelector("#zoom"); 

    // posiciones iniciales
    let posCameraInicial = "0 1 4"; 
    let rotCameraInicial = "0 0 0";
    let posWrapperInicial = new THREE.Vector3(0, 0, 0); // Asumimos 0,0,0 si no se detecta

    // Capturamos los valores reales si existen
    if (cameraEl) {
        posCameraInicial = cameraEl.getAttribute("position");
        rotCameraInicial = cameraEl.getAttribute("rotation");
    }
    if (zoomWrapperEl) {
        posWrapperInicial = zoomWrapperEl.object3D.position.clone();
    }

    // Evento Click del Reset
    if (btnReset) {
        btnReset.addEventListener("click", (e) => {
            e.preventDefault();
            console.log("Restableciendo vista...");

            //  Restaurar el contenedor del zoom (el que se mueve con los botones)
            if (zoomWrapperEl) {
                zoomWrapperEl.object3D.position.copy(posWrapperInicial);
            }

            // Restaurar la cámara interna (la que se mueve con el mouse) (aun no)
            if (cameraEl) {
                cameraEl.setAttribute("position", posCameraInicial);
                
                // Intentar resetear controles orbitales si existen
                const controls = cameraEl.components['orbit-controls'];
                if (controls) {
                    // Resetear el objetivo al centro
                    controls.target.set(0, 1, 0); 
                    // Forzar actualización
                    controls.update(); 
                } else {
                    cameraEl.setAttribute("rotation", "0 0 0");
                }
            }
        });
    }

    // EVENTOS DE LA ESCENA (Cuando carga A-Frame)
    escena.addEventListener("loaded", () => {
        const canvas = escena.renderer.domElement;

        // Prevenir menú contextual al dar clic derecho
        canvas.addEventListener("contextmenu", (e) => e.preventDefault());
        // Prevenir scroll de la página al hacer zoom en el visor
        visor.addEventListener("wheel", (e) => e.preventDefault(), { passive: false });

        // --- CARGA DEL MODELO 3D ---
        esqueleto.addEventListener("model-loaded", () => {
            esqueleto.object3D.traverse((node) => {
                if (node.isMesh) {
                    // Guardar color original si no existe
                    if (!node.userData.origColor) {
                        node.userData.origColor = node.material.color.clone();
                    }
                }
            });
            console.log("Modelo cargado. Huesos en BD:", Object.keys(mapaHuesos));
        });

        // DETECCIÓN DE CLIC VS ARRASTRE 
        canvas.addEventListener("mousedown", (e) => {
            mouseInicio.x = e.clientX;
            mouseInicio.y = e.clientY;
        });

        canvas.addEventListener("mouseup", (e) => {
            const diferenciaX = Math.abs(e.clientX - mouseInicio.x);
            const diferenciaY = Math.abs(e.clientY - mouseInicio.y);
            
            // Si el mouse se movió menos de 5px, es un clic.
            if (diferenciaX < 5 && diferenciaY < 5 && e.button === 0) {
                seleccionarHueso(e, escena, esqueleto, canvas);
            }
        });

        // LÓGICA DE ZOOM Y MOVIMIENTO (Botones + - Arriba Abajo)
        if (zoomWrapperEl) {
            const targetPosition = new THREE.Vector3(0, -3, -10); // Dirección del zoom
            const zoomStep = 1.5;
            const minDst = 2;
            const maxDst = 20;
            const heightStep = 0.5;

            const realizarZoom = (direccion) => {
                const obj3D = zoomWrapperEl.object3D;
                const currentDistance = obj3D.position.distanceTo(targetPosition);
                
                // Calcular vector de dirección
                const directionVector = new THREE.Vector3()
                    .subVectors(obj3D.position, targetPosition)
                    .normalize();

                if (direccion === 'in' && currentDistance > minDst) {
                    obj3D.position.addScaledVector(directionVector, -zoomStep);
                } else if (direccion === 'out' && currentDistance < maxDst) {
                    obj3D.position.addScaledVector(directionVector, zoomStep);
                }
            };

            // Asignar eventos a los botones
            if (btnIn) btnIn.addEventListener("click", (e) => { e.preventDefault(); realizarZoom('in'); });
            if (btnOut) btnOut.addEventListener("click", (e) => { e.preventDefault(); realizarZoom('out'); });
            
            if (btnUp) btnUp.addEventListener("click", (e) => {
                e.preventDefault();
                zoomWrapperEl.object3D.position.y += heightStep;
            });

            if (btnDown) btnDown.addEventListener("click", (e) => {
                e.preventDefault();
                // Límite inferior para no bajar demasiado
                if (zoomWrapperEl.object3D.position.y > -5) { 
                    zoomWrapperEl.object3D.position.y -= heightStep;
                }
            });
        }
    });
});

// FUNCIONES DE SELECCIÓN (RAYCASTER)

function seleccionarHueso(event, escena, esqueleto, canvas) {
    const rect = canvas.getBoundingClientRect();
    const mouse = new THREE.Vector2(
        ((event.clientX - rect.left) / rect.width) * 2 - 1,
        -((event.clientY - rect.top) / rect.height) * 2 + 1
    );

    const raycaster = new THREE.Raycaster();
    raycaster.setFromCamera(mouse, escena.camera);

    const objetosClickables = [];
    esqueleto.object3D.traverse((node) => {
        if (node.isMesh) objetosClickables.push(node);
    });

    // Detectar intersecciones
    const intersects = raycaster.intersectObjects(objetosClickables, false);

    if (intersects.length === 0) {
        limpiarSeleccion();
        return;
    }

    // Prevenir propagación
    event.preventDefault();
    event.stopPropagation();

    const mesh = intersects[0].object;
    limpiarSeleccion(); // Limpiar selección anterior

    // Pintar de rojo
    if (!mesh.userData.origColor && mesh.material) {
        mesh.userData.origColor = mesh.material.color.clone();
    }
    if (mesh.material) {
        mesh.material.color.set("#ff0000");
    }

    huesoSeleccionado = mesh;

    // Mostrar información
    const nombre3D = mesh.name || "";
    const claveBusqueda = limpiarNombre(nombre3D);
    
    console.log(`Click en 3D: "${nombre3D}" -> Buscando ID: "${claveBusqueda}"`);

    if (mapaHuesos[claveBusqueda]) {
        document.getElementById("titulo").innerText = mapaHuesos[claveBusqueda].nombre;
        document.getElementById("descripcion").innerText = mapaHuesos[claveBusqueda].descripcion;
    } else {
        document.getElementById("titulo").innerText = nombre3D;
        document.getElementById("descripcion").innerText = "Sin información. (ID BD: " + claveBusqueda + ")";
    }
}

function limpiarSeleccion() {
    if (huesoSeleccionado && huesoSeleccionado.material && huesoSeleccionado.userData.origColor) {
        huesoSeleccionado.material.color.copy(huesoSeleccionado.userData.origColor);
    }
    huesoSeleccionado = null;
    
    const titulo = document.getElementById("titulo");
    const desc = document.getElementById("descripcion");
    
    if(titulo) titulo.innerText = "Haz clic en un hueso";
    if(desc) desc.innerText = "Seleccione un hueso para ver su información";
}