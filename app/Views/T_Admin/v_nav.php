  <?php
    $request = \Config\Services::request();
    $cek = $request->uri->getSegment(1);

    // dd($cek);

    ?>



  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('Home/'); ?>" class="brand-link">
          <img src="<?= base_url('img/logo.png'); ?>" alt="AdminLTE2 SALAMLogo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Desa Salam</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <!-- <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div> -->
              <div class="info">
                  <a href="#" class="d-block"><?= session('LoggedUserData')['email']; ?></a>
              </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-header">MENU</li>
                  <li class="nav-item">
                      <a href="<?= base_url('Admin/'); ?>" class="nav-link <?= $cek == "Admin" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('PerangkatDesa/'); ?>" class="nav-link <?= $cek == "PerangkatDesa" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-user-tie"></i>
                          <p>
                              Anggota kelompok
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('Berita/'); ?>" class="nav-link <?= $cek == "Berita" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              Berita
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('Kategori/'); ?>" class="nav-link <?= $cek == "Kategori" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Kategori Berita
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('Galeri/'); ?>" class="nav-link <?= $cek == "Galeri" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-camera"></i>
                          <p>
                              Galeri Salam
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('DataAdmin/'); ?>" class="nav-link <?= $cek == "DataAdmin" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              User
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('Contact/'); ?>" class="nav-link <?= $cek == "Contact" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-address-book"></i>
                          <p>
                              Contact
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('Setting/'); ?>" class="nav-link <?= $cek == "Setting" ? 'active' : ''; ?>">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Web Setting
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('Login/keluar'); ?>" class="nav-link ">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              Logout
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
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active"><?= $title; ?></li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">