<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-w3sxJwT6rC2Ybh8IDWl/W8gpYU8PD07PsWyoAMH+1wHIgTLOiweKPTu5z9D2Qksp" crossorigin="anonymous">
    {{-- Remix Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>REGISTER</title>
    <style>
        body {
            background-color: #201658;
        }

        h3 {
            font-style: italic;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

    </style>
</head>
<body>
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
        <div class="w-50 center border rounded px-3 py-3 mx-auto mt-5">
            <form action="/sesi/create" method="POST">
                @csrf
                <h3 class="text-center text-white">Register</h3>
                <div class="mb3 text-white">
                    <label for="name" class="form-label">Nama Anda</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb3 text-white">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="mb3 text-white">
                    <label for="email" name="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb3 text-white">
                    <label for="password" name="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-info text-white"><i class="ri-save-fill"></i>Tambah Akun</button>
                </div>
                <a href="/sesi" class="btn btn-secondary"><-- Kembali</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-d4pniXqMSlqZLFw2aDqeo/kGz9E9H/3aSAzpLXr3yLd+6vVq2PjK8ebtGzv0shT2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha384-mIgQ3Jzgq0CyGQL3Vs93CFlVP8fXuyFhx4QD5Dx6qMl9Ego0qBSunBrQ5qJ3dCB" crossorigin="anonymous"></script>
</body>
</html>
