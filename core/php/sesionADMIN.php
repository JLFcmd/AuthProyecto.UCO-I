<?php
    session_start();

    // Verificar si no hay una sesión activa o si el usuario no tiene el campo admin en 1
    if (!isset($_SESSION["username"]) || !isset($_SESSION["admin"]) || $_SESSION["admin"] != 1) {
      // Si no hay sesión activa o el usuario no tiene el campo admin en 1, redirigir a la página de inicio de sesión
      header("Location: ../../pages/index.php");
      exit();
    }
?>
