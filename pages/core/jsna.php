<?php
    // Inicia el contador en 5 segundos
    $tiempo_espera = 5;
    // Redirige a otra página después de 5 segundos 
    header("refresh:$tiempo_espera;url=../index.php");
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
        <p>Esta aplicación requiere que JavaScript esté habilitado en tu navegador.</p>
        <p>Por favor, activa JavaScript e inicia sesión de nuevo.</p>
    </div>
</body>
</html>