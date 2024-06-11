<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <div class="header">
        <h1>Prueba escrita de programación web</h1>
        <h3>Ejercicio 1</h3>
    </div>
    <div class="main">
        <?php
            $cedula = "55672216";
            $length = strlen($cedula); 

            echo "<p>Array indexado:</p>";
            echo "<ul>";
            for ($i = 0; $i < $length; $i++) {
                echo "<li>Index $i: ". $cedula[$i]. "</li>";
            }
            echo "</ul>";

            $cedula_array = str_split($cedula);
      ?>
    </div>
</body>
</html>