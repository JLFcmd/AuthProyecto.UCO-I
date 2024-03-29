<!-- sidebar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php'; ?>
  <link rel="stylesheet" href="../core/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" onclick="expandirDashboard()"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <img class="imguser" src="../core/img/usericon.png" alt="" style="width: 25px; margin-left: auto;">
    <div class="dropdown">
      <button class="dropbtn">
        <?php
        if (isset($_SESSION["username"])) {
          echo $_SESSION["username"];
        } else {
          header("Location: index.php");
          exit();
        }
        ?>
      </button>
      <div class="dropdown-content">
        <a href="#">Cuenta</a>
        <a href="#">Ajustes</a>
        <?php
          if (isset($_SESSION["username"]) && isset($_SESSION["admin"]) && $_SESSION["admin"] == 1) {
        ?>
            <a href="index2.php">Registrar</a>
        <?php
          }
        ?>
        <a href="../core/php/logout.php">Cerrar Sesión</a>
      </div>
    </div>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4" style="background-color:#092d50">
    <!-- Brand Logo -->
    <a style="text-decoration: none; color: white" href="#" class="brand-link">
      <span class="brand-text font-weight-light" style="margin: -7px; font-size: 20px"><b>AdminLTE</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="principal.php?caja=dashboard" id="dashboardLink" class="nav-link caja-btn active" data-caja="dashboard">
              <i class="nav-icon fas fa-bolt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link caja-btn" data-caja="caja2">
              <i class="nav-icon fas fa-bolt"></i>
              <p>Caja 2</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../core/js/adminlte.min.js"></script>
  <!-- Script de los actives (Botones sidebar) -->
  <script src="../core/js/active.js"></script>
  <!-- Script para manejar la redirección de los enlaces del sidebar -->
  <script src="../core/js/sidebarRedirection.js"></script>
</body>
</html>