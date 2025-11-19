const datosCrudos = huesosDesdeLaravel; 
let mapaHuesos = {}; 

function limpiarNombre(nombreSucio) {
    if (!nombreSucio) return "";
    return nombreSucio
        .toLowerCase()            
        .replace(/\.[0-9]+$/, '') 
        .replace(/_mesh$/, '')    
        .trim();                  
}

// --- NORMALIZACIÓN DE DATOS DE LARAVEL ---
if (Array.isArray(datosCrudos)) {
    datosCrudos.forEach(h => {
        if (h.identificador) {
            const claveLimpia = limpiarNombre(h.identificador);
            mapaHuesos[claveLimpia] = h;
        }
    });
} else {
    Object.values(datosCrudos).forEach(h => {
        if (h.identificador) {
            const claveLimpia = limpiarNombre(h.identificador);
            mapaHuesos[claveLimpia] = h;
        }
    });
}

let huesoSeleccionado = null;
let mouseInicio = { x: 0, y: 0 };

document.addEventListener("DOMContentLoaded", () => {
  const escena = document.querySelector("a-scene");
  const esqueleto = document.querySelector("#esqueleto");
  const visor = document.querySelector("#visor"); 

  const btnIn = document.getElementById("btn-zoom-in");
  const btnOut = document.getElementById("btn-zoom-out");
  const btnUp = document.getElementById("btn-up");
  const btnDown = document.getElementById("btn-down");
  const camaraEl = document.querySelector("#zoom");

  escena.addEventListener("loaded", () => {
    const canvas = escena.renderer.domElement;

    canvas.addEventListener("contextmenu", (e) => e.preventDefault());
    visor.addEventListener("wheel", (e) => e.preventDefault(), { passive: false });

    esqueleto.addEventListener("model-loaded", () => {
      esqueleto.object3D.traverse((node) => {
        if (node.isMesh) {
          if (!node.userData.origColor) {
            node.userData.origColor = node.material.color.clone();
          }
        }
      });
      console.log("Huesos disponibles en BD (IDs limpios):", Object.keys(mapaHuesos));
    });

    canvas.addEventListener("mousedown", (e) => {
        mouseInicio.x = e.clientX;
        mouseInicio.y = e.clientY;
    });

    canvas.addEventListener("mouseup", (e) => {
        const diferenciaX = Math.abs(e.clientX - mouseInicio.x);
        const diferenciaY = Math.abs(e.clientY - mouseInicio.y);
        // Detectar clic vs arrastre (tolerancia 5px)
        if (diferenciaX < 5 && diferenciaY < 5 && e.button === 0) {
             seleccionarHueso(e, escena, esqueleto, canvas);
        }
    });

    if(camaraEl) {
        const targetPosition = new THREE.Vector3(0, -3, -10); 
        const zoomStep = 1.5; 
        const minDst = 2; 
        const maxDst = 20; 
        const heightStep = 0.5;

        const realizarZoom = (direccion) => {
            const camaraObj = camaraEl.object3D;
            const currentDistance = camaraObj.position.distanceTo(targetPosition);
            const directionVector = new THREE.Vector3().subVectors(camaraObj.position, targetPosition).normalize();

            if (direccion === 'in' && currentDistance > minDst) {
                camaraObj.position.addScaledVector(directionVector, -zoomStep);
            } else if (direccion === 'out' && currentDistance < maxDst) {
                camaraObj.position.addScaledVector(directionVector, zoomStep);
            }
        };

        if(btnIn) btnIn.addEventListener("click", (e) => { e.preventDefault(); realizarZoom('in'); });
        if(btnOut) btnOut.addEventListener("click", (e) => { e.preventDefault(); realizarZoom('out'); });
        
        if(btnUp) btnUp.addEventListener("click", (e) => {
            e.preventDefault();
            camaraEl.object3D.position.y += heightStep;
        });

        if(btnDown) btnDown.addEventListener("click", (e) => {
            e.preventDefault();
            if (camaraEl.object3D.position.y > -2) {
                camaraEl.object3D.position.y -= heightStep;
            }
        });
    }
  });
});

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

  const intersects = raycaster.intersectObjects(objetosClickables, false);

  if (intersects.length === 0) {
    limpiarSeleccion();
    return;
  }

  event.preventDefault();
  event.stopPropagation();

  const mesh = intersects[0].object;
  limpiarSeleccion(); 

  if (!mesh.userData.origColor && mesh.material) {
    mesh.userData.origColor = mesh.material.color.clone();
  }
  if (mesh.material) {
    mesh.material.color.set("#ff0000");
  }

  huesoSeleccionado = mesh;

  // nombre del 3D
  const nombre3D = mesh.name || "";
  const claveBusqueda = limpiarNombre(nombre3D);
  
  console.log(`Click en 3D: "${nombre3D}" -> Buscando ID: "${claveBusqueda}"`);

  if (mapaHuesos[claveBusqueda]) {
    document.getElementById("titulo").innerText = mapaHuesos[claveBusqueda].nombre;
    document.getElementById("descripcion").innerText = mapaHuesos[claveBusqueda].descripcion;
  } else {
    document.getElementById("titulo").innerText = nombre3D;
    document.getElementById("descripcion").innerText = "Sin información. (ID Requerido en BD: " + claveBusqueda + ")";
  }
}

function limpiarSeleccion() {
    if (huesoSeleccionado && huesoSeleccionado.material && huesoSeleccionado.userData.origColor) {
      huesoSeleccionado.material.color.copy(huesoSeleccionado.userData.origColor);
    }
    huesoSeleccionado = null;
    document.getElementById("titulo").innerText = "Haz clic en un hueso";
    document.getElementById("descripcion").innerText = "Seleccione un hueso para ver su información";
}