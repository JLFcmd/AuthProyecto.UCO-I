<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio de Sesión</title>
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="css/login-register.css">


</head>

<body>
  <div class="container">
    <div class="login-container">
      <div class="text-center">
        <img src="../img/logogrande.png" alt="logograndeUCOIDIOMAS" class="logo">
      </div>
      <form action="./core/login.php" method="post">
        <div class="form-group">
          <label for="username">Nombre de Usuario:</label>
          <input type="text" class="form-control" name="username" id="username"
            placeholder="Ingrese un nombre de usuario" required>
        </div>
        <div class="form-group">
          <label for="password">Contraseña:</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese una contraseña"
            required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        <br>
        <br>
        <a class="btn-green" href="index2.php">¿No tienes una cuenta?, ¡registrarse!</a>
      </form>
    </div>
  </div>

  <!-- Script de tiempo de logout -->
  <script src="./core/timeout.js"></script>
</body>
</html>