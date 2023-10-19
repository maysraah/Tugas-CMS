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
<body class="sidebar-mini control-sidebar-slide-open">
    <!-- Navbar -->
    @include('partials.navbar')

    {{-- Sidebar --}}
    @include('partials.sidebar')
    
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        {{-- <div class="container text-center my-4"> --}}
            <div class="row">
                <div class="col" style="padding-left:30px; padding-top:30px">
                    <h3>Ini adalah Halaman Admin</h3>
                </div>
            </div>
        {{-- </div> --}}
    </div>

    <!-- Include jQuery and Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include AdminLTE JavaScript (adminlte.min.js) -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <!-- JavaScript to toggle the sidebar -->
    <script>
        $(document).ready(function () {
            $('[data-widget="pushmenu"]').on('click', function () {
                $('body').toggleClass('sidebar-mini');
            });
        });
    </script>
</body>
</html>
