<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    
        * {
            padding: 0;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: rgba(252, 172, 24, 0.957);
            text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 80vh;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            // Método para obtener los datos ingresados en los campos
            $num1 = isset($_GET['campo1']) ? $_GET['campo1'] : null;
            $num2 = isset($_GET['campo2']) ? $_GET['campo2'] : null;
            $num3 = isset($_GET['campo3']) ? $_GET['campo3'] : null;

            // Validación de que se han ingresado números
            if(!is_numeric($num1) || !is_numeric($num2) || !is_numeric($num3)){
                echo "Por favor, ingrese números válidos.";
            } else {
                // Número mayor
                $mayor = max($num1, $num2, $num3);

                // Número menor
                $menor = min($num1, $num2, $num3);

                // Mostrar resultados
                echo "El número mayor es: " . $mayor . "<br>";
                echo "El número menor es: " . $menor;
            }
        }
        ?>
    </div>
    <a href="index.html">
    <button>Volver</button>
  </a> 
</body>
</html>
