<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body{
            background-image: linear-gradient( 270.3deg,  rgb(66, 75, 75) 0.2%, rgb(69, 44, 143) 100% );
        }

        .card{
            box-shadow: 0px 0px 35px #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <center><h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">HALAMAN UBAH DATA </h3></center>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                        <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="number" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}">
                            </div>
                            <div class="mb-3">
                                <label for="jurusan_id" class="form-label">Jurusan</label>
                                <select class="form-select" name="jurusan_id" id="jurusan_id">
                                    <option value="">Pilih Jurusan Anda</option>
                                    @foreach ($jurusan as $item)
                                        <option value="{{ $item->id }}" {{ $siswa->jurusan_id == $item->id ? 'selected' : '' }}>{{ $item->nama_jurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <fieldset class="mb-3">
                                <legend>Jenis Kelamin</legend>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki" {{ $siswa->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="laki-laki">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </fieldset>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
