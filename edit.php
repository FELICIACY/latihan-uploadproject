<?php

include 'sambung.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($sambung, "update mahasiswa set nama='$nama', nisn=$nisn, jurusan='$jurusan', alamat='$alamat' where kode='$kode'");

header("location:index.php");

?>