<?php

include 'sambung.php';

$kode = $_GET['id'];

mysqli_query($sambung, "delete from mahasiswa where kode='$kode'");

header("location:index.php");

?>