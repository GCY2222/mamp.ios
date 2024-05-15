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
        // Establecer datos para la conexión a la base de datos
        $servername = "localhost";
        $username = "mamp";
        $password = "";
        $dbname = "Usuarios";

        // Establecer conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("No se ha podido establecer una conexión con la base de datos: " . $conn->connect_error);
        }

        // Verificar si se han enviado datos del formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Consulta SQL
            $sql = "SELECT * FROM usuarios WHERE nombre='$username' AND clave='$password'";
            $result = $conn->query($sql);

            // Verificar si se encontraron coincidencias
            if ($result->num_rows > 0) {
                echo '<div class="message success">Acceso correcto.</div>';
            } else {
                echo '<div class="message error">Acceso denegado. El nombre de usuario o la contraseña son incorrectos.</div>';
            }
        }

        // Cerrar conexión
        $conn->close();
        ?>
    </div>
</body>
</html>
