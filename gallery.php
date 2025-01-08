<?php

require_once "configuration/database_connection.php";

?>

<html>
    <head>
        <title>KIRANA KEBAYA BALI - GALLERY</title>
        <style>
            .container {
              width: 100%;
              height: 100vh;
              background-color: #F0F8FF;
              border-radius: 10px; 
          }

         * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
          }

          body {
              font-family: 'Times New Roman', Times, serif;
              background-color: #F0F8FF;
          }

          /** styling navbar */
          .nav {
              display: flex;
              justify-content: space-between;
              align-items: center;
              background-color: #D2691E;
              padding-bottom: 5px;
              margin: 0 !important;
              overflow: hidden;
              list-style-type: none;
          }
          .navbar {
              margin-left: auto;
              display: flex;
          }
          .navbar ul {
              display: flex;
              list-style-type: none;
              position: relative;
              display: inline-table;
          }
          .navbar li {
              margin-left: auto;
              list-style-type: none;
              padding-right: 40px;
          }
          .navbar li a {
              display: block;
              text-align: center;
              color: #fff;
              padding: 16px;
              text-decoration: none;
              font-size: 1.2rem;
          }
          .navbar li a:hover {
              background-color: black;
              opacity: .17;
          }
          /** nama toko */
          .img-responsive {
              display: flex;
              width: 5%;
              height: 5%;
              padding-left: 10px;
              padding-top: 4px;
              font-family : 'Times New Roman', Times, serif;
              justify-content : space-between;
          }
          .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(195px, 1fr));
            margin-top: -575px;
            gap: 10px;
            padding: 5px;
          }
          .gallery-item {
            width: 200px;
            height: 150px;
            object-fit: cover;
            transition: transform 0.3s ease;
          }
          .gallery-item:hover {
            transform: scale(1.1);
            box-shadow: 15px 15px 20px rgb(220, 220, 220);
          }
          .gallery-item img{
            width: 200px;
            height: 150px;
          }
          .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            padding-top: 60px; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto;
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.9); 
          }
          .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
          }
          /*untuk tombol close**/
          .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
          }
          .close:hover,
          .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
          }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="nav">
            <img src="images/shop.png" class="img-responsive">
            <p><font face ="times new roman" color="white" size="4">Sudira APE</font></p>
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="about.html">About</a></li> 
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        </div>  
    
        <div class="gallery">

        <?php

            $sql = "SELECT * FROM produk ORDER BY nama ASC";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { ?>
        
        <div class="gallery-item">
            <img src="images/<?php echo $row['gambar'] ?>" class="img" onclick="openModal(this)" alt="gambar">
        </div>
        <div id="modal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
            <?php
            }
        }
    }
?>
<script>
// Fungsi untuk membuka modal dan menampilkan gambar yang diklik
function openModal(imgElement) {
  let modal = document.getElementById("modal");
  let modalImg = document.getElementById("modalImage");

  modal.style.display = "block";
  modalImg.src = imgElement.src;
}

// Fungsi untuk menutup modal
function closeModal() {
  document.getElementById("modal").style.display = "none";
}
</script>
        </div>
    </body>
</html>