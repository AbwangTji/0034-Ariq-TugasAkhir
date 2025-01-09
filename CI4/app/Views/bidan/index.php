<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bidan</title>
</head>
<body>
    <h1>Data Bidan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidan as $b): ?>
                <tr>
                    <td><?= $b['id'] ?></td>
                    <td><?= $b['nama'] ?></td>
                    <td><?= $b['alamat'] ?></td>
                    <td><?= $b['no_hp'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
