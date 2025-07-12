<!DOCTYPE html>
<html>
<head>
    <title>Tambah SPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Tambah Data SPJ</h3>

<form action="/spj/store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Nama Kegiatan:</label>
        <input type="text" name="nama_kegiatan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah (Rp):</label>
        <input type="number" step="0.01" name="jumlah" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Upload Dokumen (opsional):</label>
        <input type="file" name="dokumen" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.png">
    </div>
    <button class="btn btn-primary">Simpan</button>
    <a href="/spj" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>
