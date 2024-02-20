<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    body {
      background-image: linear-gradient( 109.6deg,  rgba(61,131,97,1) 11.2%, rgba(28,103,88,1) 91.1% );
    }

    .container {
      max-width: 400px;
      margin-top: 50px;
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      width: 100%;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    a {
      color: #007bff;
      text-decoration: none;
      display: block;
      margin-top: 20px;
    }

    a:hover {
      text-decoration: underline;
      background-color: #000;
    }
  </style>
</head>
<body>

<div class="container">
  <a href="{{ route('jurusan.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $item)    
        <li>{{ $item }}</li>
      @endforeach
    </ul>
  @endif
    
  <form action="{{ route('jurusan.store') }}" method="POST" style="background-color: #000">
    @csrf
    <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" class="text-white">Form Tambah Jurusan</h3>
    <hr class="text-white">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-white">Nama Jurusan</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jurusan">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">Singkatan</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="singkatan">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
