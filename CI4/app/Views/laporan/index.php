<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan</title>
</head>
<body>
    <h1>Data Laporan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Anak</th>
                <th>Jenis Imunisasi</th>
                <th>Tanggal</th>
                <th>Petugas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan as $l): ?>
                <tr>
                    <td><?= $l['id'] ?></td>
                    <td><?= $l['nama_anak'] ?></td>
                    <td><?= $l['jenis_imunisasi'] ?></td>
                    <td><?= $l['tanggal'] ?></td>
                    <td><?= $l['petugas'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
