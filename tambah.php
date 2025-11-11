<?php
include 'sambung.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($sambung, "insert into mahasiswa (kode, nama, nisn, jurusan, alamat) values('$kode','$nama',$nisn,'$jurusan','$alamat')");

header("location:index.php");
?>