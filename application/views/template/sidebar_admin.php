  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="<?= base_url(); ?>assets/img/logo.png" alt="Universe Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light"> | Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="#" class="img-circle elevation-2" alt="..."><!-- Ambil dari Login -->
        </div>
        <div class="info">
          <a href="#" class="d-block"></a><!-- Ambil dari Login -->

        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= site_url(); ?>kategori" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <ion-icon name="color-palette"></ion-icon>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>warna" class="nav-link">
              <i class="nav-icon fas fa-palette"></i>
              <p>
                Warna Baju
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- /.card-header -->