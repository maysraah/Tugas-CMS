<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Health</title>
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
        <div class="container text-center my-4">
            <div class="row">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                </div>
                @endif
    
                <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-primary">Health Data Table</h5><br>
                    </div><br>
                    <div class="text-left" style="padding-left: 20px">
                        <a href="{{ route('admin.tabel_data_health.create') }}" class="btn btn-success">Tambah Data</a>
                    </div><br>                    
                    
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Judul</th>
                                    <th>Author</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $n= 1;
                                @endphp
                                @foreach ($healths as $health)
                                <tr>
                                    <td>{{ $health->header }}</td>
                                    <td>{{ $health->author }}</td>
                                    <td><img style="width: 100px;height: 100px;object-fit: cover;border-radius: 20%;"
                                            src="{{ asset('storage/' . $health->image) }}"
                                            alt="gambar"></td>
                                    <td>{{ $health->description }}</td>
                                    <td>
                                        <div style="display: flex; gap: 10px;">
                                            <a href="{{ route('admin.tabel_data_health.edit', $health->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.tabel_data_health.destroy', $health->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')" type="submit">Hapus</button>
                                            </form>
                                        </div>
                                    </td>                                    
                                </tr>
                                @php
                                $n++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
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
