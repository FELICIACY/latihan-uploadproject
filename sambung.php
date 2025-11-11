<?php

$sambung = mysqli_connect("localhost", "root", "mysql", "mandiri");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>