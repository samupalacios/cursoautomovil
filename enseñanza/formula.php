<?php 
include("conexionn.php");
/*echo "<pre>";
var_dump($_FILES);
echo "</pre>";*/

if(isset($_POST['registrar'])){

       
        $_replyto = trim($_POST['_replyto']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO datos(email,fecha)
                     VALUES('$_replyto','$fecha')";
                     
        $resultado = mysqli_query($conexionn, $consulta);

        if ($resultado) {
            echo'
        <script>
        alert("USUARIO RREGISTRADO CON EXITO");
        window.location="index.html"
        </script>';
        } else {
            echo "Error: " . mysqli_error($conexionn);
        }
       /* echo "<pre>";*/
}