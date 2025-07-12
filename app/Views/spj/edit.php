<!DOCTYPE html>
<html>
<head>
    <title>Edit SPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Edit Data SPJ</h3>

<form action="/spj/update/<?= $spj['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Nama Kegiatan:</label>
        <input type="text" name="nama_kegiatan" value="<?= esc($spj['nama_kegiatan']) ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?= $spj['tanggal'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah (Rp):</label>
        <input type="number" step="0.01" name="jumlah" value="<?= $spj['jumlah'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Upload Dokumen Baru (opsional):</label>
        <input type="file" name="dokumen" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.png">
        <?php if (!empty($spj['dokumen'])): ?>
            <p class="mt-2">Dokumen Saat Ini: 
                <a href="<?= base_url('uploads/dokumen_spj/' . $spj['dokumen']) ?>" target="_blank">
                    <?= esc($spj['dokumen']) ?>
                </a>
            </p>
        <?php else: ?>
            <p class="text-muted mt-2">Tidak ada dokumen terlampir.</p>
        <?php endif; ?>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="/spj" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>
