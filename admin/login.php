<?php
require_once "../configuration/library.php";

check_login_page();

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
            <h1 align="center">Halaman Login KIRANA KEBAYA BALI</h1>
            <hr />
        </div>
        <div class="column-6">
            <img src="../images/logokirana.jpeg" class="img-responsive" width="50%">
        </div>
        <div class="column-6">
            <br />
            <br />
            <br />
            <h3>Isi form dibawah untuk login :</h3>
            <form action="process/login.php" method="post" onsubmit="return validateEmail()">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Login</button>
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
target="_blank">Kirana Kebaya</a> For Exam Purposes
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/fancybox/jquery.fancybox.js"></script>

</body>
</html>