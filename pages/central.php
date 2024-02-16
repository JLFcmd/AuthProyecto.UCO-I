<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php'; ?>
</head>
<body class="hold-transition sidebar-mini">
  <div id="central-content" style="text-align: center; margin-top: 20px;">
    <!-- Contenido central cargado dinámicamente -->
    <?php
    if(isset($_GET['caja'])) {
      $caja = $_GET['caja'];
      if($caja == 'dashboard') {
        include 'centralpages/dashboard.php';
      } else {
        // Aquí puedes incluir otros casos según sea necesario
      }
    }
    ?>
  </div>

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>