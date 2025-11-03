document.getElementById("guardarBtn").addEventListener("click", validarFormulario);

function validarFormulario() {
  const codigo = document.getElementById("codigo").value.trim();
  const nombre = document.getElementById("nombre").value.trim();
  const precio = document.getElementById("precio").value.trim();
  const descripcion = document.getElementById("descripcion").value.trim();
  const materiales = document.querySelectorAll("input[name='material[]']:checked");




  // Validar código
  if (!codigo) return alert("El código del producto no puede estar en blanco.");
  if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,15}$/.test(codigo))
    return alert("El código debe tener letras y números, entre 5 y 15 caracteres.");

  // Validar nombre
  if (!nombre) return alert("El nombre del producto no puede estar en blanco.");
  if (nombre.length < 2 || nombre.length > 50)
    return alert("El nombre del producto debe tener entre 2 y 50 caracteres.");

  // Validar precio
  if (!precio) return alert("El precio del producto no puede estar en blanco.");
  if (!/^\d+(\.\d{1,2})?$/.test(precio))
    return alert("El precio debe ser un número positivo con hasta dos decimales.");

  // Validar materiales
  if (materiales.length < 2)
    return alert("Debe seleccionar al menos dos materiales.");

  // Validar descripción
  if (!descripcion) return alert("La descripción no puede estar en blanco.");
  if (descripcion.length < 10 || descripcion.length > 1000)
    return alert("La descripción debe tener entre 10 y 1000 caracteres.");

  // Si pasa las validaciones, enviar datos vía AJAX
  guardarProducto();
}

function guardarProducto() {
  const form = document.getElementById("formProducto");
  const formData = new FormData(form);

  fetch("php/guardar_producto.php", { method: "POST", body: formData })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        alert("Producto guardado con éxito.");

        // 🔹 Blanquear formulario
        form.reset();

        cargarBodegas();
        cargarMonedas();

        // 🔹 Vaciar el select de sucursales
        document.getElementById("sucursal").innerHTML = "<option value=''>Seleccione...</option>";

      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(err => {
      console.error(err);
      alert("Ocurrió un error al guardar el producto.");
    });
}


// Llenado dinámico
function cargarBodegas() {
  fetch("php/obtener_bodegas.php")
    .then(res => res.json())
    .then(data => {
      const bodegaSelect = document.getElementById("bodega");
      bodegaSelect.innerHTML = "<option value=''>Seleccione...</option>";
      data.forEach(b => {
        bodegaSelect.innerHTML += `<option value="${b.id}">${b.nombre}</option>`;
      });
    });
}

function cargarMonedas() {
  fetch("php/obtener_monedas.php")
    .then(res => res.json())
    .then(data => {
      const monedaSelect = document.getElementById("moneda");
      monedaSelect.innerHTML = "<option value=''>Seleccione...</option>";
      data.forEach(m => {
        monedaSelect.innerHTML += `<option value="${m.id}">${m.nombre}</option>`;
      });
    });
}

// 🔹 Cuando la página cargue por primera vez:
window.onload = () => {
  cargarBodegas();
  cargarMonedas();
};

document.getElementById("bodega").addEventListener("change", () => {
  const bodegaId = document.getElementById("bodega").value;
  const sucursalSelect = document.getElementById("sucursal");

  // Limpiar el select de sucursales
  sucursalSelect.innerHTML = "<option value=''>Seleccione...</option>";

  if (!bodegaId) return; // Si no se seleccionó bodega, no hacer nada

  fetch(`php/obtener_sucursales.php?bodega_id=${bodegaId}`)
    .then(res => res.json())
    .then(data => {
      data.forEach(s => {
        sucursalSelect.innerHTML += `<option value="${s.id}">${s.nombre}</option>`;
      });
    });
});
