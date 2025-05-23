<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website pengajuan judul skripsi dan magang Uniba Madura</title>
  <link rel="icon" type="image/png" href="{{ asset('halaman') }}/images/logos/logo.jpg" />
  <link rel="stylesheet" href="{{ asset('halaman') }}/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img">
            <img src="{{ asset('halaman') }}/images/logos/logo_unibamadura.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            
            @if(Auth::User()->role == 'mahasiswa') 
              <li class="sidebar-item">
              <a class="sidebar-link" href="/mahasiswa/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">SKRIPSI</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/mahasiswa/judul" aria-expanded="false">
                  <span>
                    <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Pengajuan Judul</span>
                </a>
              </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="/mahasiswa/dokumen" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Dokumen</span>
              </a>
            </li>
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MAGANG</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/mahasiswa/magang" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Pengajuan Tempat</span>
              </a>
            </li>
            @elseif(Auth::User()->role == 'dospem')
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dospem/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            @if(Auth::User()->jabatan == 'kadep')
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">JUDUL SKRIPSI</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dospem/judul" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Judul Mahasiswa</span>
              </a>
            </li>
            @endif
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">SKRIPSI</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dospem/data" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Data Judul Mahasiswa</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dospem/dokumen" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Dokumen Skripsi Mahasiswa</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MAGANG</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dospem/magang" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Tempat Magang Mahasiswa</span>
              </a>
            </li>
            @elseif(Auth::User()->role == 'operator')
            <li class="sidebar-item">
              <a class="sidebar-link" href="/operator/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">DATA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/operator/dataAkun" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Tambah Data</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">SKRIPSI</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/operator/datamhs" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Data Mahasiswa</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/operator/dokumenmhs" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Dokumen Skripsi Mahasiswa</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MAGANG</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/operator/magang" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Tempat Magang Mahasiswa</span>
              </a>
            </li>
            @endif
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/logout" aria-expanded="false">
                <span>
                  <i class="ti ti-logout"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('halaman') }}/images/profile/avatar.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Profile</p>
                    </a>
                    <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        @yield('container')
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Copyright by <a href="#" class="pe-1 text-primary text-decoration-underline">Kelompok 8 Software Project ICB23</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('halaman') }}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('halaman') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('halaman') }}/js/sidebarmenu.js"></script>
  <script src="{{ asset('halaman') }}/js/app.min.js"></script>
  <script src="{{ asset('halaman') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset('halaman') }}/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{ asset('halaman') }}/js/dashboard.js"></script>
</body>

</html>