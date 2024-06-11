<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Inicio de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .message {
            margin-bottom: 20px;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $servername = "localhost";
        $username = "mamp";
        $password = "";
        $dbname = "ejercicio3";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("No se ha podido establecer una conexión con la base de datos: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];

            $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<div class="message success">Logueado CORRECTAMENTE.</div>';
            } else {
                echo '<div class="message error">Acceso denegado. El nombre de usuario o la contraseña son incorrectos.</div>';
            }
        }

        $conn->close();
        ?>
    </div>
</body>
</html> 
