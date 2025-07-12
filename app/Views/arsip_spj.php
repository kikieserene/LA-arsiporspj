<!DOCTYPE html>
<html>
<head>
    <title>Arsip SPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h2 class="mb-4">Arsip SPJ</h2>
    <p>Dokumen SPJ yang telah selesai diverifikasi oleh Verifikator.</p>

    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Bidang</th>
                    <th>Ketua Pelaksana</th>
                    <th>Nama Verifikator</th>
                    <th>Tanggal Validasi</th>
                    <th>Dokumen</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($arsip as $row): ?>
                    <tr>
                        <td><?= esc($row['nama_kegiatan']) ?></td>
                        <td><?= esc($row['tgl_kegiatan']) ?></td>
                        <td><?= esc($row['bidang']) ?></td>
                        <td><?= esc($row['nama_ketuapel']) ?></td>
                        <td><?= esc($row['nama_verifikator']) ?></td>
                        <td><?= esc($row['tgl_validasi']) ?></td>
                        <td>
                            <?php if (!empty($row['dokumen'])): ?>
                                <a href="<?= base_url('uploads/dokumen_spj/' . $row['dokumen']) ?>" target="_blank" 
                                class="btn btn-sm btn-outline-secondary">Lihat</a>
                            <?php else: ?>
                                <span class="text-muted">Tidak ada</span>
                            <?php endif; ?>
                        </td>
                        <td><span class="badge bg-success"><?= esc($row['status_validasi']) ?></span></td>
                    </tr>
                <?php endforeach ?>
                <?php if (empty($arsip)): ?>
                    <tr>
                        <td colspan="7" class="text-center">Belum ada dokumen yang diarsipkan.</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>
</html>
