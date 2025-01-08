<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email == 'kiranakebayabali18@gmail.com' && $password == 'kirana18') {
    $_SESSION['login_status'] = TRUE;
    $_SESSION['login_email'] = $email;

    header('location: ../home.php');
} else {
    header('location: beranda.php');
}
?>