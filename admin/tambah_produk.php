<?php

require_once "../configuration/library.php";
require_once "../configuration/database_connection.php";

check_admin();

?>

<html>
<head>
    <title>Admin - KIRANA KEBAYA BALI</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../plugins/fancybox/jquery.fancybox.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column-12">
            <ul class="daftar-menu">
                <li><a href="../admin">Beranda Admin</a></li>
                <li class="active"><a href="manajemen_produk.php">Manajemen Produk</a></li>
                <li><a href="../index.php" target="_blank">Lihat Website</a></li>
                <li><a href="process/logout.php">logout</a></li>
            </ul> 
        </div>
    </div>

    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Manajemen Produk</h1>
            <br/>
            <br/>
            <br/>
        </div>
        <div class="column-12">
            <h3>Isi form dibawah untuk Edit Produk :</h3>
            <form action="process/product_save.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label>Gambar Produk</label>
                    <input type="file" class="form-control" name="gambar" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi Produk</label>
                    <textarea class="form-control" name="deskripsi" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Produk</button>
                    <a href="manajemen_produk.php" class="btn btn-warning">Kembali ke Daftar Produk</a>
                </div>
            </form>
        </div>
    </div>
    
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="column-12">
                <h2 align="center">KIRANA KEBAYA</h2>
                <div class="text-center">
                    Alamat: JL. Pulau Bungin no 11
                </div>
                <div class="text-center">
                    Telepon: 081217352780
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-credit">
    <div class="container">
        <div class="row">
            <div class="column-12 text-center">
            Created by <a href="https://www.tiktok.com/@kiranakebayabali"
target="_blank">Kirana Kebaya</a> For exam purposes
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/fancybox/jquery.fancybox.js"></script>

</body>
</html>