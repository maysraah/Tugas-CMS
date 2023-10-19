<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
       <!-- Tombol untuk membuka/tutup sidebar -->
       <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
            </li>
            @php
            if (Auth::user()->is_admin == 1) {
            @endphp
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.index') }}" class="nav-link">Admin</a>
            </li>
            @php
            }
            @endphp
            <li class="nav-item dropdown d-block d-sm-none">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                    @php
                    if (Auth::user()->is_admin == 1) {
                    @endphp
                    <a class="dropdown-item" href="{{ route('admin.index') }}">Admin</a>
                    @php
                    }
                    @endphp
                </div>
            </li>
          </ul>   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </li>
    </ul>
</nav>