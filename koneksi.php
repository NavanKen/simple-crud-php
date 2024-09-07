<?php

$db = mysqli_connect("localhost", "root", "", "latihan");

function query($tangkap)
{
    global $db;

    $result = mysqli_query($db, $tangkap);

    $kelas = [];

    while ($siswa = mysqli_fetch_assoc($result)) {
        $kelas[] = $siswa;
    }
    return $kelas;

}

function tambah($data)
{

    global $db;

    $nama = htmlspecialchars($data ["nama"]);
    $nisn = htmlspecialchars($data ["nisn"]);
    $email = htmlspecialchars($data ["email"]);
    $nohp = htmlspecialchars($data ["nohp"]);

    $query = "INSERT INTO siswa VALUE('','$nama','$nisn','$email','$nohp')";


    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($db);
}

function ubah($data)
{
    global $db;
    $id = $data["id"];
    $nama = htmlspecialchars($data ["nama"]);
    $nisn = htmlspecialchars($data ["nisn"]);
    $email = htmlspecialchars($data ["email"]);
    $nohp = htmlspecialchars($data ["nohp"]);

    $query = "UPDATE siswa SET nama = '$nama', nisn = '$nisn', email = '$email', nohp = '$nohp' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
