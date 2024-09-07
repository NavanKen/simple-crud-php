<?php

require "koneksi.php";

$siswa = query("SELECT * FROM siswa");


// while( $siswa = mysqli_fetch_assoc($result)){
//     var_dump($siswa);
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latian Database</title>
</head>

<body>
    <h3>Latian Database</h3>
    <a href="tambah.php">Tambah Data</a>
    <table border="3" cellpadding="5">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nisn</th>
            <th>Email</th>
            <th>No Hp</th>
        </tr>
        <?php $i = 1;?>
        <?php $i = 1; ?>
        <?php foreach($siswa as $row): ?>
        <tr>
            <td><?= $i++; ?></td>

            <td><?= $row["id"]; ?></td>
            <td>
                <a
                    href="ubah.php?id=<?= $row['id']; ?>">Ubah</a>
                | <a href="hapus.php?id=<?= $row['id']; ?>"
                    onclick="return confirm('Yakin?');">Hapus</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nisn"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["nohp"]; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>