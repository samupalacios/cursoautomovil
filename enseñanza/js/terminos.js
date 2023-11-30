document.addEventListener("DOMContentLoaded", function () {
    var terminosCondicionesSection = document.querySelector(".terminos-condiciones");
    var toggleButton = document.querySelector("#toggleTerminosCondiciones");

    if (terminosCondicionesSection && toggleButton) {
        terminosCondicionesSection.style.display = "none";

        toggleButton.addEventListener("click", function () {
            if (terminosCondicionesSection.style.display === "none" || terminosCondicionesSection.style.display === "") {
                terminosCondicionesSection.style.display = "block";
                toggleButton.textContent = "Esconder Términos y Condiciones";
            } else {
                terminosCondicionesSection.style.display = "none";
                toggleButton.textContent = "Mostrar Términos y Condiciones";
            }
        });
    }
});
