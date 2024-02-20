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
            background-color: #C7C8CC;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 0;
        }

        .navbar-card {
        background-color: #15F5BA;
        padding: 10px 30px;
        border-radius: 15px 15px 0 0;
        margin-bottom: 0;
        margin-top: 7px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

        }

        h1 {
            color: #ffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-style: italic;
            text-align: center;
            text-transform: uppercase;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="navbar-card">
            <h1 class="text-center">Form Tabel Jurusan</h1>
        </div>
        <h4 class="mt-3"><a href="{{ route('jurusan.create') }}" class="btn btn-primary btn-custom">Tambahkan Data</a></h4>
        <div class="d-flex justify-content-end"> 
            <a href="{{ route('siswa.index') }}" class="btn btn-primary btn-custom"><i class="fa-solid fa-user-graduate"></i> Tabel Data Siswa</a>
        </div>
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
                            <a class="btn btn-success btn-custom btn-sm" href="{{ route('jurusan.edit', $item->id) }}" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                            <button type="submit" class="btn btn-danger btn-custom btn-sm" title="Hapus"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
