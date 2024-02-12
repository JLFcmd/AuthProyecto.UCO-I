<!DOCTYPE html>
<html lang="en">
<head>

  <?php
  include 'header.php';
  ?>

</head>

<body class="hold-transition sidebar-mini">
  <!-- Menú Central Entero -->
  <div style="text-align: center; margin-top: 20px;">
    <!-- Agrega más botones según sea necesario -->
    <?php
    if (isset($_GET['caja'])){
      $selectCaja = $_GET['caja'];
      switch($selectCaja){
        case 'dashboard':
          include './centralpages/dashboard.php';
          break;
        case '':

        default:
          include './centralpages/dashboard.php';
      }
    }
    ?>
  </div>

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Script de los actives -->
  <script src="../core/js/active.js"></script>

</body>
</html>