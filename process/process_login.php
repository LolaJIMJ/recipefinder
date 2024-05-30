<?php
session_start();
require_once "../classes/sanitize.php";
require_once "../classes/User.php";

$user = new User;

if (isset($_POST['btnlogin'])) {
    // Retrieve and sanitize form data
    $email = sanitizer($_POST['email']);
    $pwd = sanitizer($_POST['pwd']);
    $confirm_pwd = sanitizer($_POST['confirm_pwd']);

    // Check if passwords match
    if ($pwd !== $confirm_pwd) {
        $_SESSION['errormsg'] = "Passwords do not match";
        header("location:../login.php");
        exit();
    }

    $data = $user->login($email, $pwd);
    if ($data) { // log in
        $_SESSION['useronline'] = $data;
        header("location:../userdashboard.php");
        exit();
    } else {
        header("location:../login.php");
    }
} else { // direct visit
    $_SESSION['errormsg'] = "Please complete the form";
    header("location:../login.php");
    exit();
}

