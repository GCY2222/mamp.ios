<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["anio"])) {
        $anio = intval($_GET["anio"]);
        if ($anio > 0) {
            if (($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0) {
                $resultado = "El año $anio es bisiesto.";
            } else {
                $resultado = "El año $anio no es bisiesto.";
            }
        } else {
            $resultado = "El año ingresado no es válido.";
        }
    } else {
        $resultado = "No se proporcionó un año.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado</h1>
        <div id="resultado">
            <?php echo isset($resultado) ? $resultado : ""; ?>
        </div>
        <div class="content">
            <a href="index.html" class="btn">Volver</a>
        </div>
    </div>
</body>
</html>
