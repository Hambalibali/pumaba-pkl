<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Create Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    {{-- Style CSS --}}
    <style>
      body{
        background-image: radial-gradient( circle 815px at 23.4% -21.8%,  rgb(86, 115, 196) 0.2%, rgb(34, 197, 107) 100.2% );
        height: 100vh;
      }

      h3{
        font-family: Arial, Helvetica, sans-serif;
      }

      .container {
        padding-top: 50px;
      }
      .card{
        max-width: 500px;
        box-shadow: 0px 0px 35px #fff;
        background-color: gray;
      }
      .card-body {
        max-width: 500px;
      }
      .card-header {
        background-color: #007bff;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card mx-auto">
        <div class="card-header text-center">
          <center><h3>HALAMAN TAMBAH DATA</h3></center>
        </div>
        <div class="card-body">
          <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)    
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Siswa</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
              <label for="nis" class="form-label">NIS</label>
              <input type="number" class="form-control" id="nis" name="nis">
            </div>

            <div class="mb-3">
              <label for="jurusan_id" class="form-label">Jurusan</label>
              <select class="form-select" name="jurusan_id" id="jurusan_id">
                <option value="" class="text-center">>>> Pilih Jurusan Anda <<<</option>
                @foreach ($jurusan as $item)
                <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                @endforeach
              </select>
            </div>

            <fieldset class="mb-3">
              <legend class="col-form-label pt-0">Jenis Kelamin</legend>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-Laki" value="Laki-Laki">
                <label class="form-check-label" for="Laki-Laki">Laki-Laki</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan">
                <label class="form-check-label" for="Perempuan">Perempuan</label>
              </div>
            </fieldset>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success">Tambah</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
