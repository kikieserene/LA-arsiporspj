<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Edit User</h3>

<form action="/user/update/<?= $user['id'] ?>" method="post">
    <div class="mb-3">
        <label>Username:</label>
        <input type="text" name="username" value="<?= esc($user['username']) ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password (kosongkan jika tidak diubah):</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Role:</label>
        <select name="role" class="form-select" required>
            <option value="">-- Pilih Role --</option>
            <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="pptk" <?= $user['role'] === 'pptk' ? 'selected' : '' ?>>PPTK</option>
            <option value="bendahara" <?= $user['role'] === 'bendahara' ? 'selected' : '' ?>>Bendahara</option>
            <option value="verifikator" <?= $user['role'] === 'verifikator' ? 'selected' : '' ?>>Verifikator</option> <!-- ✅ Tambahan -->
        </select>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="/user" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>
