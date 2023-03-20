<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#F25751;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">SB Petugas</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Request::is('dashboard*')) active @endif">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- menu -->
    <div class="sidebar-heading">
        Menu
    </div>

    @if (auth()->guard('petugas')->user()->level->nama_15480 == 'administrator')
        <li class="nav-item @if (Request::is('masyarakat*')) active @endif">
            <a class="nav-link" href="{{ route('masyarakat.index') }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Data Masyarakat</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Data Petugas</span></a>
        </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Barang</span></a>
    </li>

    @if (auth()->guard('petugas')->user()->level->nama_15480 == 'petugas')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('lelang.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Lelang</span></a>
        </li>
    @endif

    @if (auth()->guard('petugas')->user()->level->nama_15480 == 'administrator')
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#generateLaporanModal">
                <i class="fas fa-fw fa-table"></i>
                <span>Generate Laporan</span>
            </a>
        </li>
    @endif

    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST" class="nav-link">
            @csrf

            <button type="submit" class="btn btn-transparent text-white"><i class="bi bi-box-arrow-in-left"></i>
                Logout</button>
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
