<?php

session_start();
require_once "../../configuration/database_connection.php";

$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$gambar_name = $_FILES['gambar'] ['name'];
$gambar_tmp_name = $_FILES['gambar'] ['tmp_name'];
$gambar_directory = '../../images/';
$terupload = move_uploaded_file($gambar_tmp_name, $gambar_directory.$gambar_name);

$sql = "INSERT INTO produk (nama, deskripsi, gambar)
VALUES ('$nama', '$deskripsi', '$gambar_name')";

$conn->query($sql);

header('location:../manajemen_produk.php');