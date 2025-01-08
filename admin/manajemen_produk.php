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
                   <li><a href="../admin/home.php">Beranda Admin</a></li>
                   <li class="active"><a href="manajemen_produk.php">Manajemen Produk</a></li>
                   <li><a href="../index.php" target="_blank">Lihat Website</a></li>
                   <li><a href="process/logout.php">Logout</a></li>
              </ul>
            </div>
        </div>
    </div>

<div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Manajemen Produk</h1>
            <br />
            <br />
            <br />
        </div>
    <div class="column-12">
        <div class="text-right">
            <a href="tambah_produk.php" class="btn btn-success">Tambah Produk</a>
        </div>
        <br />
        <table class="table table-bordered" style="border: #11111 solid 1px;">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Menu</th>
            </tr>
            </thead>
            <tbody>
                
            <?php
    $sql="SELECT * FROM produk ORDER BY nama ASC";
    if ($result = mysqli_query($conn, $sql)) {
        $count = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="text-center">
                <td><?php echo $count; ?></td>
                <td>
                    <a>
                        <img src="../images/<?php echo $row['gambar'] ?>" width="150">
                    </a>
                </td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td>
                <a href="edit_produk.php?id=<?php echo $row ['id']?>" class="btn btn-success">Edit</a>
                <a href="process/product_delete.php?id=<?php echo $row ['id']?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
            $count++;
        }
    }
    ?>
            </tbody>
        </table>
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