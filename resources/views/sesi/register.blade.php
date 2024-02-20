<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Remix Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>REGISTER</title>
    <style>
        body {
            background: linear-gradient(135deg, #03d8d8, #0d6efd);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            width: 400px;
            margin: 100px auto;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 30px;
        }

        .card-header {
            background-color: transparent;
            text-align: center;
            margin-bottom: 30px;
        }

        .card-header h3 {
            color: #2c3e50;
            font-weight: bold;
            font-size: 28px;
            margin-bottom: 0;
        }

        .form-label {
            color: #2c3e50;
            font-weight: bold;
        }

        .btn-info {
            background-color: #3498db;
            border-color: #3498db;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-info:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .btn-secondary {
            background-color: #95a5a6;
            border-color: #95a5a6;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-secondary:hover {
            background-color: #7f8c8d;
            border-color: #7f8c8d;
        }

        .form-control {
            border-radius: 20px;
        }

        .input-group-text {
            background-color: #3498db;
            color: #fff;
            border-color: #3498db;
            border-radius: 20px 0 0 20px;
        }

        .input-group-text i {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3><i class="ri-user-fill"></i> Register</h3>
        </div>
        <form action="/sesi/create" method="POST">
            @csrf
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-user-fill"></i></span>
                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-user-fill"></i></span>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-mail-fill"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-lock-fill"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
                </div>
            </div>

            <div class="mb-3 text-center">
                <button name="submit" type="submit" class="btn btn-info"><i class="ri-save-fill"></i> Daftar</button>
            </div>
        </form>
        <p class="text-center text-muted mb-0">Sudah memiliki akun? <a href="/sesi" class="btn btn-secondary btn-sm">Masuk</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
