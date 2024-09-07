<?php

require "koneksi.php";

$id = $_GET["id"];

$data = query("SELECT * FROM siswa WHERE id = $id")[0];


if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo"
        <script>
         alert(' Data Berhasil Diubah');
         document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "GAGAl";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <form action="" method="post">
        <input type="hidden" id="id" name="id"
            value="<?= $data['id'];?>">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama"
                    value="<?= $data['nama'];?>">
            </li>
            <li>
                <label for="nisn">Nisn</label>
                <input type="text" id="nisn" name="nisn"
                    value="<?= $data['nisn']?>">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" id="Email" name="email"
                    value="<?= $data['email']?>">
            </li>
            <li>
                <label for="hp">no hp</label>
                <input type="text" id="hp" name="nohp"
                    value="<?= $data['nohp']?>">
            </li>
            <button name="submit">Ubah Data</button>
        </ul>
    </form>
</body>

</html>