<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 5%;
            background: linear-gradient(135deg, #3498db, #8e44ad);
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            padding: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .login-container:hover {
            transform: scale(1.02);
        }

        .login-icon {
            font-size: 64px;
            color: #3498db;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-input {
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .login-button {
            background-color: #3498db;
            color: #fff;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            font-size: 16px;
        }

        .login-button:hover {
            background-color: #2980b9;
        }

        .register-link {
            margin-top: 15px;
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
            font-size: 14px;
        }

        .register-link:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Notif Log-Out --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
  {{-- Notif Log-Out --}}

    <div class="login-container">
        <div class="text-center">
            <i class="fas fa-lock login-icon"></i>
            <h2>Halaman Login</h2>
        </div>

        <form action="/sesi/login" method="POST" class="login-form">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><i class="fas fa-envelope"></i>Username</label>
                <div class="input-group">
                    <input type="username" name="username" class="form-control form-input" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> <i class="fas fa-lock"></i> Kata Sandi</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control form-input" required>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary login-button">Login</button>
            </div>
        </form>

        <p class="text-center register-link">Belum punya akun? <a href="/sesi/register">Registrasi disini.</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WywBMK3cUJCyCUn/6Z/hRTt8+pR6L4N2GZ" crossorigin="anonymous"></script>
</body>
</html>
 