<!DOCTYPE html>
<html>
<head>
    <title>Dashboard PPTK</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            background-color: #0d6efd;
            padding-top: 60px;
            color: white;
        }
        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            transition: background 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #0b5ed7;
        }
        .content {
            margin-left: 250px;
            padding: 40px 20px;
        }
        .dashboard-box {
            transition: all 0.2s ease-in-out;
        }
        .dashboard-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>PPTK Panel</h4>
    <a href="/pptk">Dashboard</a>
    <a href="/spj">Kelola Data SPJ</a>
    <a href="/arsip-spj">Arsip SPJ</a> <!-- ✅ Tambahan menu arsip -->
    <a href="/logout">Logout</a>
</div>

<!-- Main Content -->
<div class="content">
    <h2 class="mb-4 text-center">Selamat Datang, PPTK</h2>

    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div class="card dashboard-box border-0 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Kelola Data SPJ</h5>
                    <p class="card-text">Lihat dan kelola data SPJ kegiatan yang telah Anda input.</p>
                    <a href="/spj" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card dashboard-box border-0 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Logout</h5>
                    <p class="card-text">Keluar dari sesi akun Anda dengan aman.</p>
                    <a href="/logout" class="btn btn-secondary">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
