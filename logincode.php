<?php
session_start();
include("dbcon.php");

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];    
    $pass = $_POST['password'];

    try {
        $user = $auth->getUserByEmail('user@domain.tld');
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        echo $e->getMessage();
    }
}else{
    $_SESSION = "não permitido";
    header('Location: login.php');
    exit();
}


?>