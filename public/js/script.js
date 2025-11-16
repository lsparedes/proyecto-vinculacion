const huesos = huesosDesdeLaravel;
let huesoSeleccionado = null;

document.addEventListener("DOMContentLoaded", () => {
  const escena = document.querySelector("a-scene");
  const esqueleto = document.querySelector("#esqueleto");
  // ¡¡AÑADIMOS ESTA LÍNEA!!
  const visor = document.querySelector("#visor"); 

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
      console.log("Modelo cargado y colores guardados.");
    });

    canvas.addEventListener("pointerdown", (event) => {
      if (event.button !== 0) return;
      seleccionarHueso(event, escena, esqueleto, canvas);
    });
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