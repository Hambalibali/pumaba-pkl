<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
=======
    
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
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
>>>>>>> 70b19a6cd42491dd3c41b8ae1628e6825272b5a8
</head>

<body>
<<<<<<< HEAD

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session('erorr'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('erorr') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-body dark-container">
                        <h1 class="text-center">Login</h1>


                        <form action="{{ url('/sesi/login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email_or_username" class="form-label">Username</label>
                                <input type="text" placeholder="Masukkan Email atau username" class="form-control  @error('email_or_username') is-invalid @enderror" name='email_or_username'  required autofocus  value="{{ old('email_or_username') }}">
                                    @error('email_or_username')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password"  required>
                            </div>
                            <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary btn-block bn5">Login</button>
                            </div>
                        </form>
                        <div class="card-footer">
                        <p class="text-center">Belum punya akun? <a href="/sesi/register">Daftar disini</a></p>
                    </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
=======
    <div class="login-container">
        <div class="text-center">
            <i class="ri-lock-password-line login-icon"></i>
            <h2 class="mb-4">Halaman Login</h2>
        </div>

        <form action="/sesi/login" method="POST" class="login-form">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label"><i class="ri-user-line"></i> Username</label>
                <input type="text" name="username" class="form-control form-input" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><i class="ri-lock-password-line"></i> Kata Sandi</label>
                <input type="password" name="password" class="form-control form-input" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary login-button">Login</button>
            </div>
        </form>

        <p class="text-center register-link">Belum punya akun? <a href="/sesi/register">Registrasi disini.</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 70b19a6cd42491dd3c41b8ae1628e6825272b5a8
</body>

</html>
