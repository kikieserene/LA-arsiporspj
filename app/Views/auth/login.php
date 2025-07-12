<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login SPJ Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            background-color: #fff;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            transition: transform 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-5px);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .btn-login {
            background-color: #0d6efd;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #0b5ed7;
        }

        .icon-input {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .form-group {
            position: relative;
        }

        .form-control {
            padding-left: 2.5rem;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: bold;
            color: #0d6efd;
        }

        .text-muted {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <div class="logo-text">SPJ Sistem</div>
        <p class="text-muted">Badan Kesatuan Bangsa dan Politik Kota Palembang</p>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="/login" method="post">
        <div class="form-group mb-3">
            <i class="bi bi-person-fill icon-input"></i>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group mb-4">
            <i class="bi bi-lock-fill icon-input"></i>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-login w-100 text-white">Login</button>
    </form>
</div>

</body>
</html>
