<?php
include("conexion.php");

$query = $_POST['query'];

$consulta = "SELECT * FROM datos WHERE ID LIKE '%$query%' OR primer_nombre LIKE '%$query%' OR segundo_nombre LIKE '%$query%'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    
    echo '<table>
            <tr>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Acciones</th>
            </tr>';


    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>
                <td>' . $fila['primer_nombre'] . '</td>
                <td>' . $fila['segundo_nombre'] . '</td>
                <!-- Agrega más celdas según sea necesario -->
                <td>
                    <a href="editar.php?id=' . $fila['ID'] . '">Editar</a>
                    |
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="id_eliminar" value="' . $fila['ID'] . '">
                        <input type="submit" value="Eliminar" name="eliminar" onclick="return confirm(\'¿Estás seguro de que deseas eliminar toda la información de este usuario?\')">
                    </form>
                </td>
            </tr>';
    }

    echo '</table>';
} else {
    echo 'No hay resultados.';
}


mysqli_close($conexion);
?>