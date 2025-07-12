<!DOCTYPE html>
<html>
<head>
    <title>Cari Dokumen Validasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

    <h3 class="mb-4">Cari Dokumen yang Telah Divalidasi</h3>

    <p>Berikut adalah daftar dokumen yang telah divalidasi oleh bendahara:</p>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Dokumen</th> <!-- Tambahan kolom -->
                <th>Status Validasi</th>
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
                        <a href="<?= base_url('uploads/dokumen_spj/' . $row['dokumen']) ?>" target="_blank" class="btn btn-sm btn-outline-secondary">Lihat</a>
                    <?php else: ?>
                        <span class="text-muted">Tidak ada</span>
                    <?php endif; ?>
                </td>
                <td><span class="badge bg-success"><?= esc($row['status_validasi']) ?></span></td>
            </tr>
            <?php endforeach ?>
            <?php if (empty($spj)): ?>
                <tr>
                    <td colspan="5" class="text-center">Tidak ada dokumen validasi ditemukan.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>

</body>
</html>