document.addEventListener("DOMContentLoaded", function () {
    // Obtener referencia al botón de cancelar
    var cancelarBtn = document.getElementById("cancelarBtn");

    // Añadir un evento click al botón de cancelar
    cancelarBtn.addEventListener("click", function () {
        // Redirigir al usuario de vuelta a la página principal o a donde desees
        window.location.href = "index.html";
    });
});