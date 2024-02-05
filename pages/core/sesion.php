<?php
    session_start();

    // Verificar si hay una sesión activa
    if (!isset($_SESSION["username"])) {
      // Si no hay sesión activa, redirigir a la página de inicio de sesión
      header("Location: login-v2.html");
      exit();
    }
?>