<!DOCTYPE html>
<html>
<head>
    <title>Kelola User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Daftar User</h3>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<a href="/user/create" class="btn btn-success mb-3">Tambah User</a>
<a href="/dashboard" class="btn btn-success mb-3">Kembali ke Dashboard</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $index => $user): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['role']) ?></td>
            <td>
                <a href="/user/edit/<?= $user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/user/delete/<?= $user['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">
                    Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
