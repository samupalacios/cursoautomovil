<!DOCTYPE html>
<html>

<head>
    <title>Curso de Automoviles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./imagenes/faviconn.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <section class="form-register">
        <h4>Formulario Registro</h4>
        <form method="post" action="registrar.php" enctype="multipart/form-data">
            <div>
                <label for="formFile" class="form-label">Nombres</label>
                <input class="controls" type="text" name="nombreuno" id="nombreuno" placeholder="Ingrese su Primer Nombre" required>
                <input class="controls" type="text" name="nombredos" id="nombredos" placeholder="Ingrese su Segundo Nombre" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Apellidos</label>
                <input class="controls" type="text" name="apellidouno" id="apellidouno" placeholder="Ingrese su Primer Apellido" required>
                <input class="controls" type="text" name="apellidodos" id="apellidodos" placeholder="Ingrese su Segundo Apellido" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Correo</label>
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Numero de telefono</label>
                <input class="controls" type="tel" name="telefono" id="telefono" placeholder="Ingrese su telefono" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Documento de identidad</label>
                <input class="controls" type="id" name="cedula" placeholder="Ingrese su cedula" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Fecha de expedicion</label>
                <input class="controls" type="date" name="fechaex" id="fechaex" placeholder="Fecha de expedicion de su documento" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Grupo sanguineo</label>
                <input class="controls" type="text" name="sangre" id="sangre" placeholder="Ingrese su tipo de sangre" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Tipo de Categoria</label>
                <input class="controls" type="text" name="categoria" id="categoria" placeholder="Ingrese su tipo de sangre" required>
            </div>
            <div>
                <label for="formFile" class="form-label">Edad</label>
                <input class="controls" type="number" name="edad" id="edad" placeholder="Ingrese su edad" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Cedula de Ciudadania</label>
                <input class="form-control" name="cedulados" type="file" id="formFile" required>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Paz y salvo con el Transito</label>
                <input class="form-control" name="salvo" type="file" id="formFileMultiple" multiple required>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">RUT</label>
                <input class="form-control" name="rut" type="file" id="formFileMultiple" multiple required>
            </div>
            <input class="botons" type="submit" name="envia" value="Enviar">
        </form>
    </section>
</body>

</html>
