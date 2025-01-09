<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Imunisasi</title>
</head>
<body>
    <h1>Data Imunisasi</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Anak</th>
                <th>Jenis Imunisasi</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imunisasi as $i): ?>
                <tr>
                    <td><?= $i['id'] ?></td>
                    <td><?= $i['nama_anak'] ?></td>
                    <td><?= $i['jenis_imunisasi'] ?></td>
                    <td><?= $i['tanggal'] ?></td>
                    <td><?= $i['keterangan'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
