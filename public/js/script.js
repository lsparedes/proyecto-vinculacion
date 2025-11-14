// Diccionario (Por cambiar a una BD)
const huesos = huesosDesdeLaravel;

let huesoSeleccionado = null;

document.addEventListener("DOMContentLoaded", () => {
  const escena = document.querySelector("a-scene");
  const esqueleto = document.querySelector("#esqueleto");
  const camEntity = document.querySelector("#zoom");

    escena.addEventListener("loaded", () => {
    const canvas = escena.renderer.domElement;

    canvas.addEventListener("contextmenu", (e) => e.preventDefault());

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

      event.preventDefault();
      event.stopPropagation();

      seleccionarHueso(event, escena, esqueleto, canvas);
    });
  });
})

// ================= Función para raycast y selección =================
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

  if (intersects.length === 0) return;

  // Tomar el objeto exacto clicado
  const mesh = intersects[0].object;
  console.log("Hiciste clic en:", mesh.name);

  // Restaurar color del hueso anterior
  if (huesoSeleccionado && huesoSeleccionado.material && huesoSeleccionado.userData.origColor) {
    huesoSeleccionado.material.color.copy(huesoSeleccionado.userData.origColor);
  }

  // Guardar color original si no lo tiene
  if (!mesh.userData.origColor && mesh.material) {
    mesh.userData.origColor = mesh.material.color.clone();
  }

  // Pintar solo el hueso clicado
  if (mesh.material) {
    mesh.material.color.set("#ff0000");
  }

  huesoSeleccionado = mesh;

  // Mostrar información del hueso
  const clave = (mesh.name || "").toLowerCase();
  if (huesos[clave]) {
    document.getElementById("titulo").innerText = huesos[clave].nombre;
    document.getElementById("descripcion").innerText = huesos[clave].descripcion;
  } else {
    document.getElementById("titulo").innerText = mesh.name || "Hueso";
    document.getElementById("descripcion").innerText = "Descripción no disponible.";
  }
}