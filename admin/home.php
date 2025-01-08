<?php

require_once "../configuration/library.php";

check_admin();

?>

<html>
<head>
    <title>Admin - Kirana Kebaya Bali</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../plugins/fancybox/jquery.fancybox.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column-12">
            <ul class="daftar-menu">
                <li class="active"><a href="admin/login.php">Beranda Admin</a></li>
                <li><a href="manajemen_produk.php">Manajemen Produk</a></li>
                <li><a href="../index.php" target="_blank">Lihat Website</a></li>
                <li><a href="process/logout.php">Logout</a></li>
            </ul>
            
        </div>
    </div>

    
    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Admin Kirana Kebaya Bali</h1>
            <div class="text-center">
                <img src="../images/logokirana.jpeg" width="30%">
            </div>
        </div>
    </div>

</div>

                 
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="column-12">
                <h2 align="center">KIRANA KEBAYA</a></h2>
                <div class="text-center">
                    Alamat: JL. Pulau Bungin no 11
                </div>
                <div class="text-center">
                    Telepon:081217352780
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
target="_blank">Kirana Kebaya</a> For Exam Purposes
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/fancybox/jquery.fancybox.js"></script>

</body>
</html>