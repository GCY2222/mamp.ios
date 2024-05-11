<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Resetting default styles */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Mulish', sans-serif; 
        }

        .php {
            text-align: center; 
        }
    </style>
</head>
<body>
    <div class="php">
        <?php
        $user = $_POST['user'] ?? ''; 
        $password = $_POST['password'] ?? ''; 
        $cadena = $user . ":" . $password;
        $data = file_get_contents("./datos.txt"); 
        if ($data !== false && strpos($data, $cadena) !== false) {
            echo "<p>Acceso correcto.</p>";
        } else {
            echo "<p>Acceso denegado.</p>";
        }
        ?>
    </div>
</body>
</html>
