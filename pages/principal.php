



<?php
  include '../core/php/sesion.php';
  include '../core/php/verificarJS.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Página de inicio</title>
  <?php
  include 'header.php';
  ?>
</head>

<body>
    <!-- Contenido de la página -->
   
    <?php
    // Incluye el menú lateral
    include('sidebar.php');
    ?>

    <?php
    // Incluye el menu central
    include('central.php');
    ?>

    <?php
    // Incluye el footer
    include('footer.php');
    ?>
    
  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../core/js/adminlte.min.js"></script>
  <!-- Script de tiempo de logout -->
  <script src="../core/js/timeout.js"></script>
  <!-- Script de los actives -->
  <script src="../core/js/active.js"></script>

</body>
</html>