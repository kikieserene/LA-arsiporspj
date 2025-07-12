<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan SPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            .no-print { display: none; }
        }
    </style>
</head>
<body class="container mt-4">

<h4 class="mb-4">Laporan Data SPJ</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Dokumen</th>
            <th>Status Validasi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($spj as $i => $row): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= esc($row['nama_kegiatan']) ?></td>
            <td><?= esc($row['tanggal']) ?></td>
            <td>Rp<?= number_format($row['jumlah'], 2, ',', '.') ?></td>
            <td>
                <?= !empty($row['dokumen']) ? esc($row['dokumen']) : '<span class="text-muted">Tidak ada</span>' ?>
            </td>
            <td><?= esc($row['status_validasi']) ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<button onclick="window.print()" class="btn btn-primary no-print mt-3">Cetak Sekarang</button>

</body>
</html>
