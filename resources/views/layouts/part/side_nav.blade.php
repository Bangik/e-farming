<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="img/logo.png">
    </div>
    <div class="sidebar-brand-text mx-3">E-Farming</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item {{Request::segment(1) == 'home' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Menu
  </div>
  <li class="nav-item {{Request::segment(1) == 'user' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('user.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Kelola Petani</span>
    </a>
  </li>
  <li class="nav-item {{Request::segment(1) == 'lahan' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('lahan.index') }}">
      <i class="fas fa-fw fa-map"></i>
      <span>Kelola Lahan</span>
    </a>
  </li>
  <li class="nav-item {{Request::segment(1) == 'paket-tanam' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('paket-tanam.index') }}">
      <i class="fas fa-fw fa-box"></i>
      <span>Kelola Paket Tanam</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Laporan
  </div>
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-calendar"></i>
      <span>Laporan Penanaman</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>