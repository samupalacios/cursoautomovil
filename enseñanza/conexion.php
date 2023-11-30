<?php  
$conexion = mysqli_connect("localhost", "root", "", "prueba");

// Verifica la conexión
if (mysqli_connect_errno()) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}
?>