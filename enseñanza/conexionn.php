<?php  
$mysqli  = mysqli_connect("localhost", "root", "", "registro");

// Verifica la conexión
if (mysqli_connect_errno()) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}
?>