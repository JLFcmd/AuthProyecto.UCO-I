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
    $password = hash('sha256', $_POST['password']); // Encriptar la contraseña con SHA-256

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>