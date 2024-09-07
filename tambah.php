<?php

require "koneksi.php";



if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo"
        <script>
         alert(' Data Berhasil Ditambahkan');
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
    <title>Tambah Data</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama">
            </li>
            <li>
                <label for="nisn">Nisn</label>
                <input type="text" id="nisn" name="nisn">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" id="Email" name="email">
            </li>
            <li>
                <label for="hp">no hp</label>
                <input type="text" id="hp" name="nohp">
            </li>
            <button name="submit">Submit</button>
        </ul>
    </form>
</body>

</html>