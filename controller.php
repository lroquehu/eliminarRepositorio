<?php
    include("conexion.php");
    if(isset($_POST["enviarBtn"])){
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $consulta = "INSERT INTO `usuario` (`nombres`, `apellidos`, `correo`, `contraseña`) VALUES ('$nombres', '$apellidos', '$correo', '$password')";
        $resultado = mysqli_query($conexion, $consulta) or die("Error: " . mysqli_error($conexion));
        echo "si";
        header("location: main.html");
    }

?>