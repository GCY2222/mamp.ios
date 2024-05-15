<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include "persona.php";

        // Estableciendo conexiones
        $servername = "localhost";
        $username = "mamp";
        $password = "";
        $dbname = "Datos";

        // Estableciendo conexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexion
        if ($conn->connect_error) {
            die("No se pudo conectar con la base de datos: " . $conn->connect_error);
        }

        // Verificar que se han enviado datos del formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $ci = $_POST["ci"];

            // Consulta SQL
            $sql = "INSERT INTO `personas` (`Nombre`, `Apellido`, `Edad`, `Ci`) VALUES ('$nombre', '$apellido', '$edad', '$ci')";
            $result = $conn->query($sql);

            // Verificaciones aplicadas
            if ($result === TRUE) {
                echo '<div class="message success">Acceso correcto.</div>';
            } else {
                echo '<div class="message error">Acceso denegado. Hubo un error al insertar los datos.</div>';
            }

            // Cerrar conexion
            $conn->close();

            // Obtener datos de entrada
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $ci = $_POST['ci'];

            // Procedimiento si se reciben todos los datos correctamente
            $persona = new Persona($nombre, $apellido, $edad, $ci);

            // Mostrar datos
            echo "<h2>Datos personales:</h2>";
            echo "<p>Nombre: " . $persona->getNombre() . "</p>";
            echo "<p>Apellido: " . $persona->getApellido() . "</p>";
            echo "<p>Edad: " . $persona->getEdad() . "</p>";
            echo "<p>CI: " . $persona->getCi() . "</p>";
        } else {
            echo "Operación denegada, vuelva a intentar nuevamente.";
        }
        ?>
    </div>
</body>
</html>
