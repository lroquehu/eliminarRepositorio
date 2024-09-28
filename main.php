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
        header("location: main.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            align-items: center;
            text-align: center;
            font-family: sans-serif;
            background: #555;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center;
        }
        .content, .ordenVertical {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #09f;
            border-radius: 10px;
            padding: 20px;
        }
        .content {
            width: 33.33%;
        }
        .ordenVertical {
            text-align: left;
        }
        label {
            color: #fff;
            font-weight: bold;
            padding: 6px;
        }
        input {
            padding: 5px 10px;
            border-radius: 5px;
            border: 1px solid #fff;
            padding: 6px;
        }
        .enviarBtn {
            padding: 10px 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background: #000;
            cursor: pointer;
            width: 50%;
        }
        .enviarBtn:hover {
            background: #333;
        }
    </style>
</head>
<body>
    <div class="content">
        <form action="" method="post">
            <header>
                <h1>Registro de datos</h1>
            </header>
            <main>
                <div class="ordenVertical">
                    <label for="nombres">Nombres</label>
                        <input type="text" id="nombres" name="nombres" required>
                    <label for="apellidos">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" required>
                    <label for="email">Correo</label>
                        <input type="mail" id="email" name="correo" required>
                    <label for="password">contraseña</label>
                        <input type="password" id="password" name="password" required>
                </div>
            </main>
            <footer>
                <button type="submit" class="enviarBtn" name="enviarBtn">Enviar</button>        
            </footer>
        </form>
    </div>
</body>
</html>