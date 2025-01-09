<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
</head>
<body>
    <h1>Data Petugas</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No HP</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($petugas as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['jabatan'] ?></td>
                    <td><?= $p['no_hp'] ?></td>
                    <td><?= $p['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
