<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index | Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <style>
        body{
            /* background-color: #dfe454;
            background-image: linear-gradient(0deg, #dfe454 0%, #97D9E1 100%); */

            background-color:  darkseagreen;
            height: 100vh;
            
        }

        /* Untuk membuat teks miring */
        .text-miring {
            font-style: italic;
            color: gray;
        }

        .btn {
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
        }

    </style>
</head>
<body>
    {{-- <div class="container mt-5"> --}}
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <h2 class="mx-auto text-white" style="font-family: 'Times New Roman', Times, serif"><i class="fa-solid fa-graduation-cap"></i> TABEL DATA SISWA</h2>
        </div>
    </nav>
    {{-- Notif MenDelete Data Siswa --}}
    @if(session('berhasil'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('berhasil') }}
        </div>
    @endif
    {{-- Notif MenDelete Data Siswa --}}

    {{-- Notif Login --}}
    @if(session('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('success') }}
        </div>
    @endif
  {{-- Notif Login --}}


    <div class="container ">
        <div class="row">
        <div class=" col-md-6 my-4">
            <a href="{{ route('siswa.create') }}" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Tambahkan Data</a>
        </div>
        <div class="col-md-6 my-4 d-flex justify-content-end"> 
            <a href="{{ route('jurusan.index') }}" class="btn btn-success"><i class="fa-solid fa-graduation-cap"></i> Tabel Data Jurusan</a>
        </div>
    </div>
        <table class="table table-light table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama Siswa</th>
                    <th>Nis</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>
                        @if ($item->jurusan)
                        {{ $item->jurusan->nama_jurusan }}
                        @else
                        <p class="text-miring">(----Tidak ada Jurusan----)</p>
                        @endif
                    </td>
                
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>
                        <form onsubmit="return confirm('Bener mau dihapus niech ???')" action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <!-- Tombol Edit -->
                            <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                            <!-- Tombol Hapus -->
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/sesi/logout" class="btn btn-info">Log-Out</a>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
