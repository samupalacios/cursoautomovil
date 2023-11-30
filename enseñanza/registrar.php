<?php 
include("conexion.php");
/*echo "<pre>";
var_dump($_FILES);
echo "</pre>";*/

if(isset($_POST['envia'])){

       
        $nombreuno = trim($_POST['nombreuno']);
        $nombredos = trim($_POST['nombredos']);
        $apellidouno = trim($_POST['apellidouno']);
        $apellidodos = trim($_POST['apellidodos']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $cedula = trim($_POST['cedula']);
        $fechaex = trim($_POST['fechaex']);
        $sangre = trim($_POST['sangre']);
        $categoria = trim($_POST['categoria']);
        $edad = trim($_POST['edad']);
        
        // Accede a los atributos específicos de $_FILES
        $cedulados = trim($_FILES['cedulados']['full_path']);
        $salvo = trim($_FILES['salvo']['full_path']);
        $rut = trim($_FILES['rut']['full_path']);
        
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, correo, telefono, ID, fecha_expedicion, grupo_sanguineo,categoria, edad, cedula_dos, paz_y_salvo, rut, fecha)
                     VALUES('$nombreuno', '$nombredos', '$apellidouno', '$apellidodos', '$correo', '$telefono', '$cedula', '$fechaex', '$sangre', '$categoria', '$edad', '$cedulados', '$salvo', '$rut', '$fecha')";
                     
        $resultado = mysqli_query($conexion, $consulta);
       /* echo "<pre>";
        var_dump($resultado);
        echo "</pre>";*/
        
        if ($resultado) {
            echo'
        <script>
        alert("USUARIO RREGISTRADO CON EXITO");
        window.location="index.html"
        </script>';
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    
    
    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Muestra la información usando var_dump
       /* echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
    } else {
        // Si no se ha enviado, muestra un mensaje de error o redirige
        echo "El formulario no ha sido enviado.";
    }
}
?>
