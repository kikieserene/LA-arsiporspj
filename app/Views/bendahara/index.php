<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Bendahara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            background-color: #343a40;
            padding-top: 60px;
            color: white;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            transition: 0.3s ease;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 40px 20px;
        }
        .card-option {
            transition: 0.3s ease;
            cursor: pointer;
        }
        .card-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .card-icon {
            font-size: 2rem;
            color: #0d6efd;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center">Bendahara</h4>
    <a href="/bendahara" class="active"><i class="bi bi-house-door-fill me-2"></i> Dashboard</a>
    <a href="/bendahara/validasi"><i class="bi bi-clipboard-check me-2"></i> Validasi Laporan SPJ</a>
    <a href="/arsip-spj"><i class="bi bi-archive me-2"></i> Arsip SPJ</a> <!-- ✅ Sudah sesuai -->
    <a href="/logout"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="content">
    <h2 class="mb-4">Selamat Datang, Bendahara</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-option shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="card-icon mb-3"><i class="bi bi-clipboard-check"></i></div>
                    <h5 class="card-title">Validasi SPJ</h5>
                    <p class="card-text">Periksa dan validasi laporan SPJ dari PPTK.</p>
                    <a href="/bendahara/validasi" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-option shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="card-icon mb-3"><i class="bi bi-archive"></i></div>
                    <h5 class="card-title">Arsip SPJ</h5>
                    <p class="card-text">Lihat SPJ yang telah divalidasi dan diarsipkan.</p>
                    <a href="/arsip-spj" class="btn btn-success">Lihat Arsip</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
