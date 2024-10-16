function openModal(id) {
    // Petición AJAX para obtener los detalles del plato
    fetch(`/platos/${id}`)
        .then((response) => response.json())
        .then((plato) => {
            // Asignar los valores al modal
            document.getElementById("modal-nombre_plato").innerText =
                plato.nombre_plato;
            document.getElementById("modal-descripcion").innerText =
                plato.descripcion;
            document.getElementById("modal-precio").innerText =
                "Precio: $" + plato.precio;
            document.getElementById("modal-imagen").src =
                "/storage/" + plato.imagen;

            // Restablecer la cantidad a 1 al abrir el modal
            //document.getElementById("modal-cantidad").value = 1;

            // Mostrar el modal
            document.getElementById("platoModal").classList.remove("hidden");
        })
        .catch((error) => console.error("Error:", error));
}

function closeModal() {
    document.getElementById("platoModal").classList.add("hidden");
}
/*
function increaseQuantity() {
    let quantityInput = document.getElementById("modal-cantidad");
    quantityInput.value = parseInt(quantityInput.value) + 1;
    updateHiddenQuantity(); // Actualiza el campo oculto
}

function decreaseQuantity() {
    let quantityInput = document.getElementById("modal-cantidad");
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
        updateHiddenQuantity(); // Actualiza el campo oculto
    }
}

// Función para actualizar el campo oculto 'cantidad' en el formulario
function updateHiddenQuantity() {
    let quantityInput = document.getElementById('modal-cantidad').value;
    document.getElementById('hidden-cantidad').value = quantityInput;
}
*/
