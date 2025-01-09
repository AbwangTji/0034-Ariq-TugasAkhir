<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anak</title>
</head>
<body>
    <h1>Data Anak</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nama Ibu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anak as $a): ?>
                <tr>
                    <td><?= $a['id'] ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['tanggal_lahir'] ?></td>
                    <td><?= $a['jenis_kelamin'] ?></td>
                    <td><?= $a['alamat'] ?></td>
                    <td><?= $a['nama_ibu'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
