<?php
    // Inicia el contador en 2 segundos
    $tiempo_espera = 2;
    // Redirige a otra página después de 2 segundos 
    header("refresh:$tiempo_espera;url=../login-v2.html");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/jsna-uci.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección en PHP</title>
</head>
<body>
    <div>
        <p>Usuario o contraseña incorrectos</p>
        <p>Intentalo de nuevo</p>
    </div>
</body>
</html>