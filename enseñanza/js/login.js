function validarFormulario() {
    var correo = document.getElementById('correo').value;
    var contrasena = document.getElementById('contrasena').value;

    if (correo.trim() === '' || contrasena.trim() === '') {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    return true;
}