<?php


session_start();
if (!isset($_SESSION['usuario']) || !isset($_SESSION['contrasena'])) {    
header("Location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./js/script.js"></script>
</head>
<body>

<h1>Lista de Usuarios</h1>

<input type="text" id="busqueda" placeholder="Buscar Usuario">
<div id="resultados"></div>

<?php

include("conexion.php");

if (isset($_POST['eliminar'])) {
    $id_eliminar = $_POST['id_eliminar'];
    $consulta_eliminar = "DELETE FROM datos WHERE ID = '$id_eliminar'";
    $resultado_eliminar = mysqli_query($conexion, $consulta_eliminar);

    if ($resultado_eliminar) {
        echo '<script>alert("Usuario eliminado con éxito.");</script>';
    } else {
        echo '<script>alert("Error al eliminar el usuario.");</script>';
    }
}

$consulta = "SELECT * FROM datos";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    echo '<table>
            <tr>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Cédula</th>
                <th>Fecha Expedición</th>
                <th>Grupo Sanguíneo</th>
                <th>Categoria</th>
                <th>Edad</th>
                <th>Cédula Dos</th>
                <th>Paz y Salvo</th>
                <th>RUT</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>';

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>
                <td>' . $fila['primer_nombre'] . '</td>
                <td>' . $fila['segundo_nombre'] . '</td>
                <td>' . $fila['primer_apellido'] . '</td>
                <td>' . $fila['segundo_apellido'] . '</td>
                <td>' . $fila['correo'] . '</td>
                <td>' . $fila['telefono'] . '</td>
                <td>' . $fila['ID'] . '</td>
                <td>' . $fila['fecha_expedicion'] . '</td>
                <td>' . $fila['grupo_sanguineo'] . '</td>
                <td>' . $fila['categoria'] . '</td>
                <td>' . $fila['edad'] . '</td>
                <td>' . $fila['cedula_dos'] . '</td>
                <td>' . $fila['paz_y_salvo'] . '</td>
                <td>' . $fila['rut'] . '</td>
                <td>' . $fila['fecha'] . '</td>
                <td>
                    <a href="editar.php?id=' . $fila['ID'] . '">Editar</a>
                    |
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="id_eliminar" value="' . $fila['ID'] . '">
                        <input type="submit" value="Eliminar" id="eliminar" name="eliminar" onclick="return confirm(\'¿Estás seguro de que deseas eliminar toda la información de este usuario?\')">
                    </form>
                </td>
            </tr>';
    }

    echo '</table>';
} else {
    echo 'No hay datos en la base de datos.';
}

mysqli_close($conexion);
?>

</body>
</html>