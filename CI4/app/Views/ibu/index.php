<!DOCTYPE html>
<html>
<head>
    <title>Data Ibu</title>
</head>
<body>
<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h1>Data Ibu</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ibu as $i): ?>
            <tr>
                <td><?= $i['id_ibu']; ?></td>
                <td><?= $i['nama']; ?></td>
                <td><?= $i['alamat']; ?></td>
                <td><?= $i['tanggal_lahir']; ?></td>
                <td><?= $i['no_hp']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
</body>
</html>
