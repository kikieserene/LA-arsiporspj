<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Tambah User</h3>

<form action="/user/store" method="post">
    <div class="mb-3">
        <label>Username:</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Role:</label>
        <select name="role" class="form-select" required>
            <option value="">-- Pilih Role --</option>
            <option value="admin">Admin</option>
            <option value="pptk">PPTK</option>
            <option value="bendahara">Bendahara</option>
            <option value="verifikator">Verifikator</option> <!-- ✅ Tambahan di sini -->
        </select>
    </div>
    <button class="btn btn-primary">Simpan</button>
    <a href="/user" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>
