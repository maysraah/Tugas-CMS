<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center " style="padding-top: 30px">
        <div class="col-lg-5">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Tabel <i>Health</i></h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tabel_data_health.update', $healths->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group mb-2">
                            <label for="header">Judul</label>
                            <input type="text" class="form-control @error('header') is-invalid @enderror" id="header" name="headerInput" placeholder="Judul" value="{{ old('header', $healths->header) }}">
                            @error('header')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="author">Author</label>
                            <textarea class="form-control @error('author') is-invalid @enderror" id="author" name="authorInput" placeholder="Auhtor" required>{{ old('author', $healths->author) }}</textarea>
                            @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="imageInput">
                                <label class="custom-file-label" for="image">{{ $healths->image }}</label>
                            </div>
                            @if ($healths->image)
                                <img src="{{ asset('storage/' . $healths->image) }}" alt="{{ $healths->header }} Photo" width="100">
                            @endif
                        </div>

                        <div class="form-group mb-2">
                            <label for="description">Deskripsi</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="descriptionInput" placeholder="Deskripsi" {{ old('description', $healths->description) }}>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>