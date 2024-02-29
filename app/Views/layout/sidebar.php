<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="<?= site_url('dashboard-admin'); ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- <li class="nav-heading">Pages</li> -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('data-kategori'); ?>">
            <i class="bi bi-circle"></i><span>Kategori Produk</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('data-satuan'); ?>">
            <i class="bi bi-circle"></i><span>Satuan Produk</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('data-produk'); ?>">
            <i class="bi bi-circle"></i><span>Produk</span>
          </a>
        </li>
      </ul>
    </li><!-- End Produk Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= site_url('form-transaksi') ?>">
            <i class="bi bi-circle"></i><span>Penjualan</span>
          </a>
        </li>
        <li>
          
        </li>
      </ul>
    </li><!-- End Transaksi Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#pengguna-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pengguna-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= site_url('register'); ?>">
            <i class="bi bi-circle"></i><span>Registrasi</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('data-user'); ?>">
            <i class="bi bi-circle"></i><span>Data Pengguna</span>
          </a>
        </li>
      </ul>
    </li><!-- End User Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= site_url('login'); ?>">
        <i class="bi bi-person"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>

</aside><!-- End Sidebar-->