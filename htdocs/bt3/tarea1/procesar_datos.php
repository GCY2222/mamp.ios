<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procesar_datos.php</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="resultado">
        <?php
        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            if($num1 > $num2 && $num1 > $num3){
                echo "El número más GRANDE se encuentra en el primer campo.<br>";
            } else if($num2 > $num3 && $num2 > $num1){
                echo "El número más GRANDE se encuentra en el segundo campo.<br>";
            } else {
                echo "El número más GRANDE se encuentra en el tercer campo.<br>";
            }


            if($num1 < $num2 && $num1 < $num3){
                echo " El número más CHICO se encuentra en el primer campo.";
            } else if ($num2 < $num3 && $num2 < $num1){
                echo " El número más CHICO se encuentra en el segundo campo.";
            } else {
                echo " El número más CHICO se encuentra en el tercer campo.";
            }
        } else {
            echo "Error: No se han recibido los tres números correctamente.";
        }
        ?>
    </div>
</body>
</html>
