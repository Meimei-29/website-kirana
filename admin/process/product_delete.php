<?php

session_start();

require_once "../../configuration/database_connection.php";

/**
 * Untuk menampung variable dari tipe data get
 */

 $id = $_GET['id'];
 $sql = "DELETE FROM produk WHERE id=$id";

 $conn->query($sql);
 header("Location: ../manajemen_produk.php");
 
?>