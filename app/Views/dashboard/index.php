<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      height: 100vh;
      background-color: #0d6efd;
      color: white;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      display: block;
    }
    .sidebar a:hover {
      background-color: #0b5ed7;
    }
    .active-menu {
      background-color: #0b5ed7;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 col-lg-2 sidebar d-flex flex-column p-3">
      <h4 class="mb-4">🛠️ Admin Panel</h4>
      <a href="/user"><i class="bi bi-person-lines-fill me-2"></i> Kelola User</a>
      <a href="/spj"><i class="bi bi-file-earmark-text me-2"></i> Kelola SPJ</a>
      <a href="/laporan"><i class="bi bi-journal-text me-2"></i> Laporan SPJ</a>
      <a href="/arsip-spj"><i class="bi bi-archive me-2"></i> Arsip SPJ</a> <!-- ✅ Diperbaiki -->
      <a href="/logout" class="mt-auto"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="col-md-9 col-lg-10 p-5">
      <h2 class="mb-4">Selamat Datang, <span class="text-primary"><?= session()->get('username') ?></span>!</h2>
      <p class="lead">Anda berada di halaman dashboard admin. Silakan pilih menu di samping untuk mengelola data SPJ dan pengguna.</p>

      <!-- Card Summary -->
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-person-circle me-2"></i> Data User</h5>
              <p class="card-text">Kelola pengguna sistem</p>
              <a href="/user" class="btn btn-sm btn-primary">Kelola User</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-file-earmark-spreadsheet me-2"></i> Data SPJ</h5>
              <p class="card-text">Kelola semua data SPJ</p>
              <a href="/spj" class="btn btn-sm btn-primary">Kelola SPJ</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-journal-check me-2"></i> Validasi Laporan</h5>
              <p class="card-text">Lihat dan validasi SPJ</p>
              <a href="/laporan" class="btn btn-sm btn-primary">Laporan SPJ</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
