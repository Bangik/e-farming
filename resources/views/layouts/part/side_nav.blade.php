<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon">
      <img src="{{asset('img/logo.png')}}">
    </div>
    {{-- <div class="sidebar-brand-text mx-3">E-Farming</div> --}}
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

  @admin
  <li class="nav-item {{Request::segment(1) == 'user' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('user.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Kelola Petani</span>
    </a>
  </li>
  @endadmin
  
  <li class="nav-item {{Request::segment(1) == 'alatb' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('alatb.index') }}">
      <i class="fas fa-snowplow"></i>
      <span>Kelola Alat dan Bahan</span>
    </a>
  </li>
  
  <li class="nav-item {{Request::segment(1) == 'paket-tanam' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('paket-tanam.index') }}">
      <i class="fas fa-fw fa-box"></i>
      <span>Kelola Paket Tanam</span>
    </a>
  </li>
  
  <li class="nav-item {{Request::segment(1) == 'lahan' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('lahan.index') }}">
      <i class="fas fa-fw fa-map"></i>
      <span>Kelola Lahan</span>
    </a>
  </li>
  <li class="nav-item {{Request::segment(1) == 'obath' ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('obath.index') }}">
      <i class="fas fa-skull-crossbones"></i>
      <span>Jadwal Obat & Hama</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Laporan
  </div>

  <li class="nav-item {{Request::segment(1) == 'laporan' ? 'active' : ''}}">
    <a class="nav-link" href="{{route('laporan.index')}}">
      <i class="fas fa-fw fa-calendar"></i>
      <span>Laporan Hasil Panen</span>
    </a>
  </li>

  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>