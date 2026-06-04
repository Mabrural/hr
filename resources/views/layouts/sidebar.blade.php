<!-- partial:./partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <div class="text-center py-4">
            <img src="{{ asset('assets/images/logo-gpp.png') }}" alt="Logo" class="rounded-circle shadow-sm"
                style="width: 60px; height: 60px; object-fit: cover; background-color: white;">

            <h6 class="mt-3 mb-0 fw-bold text-light">
                PT Global Petro Pasifik
            </h6>

            <small class="text-muted">
                HR Management System
            </small>
        </div>
        <li class="nav-item sidebar-category">
            <p>Navigation</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/employees">
                <i class="mdi mdi-account-group menu-icon"></i>
                <span class="menu-title">Karyawan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-calendar-clock menu-icon"></i>
                <span class="menu-title">Cuti</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-alert-circle menu-icon"></i>
                <span class="menu-title">Surat Peringatan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-target menu-icon"></i>
                <span class="menu-title">KPI</span>
            </a>
        </li>

        <li class="nav-item sidebar-category">
            <p>Pages</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-database menu-icon"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Account </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item sidebar-category">
            <p>Apps</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"
                onclick="event.preventDefault(); if(confirm('Are you sure you want to logout?')) document.getElementById('logout-form').submit();">
                <button type="button" class="btn bg-danger btn-sm menu-title">
                    <i class="mdi mdi-logout"></i> Logout
                </button>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
