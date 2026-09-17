<?php
// index.php
require_once 'products.php';
require_once 'functions.php';

$totalAset = hitungTotalNilaiStok($katalogMobil);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Showroom Mobil</title>
</head>
<body>

    <h2>Katalog Mobil Showroom</h2>

    <table border="1" cellpadding="8">
        <!-- 1. BARIS HEADER TABEL -->
        <tr bgcolor="#cccccc">
            <th>ID</th>
            <th>Nama Mobil</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>

        <!-- 2. BARIS DATA MOBIL (PERULANGAN) -->
        <?php foreach ($katalogMobil as $mobil): ?>
            <?php $warnaBg = CekStatusStok($mobil['stok']); ?>
            <tr bgcolor="<?= $warnaBg; ?>">
                <td><?= $mobil['id']; ?></td>
                <td><?= $mobil['nama']; ?></td>
                <td><?= $mobil['kategori']; ?></td>
                <td>Rp <?= number_format($mobil['harga']); ?></td>
                <td><?= $mobil['stok']; ?></td>
                <td><?= $mobil['deskripsi']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Total Nilai Aset Stok: Rp <?= number_format($totalAset); ?></h3>

</body>
</html>