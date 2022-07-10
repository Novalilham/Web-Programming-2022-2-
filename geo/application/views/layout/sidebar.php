<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?=base_url()?>dist/img/geo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Graha Event Organizer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-code-branch"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/user/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/user/kegiatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/user/kategori_peserta" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Peserta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/user/jenis_kegiatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jenis Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/user/daftar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>