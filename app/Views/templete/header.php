<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="JUAN CARLOS GUTIERRES" name="author">
  <title>Accessa | Logistic</title>
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/public/dist/img/AdminLTELogo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script>
    //Se genera URL dinamica
    var url = "<?= base_url(); ?>";
  </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url(); ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <nav aria-label="nav-bar" class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= site_url('/'); ?>" class="nav-link">Home</a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fas fa-angle-down"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right  rounded-pill" style="left: inherit; right: 0px;">
            <a class="btn d-block w-100 rounded-pill" style="border-color: #1d2540;" onclick="$('#modalConfirm').modal('show');">
                <i data-feather="log-out"class="feather-sm text-danger me-1 ms-1"></i> Cerrar sesión
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="<?= site_url('/'); ?>" class="brand-link">
        <img src="<?= base_url(); ?>/public/dist/img/AdminLTELogo.png" alt="Accessa Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Accessa | Logistic</span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?=  base_url()."/public/dist/img/AdminLTELogo.png"?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?= site_url('/'); ?>" class="d-block">ADMIN USER</a>
          </div>
        </div>
        <nav aria-label="nav bar 2" class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Administración</li>
            <li class="nav-item">
              <a href="<?= site_url('/'); ?>" class="nav-link">
                <em class="nav-icon fas fa-user"></em>
                  <p>Empleados</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
