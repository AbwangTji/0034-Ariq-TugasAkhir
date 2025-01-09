<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penimbang</title>
</head>
<body>
    <h1>Data Penimbang</h1>
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
            <?php foreach ($penimbang as $pen): ?>
                <tr>
                    <td><?= $pen['id'] ?></td>
                    <td><?= $pen['nama'] ?></td>
                    <td><?= $pen['alamat'] ?></td>
                    <td><?= $pen['no_hp'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
