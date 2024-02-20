<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tabel Jurusan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 30px;
        }

        .navbar-card {
            background-color: #15F5BA;
            padding: 20px;
            border-radius: 15px 15px 0 0;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #fff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-style: italic;
            text-align: center;
            text-transform: uppercase;
            font-size: 28px;
            margin-bottom: 0;
        }

        .btn-custom {
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-custom:hover {
            opacity: 0.8;
        }

        .table-custom {
            border-radius: 10px;
            overflow: hidden;
        }

        .table-custom th,
        .table-custom td {
            vertical-align: middle;
        }

        .action-buttons .btn {
            margin-right: 5px;
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar-card">
            <h1>Form Tabel Jurusan</h1>
        </div>
        <div class="mb-3">
            <a href="{{ route('jurusan.create') }}" class="btn btn-primary btn-custom"><i class="fa-solid fa-user-plus"></i> Tambahkan Jurusan</a>
            <a href="{{ route('siswa.index') }}" class="btn btn-primary btn-custom"><i class="fa-solid fa-user-graduate"></i> Tabel Data Siswa</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-custom">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Jurusan</th>
                        <th>Singkatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jurusan as $item)
                    <tr>
                        <td>{{ $item->nama_jurusan }}</td>
                        <td>{{ $item->singkatan }}</td>
                        <td class="action-buttons">
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')" action="{{ route('jurusan.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a class="btn btn-success btn-custom" href="{{ route('jurusan.edit', $item->id) }}" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                                <button type="submit" class="btn btn-danger btn-custom" title="Hapus"><i class="fas fa-trash"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
