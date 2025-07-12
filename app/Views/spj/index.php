<!DOCTYPE html>
<html>
<head>
    <title>Kelola SPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Data SPJ</h3>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php elseif(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<!-- Form Cari -->
<form method="get" class="mb-3 d-flex">
    <input type="text" name="keyword" placeholder="Cari SPJ..." class="form-control me-2" value="<?= esc($_GET['keyword'] ?? '') ?>">
    <button class="btn btn-outline-primary">Cari</button>
</form>

<!-- Tombol Tambah, Kembali ke Dashboard, & Cetak -->
<?php if (session()->get('role') === 'pptk'): ?>
    <a href="/spj/create" class="btn btn-success mb-3">Tambah SPJ</a>
    <a href="/index.php/pptk" class="btn btn-success mb-3">Kembali ke Dashboard</a>
    <a href="/spj/print" target="_blank" class="btn btn-info mb-3 ms-2">Cetak Laporan</a>
<?php endif; ?>

<!-- Tabel Data -->
<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Dokumen</th> <!-- Tambahan kolom dokumen -->
            <th>Status Validasi</th>
            <?php if (session()->get('role') === 'pptk'): ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php if (count($spj) === 0): ?>
            <tr>
                <td colspan="<?= session()->get('role') === 'pptk' ? '7' : '6' ?>" class="text-center">Data tidak ditemukan.</td>
            </tr>
        <?php endif; ?>

        <?php foreach ($spj as $i => $row): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= esc($row['nama_kegiatan']) ?></td>
            <td><?= esc($row['tanggal']) ?></td>
            <td>Rp<?= number_format($row['jumlah'], 2, ',', '.') ?></td>
            <td>
                <?php if (!empty($row['dokumen'])): ?>
                    <a href="<?= base_url('uploads/dokumen_spj/' . $row['dokumen']) ?>" target="_blank">Lihat</a>
                <?php else: ?>
                    <span class="text-muted">Tidak ada</span>
                <?php endif; ?>
            </td>
            <td><?= esc($row['status_validasi']) ?></td>
            <?php if (session()->get('role') === 'pptk'): ?>
            <td>
                <a href="/spj/edit/<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/spj/delete/<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
            <?php endif; ?>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

</body>
</html>
