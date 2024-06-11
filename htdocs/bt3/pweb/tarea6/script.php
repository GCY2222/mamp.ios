<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>
</head>
<body>
    <div class="main">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cedula = $_POST["cedula"];
            $length = strlen($cedula); 

            echo "<p>Array indexado:</p>";
            echo "<ul>";
            for ($i = 0; $i < $length; $i++) {
                echo "<li>Index $i: ". $cedula[$i]. "</li>";
            }
            echo "</ul>";

            $cedula_array = str_split($cedula);
            asort($cedula_array); 

            echo "<p>Array ordenado en orden ascendente:</p>";
            echo "<p>". implode("", $cedula_array)."</p>";
        }
      ?>
    </div>
</body>
</html>