<!-- partial:./partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo d-flex align-items-center" href="{{ route('dashboard') }}">
                <i class="mdi mdi-account-group text-white me-2" style="font-size: 32px;"></i>
                <span class="fw-bold text-white">HR </span>
            </a>

            <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}">
                <i class="mdi mdi-account-group text-primary" style="font-size: 28px;"></i>
            </a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
                <h4 id="current-datetime" class="mb-0 font-weight-bold d-none d-xl-block"></h4>
            </li>

          
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown"
                    id="profileDropdown">

                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile" class="rounded-circle"
                        width="35">

                    <span class="nav-profile-name ms-2">
                        {{ strlen(Auth::user()->name ?? 'User') > 10 ? substr(Auth::user()->name, 0, 10) . '...' : (Auth::user()->name ?? 'User') }}
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                        <i class="mdi mdi-account text-primary"></i>
                        Profile
                    </a>
                    
                    <div class="dropdown-divider"></div>

                    <a href="#" class="dropdown-item"
                        onclick="event.preventDefault(); if(confirm('Are you sure you want to logout?')) document.getElementById('logout-form').submit();">

                        <i class="mdi mdi-logout text-danger"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
    <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Here..." aria-label="search"
                        aria-describedby="search">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            
        </ul>
    </div>
</nav>
