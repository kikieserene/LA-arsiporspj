<!DOCTYPE html>
<html>
<head>
    <title>Tambah Informasi Validasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

    <h3>Tambah Informasi Verifikasi untuk Kegiatan: <?= esc($spj['nama_kegiatan']) ?></h3>

    <form method="post" action="/verifikator/simpan-info">
        <input type="hidden" name="id_spj" value="<?= $spj['id'] ?>">

        <div class="mb-3">
            <label>Nama Verifikator</label>
            <input type="text" name="nama_verifikator" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" value="<?= esc($spj['nama_kegiatan']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Kegiatan</label>
            <input type="date" name="tgl_kegiatan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Bidang</label>
            <input type="text" name="bidang" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Ketua Pelaksana</label>
            <input type="text" name="nama_ketuapel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Validasi</label>
            <input type="date" name="tgl_validasi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Status Validasi</label>
            <select name="status_validasi" class="form-select">
                <option value="Diverifikasi">Diverifikasi</option>
                <option value="Ditolak">Ditolak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan Informasi</button>
        <a href="/verifikator" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>
