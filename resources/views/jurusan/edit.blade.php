<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit | Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .btn-back {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-back:hover {
            background-color: #495057;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="{{ route('jurusan.index') }}" class="btn btn-back mb-3"><i class="ri-arrow-left-line icon"></i> Kembali</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0 text-center"><i class="ri-edit-line icon"></i> Edit Jurusan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    
                    <div class="mb-3">
                        <label for="nama_jurusan" class="form-label"> Nama Jurusan</label>
                        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="singkatan" class="form-label"> Singkatan</label>
                        <input type="text" class="form-control" id="singkatan" name="singkatan" value="{{ $jurusan->singkatan }}" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary"><i class="ri-save-line icon"></i> Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
