<?php
// Iniciar la sesión
session_start();

// Incluir el archivo de conexión
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    // Obtener datos del formulario
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Consulta preparada para evitar inyección de SQL
    $consulta = $conexion->prepare("SELECT password FROM usuarios WHERE username = ?");
    $consulta->bind_param("s", $username);

    // Ejecutar la consulta
    $consulta->execute();

    // Obtener el resultado
    $resultado = $consulta->get_result();

    // Verificar si hay filas coincidentes (usuario encontrado)
    if ($resultado->num_rows > 0) {
        // Obtener la contraseña almacenada en la base de datos
        $fila = $resultado->fetch_assoc();
        $hashedPasswordDB = $fila["password"];

        // Verificar si la contraseña proporcionada coincide con la almacenada
        if (hash('sha256', $password) == $hashedPasswordDB) {
            // Credenciales válidas, iniciar sesión y redirigir
            $_SESSION["username"] = $username;
            header("Location: ../principal.php");
            exit();
        }
    }

    // Credenciales inválidas, mostrar mensaje de error
    header("Location: ../core/uci.php");
}

// Cerrar la consulta
$consulta->close();

// Cerrar la conexión (esto puede ir al final de tu script)
$conexion->close();
?>
