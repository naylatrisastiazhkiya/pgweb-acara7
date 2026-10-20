<?php
// Data disimpan dalam array asosiatif agar dinamis
$data_penduduk = [
    ["kecamatan" => "Moyudan", "luas" => 27.62, "jumlah_penduduk" => 31497],
    ["kecamatan" => "Minggir", "luas" => 27.27, "jumlah_penduduk" => 29886],
    ["kecamatan" => "Seyegan", "luas" => 26.63, "jumlah_penduduk" => 47129],
    ["kecamatan" => "Godean", "luas" => 26.84, "jumlah_penduduk" => 72028],
    ["kecamatan" => "Gamping", "luas" => 29.25, "jumlah_penduduk" => 108675]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Penduduk</title>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>kecamatan</th>
        <th>luas</th>
        <th>jumlah_penduduk</th>
    </tr>
    <?php foreach ($data_penduduk as $row): ?>
    <tr>
        <td><?= $row['kecamatan']; ?></td>
        <td><?= $row['luas']; ?></td>
        <td align="right"><?= $row['jumlah_penduduk']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>