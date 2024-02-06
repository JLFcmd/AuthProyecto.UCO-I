<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usuariosucoi";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']); // Encriptar la contraseña con SHA-256
    $admin = isset($_POST['admin']) ? 1 : 0; // Verifica si la casilla de selección está marcada

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (username, email, password, admin) VALUES ('$username', '$email', '$password', '$admin')";

    if ($conn->query($sql) === TRUE) {
        // Inicia el contador en 2 segundos
        $tiempo_espera = 2;
        // Redirige a otra página después de 2 segundos 
        header("refresh:$tiempo_espera;url=../../pages/index.php");
        ?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../css/jsna-uci.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Registro Usuario</title>
            </head>
            <body>
                <div>
                    <p>Usuario registrado correctamente</p>
                </div>
            </body>
        </html>
        <?php
    } else {
        // Inicia el contador en 2 segundos
        $tiempo_espera = 2;
        // Redirige a otra página después de 2 segundos 
        header("refresh:$tiempo_espera;url=../../pages/index.php");
        ?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../css/jsna-uci.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Registro Usuario</title>
            </head>
            <body>
                <div>
                    <p>Usuario no registrado</p>
                </div>
            </body>
        </html>
        <?php
    }

    // Cerrar la conexión
    $conn->close();
}
?>