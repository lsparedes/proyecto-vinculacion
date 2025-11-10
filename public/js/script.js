// Diccionario (Por cambiar a una BD)
const huesos = {
  pelvis: {
    nombre: "Pelvis",
    descripcion: "Conjunto de huesos que soporta el peso del cuerpo y conecta la columna con las extremidades inferiores."
  },
  radiod: {
    nombre: "Radio derecho",
    descripcion: "Uno de los huesos del antebrazo, ubicado en el lado derecho, el cual permite el movimiento del brazo y la muñeca."
  },
  radiol: {
    nombre: "Radio izquierdo",
    descripcion: "Uno de los huesos del antebrazo, ubicado en el lado izquierdo, el cual permite el movimiento del brazo y la muñeca."
  },
  ulnad: {
    nombre: "Ulna derecha",
    descripcion: "Estabiliza el antebrazo, permite la flexión y extensión del codo al articularse con el húmero, ubicado en el lado derecho."
  },
  ulnal: {
    nombre: "Ulna izquierda",
    descripcion: "Estabiliza el antebrazo, permite la flexión y extensión del codo al articularse con el húmero, ubicado en el lado izquierdo."
  },
  rotulal: {
    nombre: "Rótula izquierda",
    descripcion: "Hueso sesamoideo de la rodilla que protege y mejora la eficiencia del cuádriceps, ubicado en el lado izquierdo."
  },
  rotulad: {
    nombre: "Rótula derecha",
    descripcion: "Hueso sesamoideo de la rodilla que protege y mejora la eficiencia del cuádriceps, ubicado en el lado derecho."
  },
  sacro: {
    nombre: "Sacro",
    descripcion: "Hueso triangular en la base de la columna vertebral que conecta con la pelvis."
  },
  craneo: {
    nombre: "Cráneo",
    descripcion: "Hueso que sostiene y protege el cerebro, encéfalo, ojos y da un sitio de adhesión para los músculos faciales."
  },
  mandibula: {
    nombre: "Mandíbula",
    descripcion: "Permite los movimientos necesarios para masticar y hablar"
  },
  humerod: {
    nombre: "Húmero derecho",
    descripcion: "Es la parte superior del brazo, siendo fundamental para mover el brazo, ubicado en el lado derecho."
  },
  humerol: {
    nombre: "Húmero izquierdo",
    descripcion: "Es la parte superior del brazo, siendo fundamental para mover el brazo, ubicado en el lado izquierdo."
  },
  femurl: {
    nombre:"Fémur izquierdo",
    descripcion: "Hueso mas largo y fuerte del cuerpo, siendo crucial para mantenerse de pie, ubicado en el lado izquierdo."
  },
  femurd: {
    nombre:"Fémur derecho",
    descripcion: "Hueso mas largo y fuerte del cuerpo, siendo crucial para mantenerse de pie, ubicado en el lado derecho."
  },
  tibiad: {
    nombre: "Tibia derecha",
    descripcion: "Transfiere la carga de la rodilla al pie, siendo soporte de peso y estabilidad, ubicado en el lado derecho."
  },
  tibial: {
    nombre: "Tibia izquierda",
    descripcion: "Transfiere la carga de la rodilla al pie, siendo soporte de peso y estabilidad, ubicado en el lado izquierdo."
  },
  fibulad: {
    nombre: "Fíbula derecha",
    descripcion: "Proporciona estabilidad lateral a la parte inferior de la pierna y al tobillo, ubicado en el lado derecho."
  },
  fibulal: {
    nombre: "Fíbula izquierda",
    descripcion: "Proporciona estabilidad lateral a la parte inferior de la pierna y al tobillo, ubicado en el lado izquierdo."
  }
};

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