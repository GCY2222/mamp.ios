<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script.response</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
            background-color: pink;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .resultado{
            margin-top: 20px;
        }

        button{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        // Verificación, datos enviados correctamente al servidor
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET["anio"])){
                $anio = intval($_GET["anio"]);
                if($anio > 0){
                    // Verificación de los datos ingresados en el campo "anio"
                    function esBisiesto($anio){
                        return ($anio % 4 === 0 && $anio % 100 !== 0) || $anio % 400 === 0;
                    }
                    // Creación de variable donde se almacenará el resultado
                    $resultado = esBisiesto($anio) ? "Si" : "No";
                    echo "El año $anio, $resultado es bisiesto.";
                } else {
                    echo "Por favor, ingrese un número válido.";
                }
            }
        }
        ?>
    </div>
    <a href="index.html">
        <button>volver</button>
</body>
</html>
