<!DOCTYPE html>
<html>
<head>
    <title>Laporan SPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h3>Laporan SPJ Tervalidasi</h3>
    <a href="#" class="btn btn-success mb-3" onclick="window.print()">Cetak Laporan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($spj as $i => $row): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= esc($row['nama_kegiatan']) ?></td>
                <td><?= esc($row['tanggal']) ?></td>
                <td>Rp<?= number_format($row['jumlah'], 2, ',', '.') ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>
