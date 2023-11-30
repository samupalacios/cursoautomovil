<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST['id'];
    $nombreuno = $_POST['nombreuno'];
    $nombredos = $_POST['nombredos'];
    $apellidouno = $_POST['apellidouno'];
    $apellidodos = $_POST['apellidodos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $cedula = $_POST['cedula'];
    $fechaex = $_POST['fechaex'];
    $sangre = $_POST['sangre'];
    $categoria = $_POST['categoria'];
    $edad = $_POST['edad'];
    
    $consulta = "UPDATE datos SET
                    primer_nombre = '$nombreuno',
                    segundo_nombre = '$nombredos',
                    primer_apellido = '$apellidouno',
                    segundo_apellido = '$apellidodos',
                    correo = '$correo',
                    telefono = '$telefono',
                    ID = '$cedula',
                    fecha_expedicion = '$fechaex',
                    categoria='$categoria',
                    grupo_sanguineo = '$sangre',
                    edad = '$edad'
                    WHERE ID = $id_usuario";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        
        header("Location: administrador.php");
        exit();
    } else {
        echo "Error al actualizar el usuario: " . mysqli_error($conexion);
    }
} else {
    echo "Acceso no válido.";
}


mysqli_close($conexion);
?>