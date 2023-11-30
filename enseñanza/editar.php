<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="./css/editar.css">
</head>
<body>

<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id_usuario = $_GET['id'];

    $consulta = "SELECT * FROM datos WHERE ID = $id_usuario";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        ?>
        <h2>Editar Usuario</h2>
        <form id="editarForm" action="actualizar_usuario.php" method="post">
            <input type="hidden" name="id" value="<?php echo $usuario['ID']; ?>">
            <label for="nombreuno">Primer Nombre:</label>
            <input type="text" name="nombreuno" value="<?php echo $usuario['primer_nombre']; ?>">
            <label for="nombredos">Segundo Nombre:</label>
            <input type="text" name="nombredos" value="<?php echo $usuario['segundo_nombre']; ?>">
            <label for="apellidouno">Primer Apellido:</label>
            <input type="text" name="apellidouno" value="<?php echo $usuario['primer_apellido']; ?>">
            <label for="apellidodos">Segundo Apellido:</label>
            <input type="text" name="apellidodos" value="<?php echo $usuario['segundo_apellido']; ?>">
            <label for="correo">Correo:</label>
            <input type="text" name="correo" value="<?php echo $usuario['correo']; ?>">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" value="<?php echo $usuario['telefono']; ?>">
            <label for="cedula">Cédula:</label>
            <input type="text" name="cedula" value="<?php echo $usuario['ID']; ?>">
            <label for="fechaex">Fecha Expedición:</label>
            <input type="text" name="fechaex" value="<?php echo $usuario['fecha_expedicion']; ?>">
            <label for="sangre">Grupo Sanguíneo:</label>
            <input type="text" name="sangre" value="<?php echo $usuario['grupo_sanguineo']; ?>">
            <label for="sangre">Categoria:</label>
            <input type="text" name="categoria" value="<?php echo $usuario['categoria']; ?>">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" value="<?php echo $usuario['edad']; ?>">

            <input type="submit" value="Actualizar">
        </form>

        <button id="cancelarBtn">Cancelar</button>

        <script src="editar.js"></script>
        <?php
    } else {
        echo "Usuario no encontrado.";
    }
} else {
    echo "ID de usuario no proporcionado.";
}

mysqli_close($conexion);
?>

</body>
</html>