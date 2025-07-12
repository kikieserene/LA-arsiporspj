<!DOCTYPE html>
<html>
<head>
    <title>Validasi SPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .content {
            margin-left: 250px;
            padding: 40px 20px;
        }
    </style>
</head>
<body>

<div class="content">
    <h3>Validasi Laporan SPJ</h3>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if (session()->get('role') === 'bendahara'): ?>
        <a href="/index.php/bendahara" class="btn btn-success mb-3">Kembali ke Dashboard</a>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Dokumen</th> <!-- Tambahan kolom -->
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
                <td><?= esc($row['status_validasi']) ?></td>
                <td>
                    <form method="post" action="/bendahara/validasi/update/<?= $row['id'] ?>">
                        <select name="status_validasi" class="form-select d-inline w-auto">
                            <option value="Belum Divalidasi" <?= $row['status_validasi'] === 'Belum Divalidasi' ? 'selected' : '' ?>>
                                Belum</option>
                            <option value="Disetujui" <?= $row['status_validasi'] === 'Disetujui' ? 'selected' : '' ?>>Disetujui</option>
                            <option value="Ditolak" <?= $row['status_validasi'] === 'Ditolak' ? 'selected' : '' ?>>Ditolak</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

</body>
</html>
