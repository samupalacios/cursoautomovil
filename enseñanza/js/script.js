function buscarUsuarios() {
    var query = $('#busqueda').val();
    $.ajax({
        type: 'POST',
        url: 'buscar.php',
        data: { query: query },
        success: function(response) {
            $('#resultados').html(response);
        }
    });
}

$(document).ready(function() {
    $('#busqueda').keyup(function() {
        buscarUsuarios();
    });
});