<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Verifikator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 60px;
            color: white;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 30px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h4 class="text-center">Verifikator</h4>
    <a href="/verifikator">Dashboard</a>
    <a href="/verifikator/cari-validasi">Cari Dokumen Validasi</a>
    <a href="/arsip-spj">Arsip SPJ</a>
    <a href="/logout">Logout</a>
</div>

<div class="content">
    <h2 class="mb-4">Dashboard Verifikator</h2>
    <p>Berikut adalah daftar dokumen SPJ yang sudah divalidasi oleh bendahara:</p>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>

    <div class="table-responsive mt-3">
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Dokumen</th> <!-- Tambahan kolom dokumen -->
                    <th>Status Validasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($spj as $row): ?>
                    <tr>
                        <td><?= esc($row['nama_kegiatan']) ?></td>
                        <td><?= esc($row['tanggal']) ?></td>
                        <td>Rp<?= number_format($row['jumlah'], 2, ',', '.') ?></td>
                        <td>
                            <?php if (!empty($row['dokumen'])): ?>
                                <a href="<?= base_url('uploads/dokumen_spj/' . $row['dokumen']) ?>" target="_blank" 
                                class="btn btn-sm btn-outline-secondary">Lihat</a>
                            <?php else: ?>
                                <span class="text-muted">Tidak ada</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <span class="badge bg-success"><?= esc($row['status_validasi']) ?></span>
                        </td>
                        <td>
                            <a href="/verifikator/tambah-info/<?= $row['id'] ?>" class="btn btn-sm btn-primary">Tambah Info</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php if (empty($spj)): ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data SPJ yang sudah divalidasi.</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>