const huesos = huesosDesdeLaravel;
let huesoSeleccionado = null;

document.addEventListener("DOMContentLoaded", () => {
  const escena = document.querySelector("a-scene");
  const esqueleto = document.querySelector("#esqueleto");
  const visor = document.querySelector("#visor"); 

  // Elementos para el zoom manual
  const btnIn = document.getElementById("btn-zoom-in");
  const btnOut = document.getElementById("btn-zoom-out");
  const camaraEl = document.querySelector("#zoom");

  escena.addEventListener("loaded", () => {
    const canvas = escena.renderer.domElement;

    canvas.addEventListener("contextmenu", (e) => e.preventDefault());

    // Prevenir el scroll de la página cuando se usa la rueda sobre el visor
    visor.addEventListener("wheel", (e) => e.preventDefault(), { passive: false });

    esqueleto.addEventListener("model-loaded", () => {
      esqueleto.object3D.traverse((node) => {
        if (node.isMesh) {
          if (!node.userData.origColor) {
            node.userData.origColor = node.material.color.clone();
          }
        }
      });
      console.log("Modelo cargado y colores guardados.");
    });

    canvas.addEventListener("pointerdown", (event) => {
      if (event.button !== 0) return; // Solo clic izquierdo
      seleccionarHueso(event, escena, esqueleto, canvas);
    });

    // --- LÓGICA DE BOTONES DE ZOOM ---
    if(btnIn && btnOut && camaraEl) {
        // Configuración igual a la de tu orbit-controls en HTML
        const targetPosition = new THREE.Vector3(0, -3, -10); 
        const step = 1.5; // Cantidad de zoom por clic
        const minDst = 2; 
        const maxDst = 20; 

        const realizarZoom = (direccion) => {
            const camaraObj = camaraEl.object3D;
            
            // Calcular distancia actual
            const currentDistance = camaraObj.position.distanceTo(targetPosition);
            
            // Vector dirección desde el objetivo hacia la cámara
            const directionVector = new THREE.Vector3()
                .subVectors(camaraObj.position, targetPosition)
                .normalize();

            if (direccion === 'in' && currentDistance > minDst) {
                // Acercar: restamos el vector dirección
                camaraObj.position.addScaledVector(directionVector, -step);
            } 
            else if (direccion === 'out' && currentDistance < maxDst) {
                // Alejar: sumamos el vector dirección
                camaraObj.position.addScaledVector(directionVector, step);
            }
        };

        btnIn.addEventListener("click", (e) => {
            e.preventDefault();
            realizarZoom('in');
        });

        btnOut.addEventListener("click", (e) => {
            e.preventDefault();
            realizarZoom('out');
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
    if (node.isMesh && node.name) objetosClickables.push(node);
  });

  const intersects = raycaster.intersectObjects(objetosClickables, true);

  if (intersects.length === 0) {
    if (huesoSeleccionado && huesoSeleccionado.material && huesoSeleccionado.userData.origColor) {
      huesoSeleccionado.material.color.copy(huesoSeleccionado.userData.origColor);
      huesoSeleccionado = null;
      document.getElementById("titulo").innerText = "Haz clic en un hueso";
      document.getElementById("descripcion").innerText = "Seleccione un hueso para ver su información";
    }
    return;
  }

  event.preventDefault();
  event.stopPropagation();

  const mesh = intersects[0].object;
  console.log("Hiciste clic en:", mesh.name);

  if (huesoSeleccionado && huesoSeleccionado.material && huesoSeleccionado.userData.origColor) {
    huesoSeleccionado.material.color.copy(huesoSeleccionado.userData.origColor);
  }

  if (!mesh.userData.origColor && mesh.material) {
    mesh.userData.origColor = mesh.material.color.clone();
  }

  if (mesh.material) {
    mesh.material.color.set("#ff0000");
  }

  huesoSeleccionado = mesh;

  const clave = (mesh.name || "").toLowerCase();
  if (huesos[clave]) {
    document.getElementById("titulo").innerText = huesos[clave].nombre;
    document.getElementById("descripcion").innerText = huesos[clave].descripcion;
  } else {
    document.getElementById("titulo").innerText = mesh.name || "Hueso";
    document.getElementById("descripcion").innerText = "Descripción no disponible.";
  }
}