<?php

 $database_name = 'kiranadb';
 $username = 'root';
 $password = '';
 $servername = 'localhost';

 $conn = mysqli_connect($servername, $username, $password, $database_name);
 // Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
?>