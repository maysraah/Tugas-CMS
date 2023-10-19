<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
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
    <!-- /.navbar -->

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        {{-- <div class="container text-center my-4"> --}}
            <div class="row">
                <div class="col" style="padding-left:30px; padding-top:30px">
                    <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
                </div>
            </div>
        {{-- </div> --}}
    </div>

    <!-- Include jQuery and Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include AdminLTE JavaScript (adminlte.min.js) -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
