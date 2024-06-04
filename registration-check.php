<?php
session_start();

if (isset($_POST['registration_submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email'])); 
    $password = htmlspecialchars(trim($_POST['password'])); 
    $number = htmlspecialchars(trim($_POST['number'])); 
    if (empty($name)) {
        $_SESSION['alert']['type'] = 'danger';
        $_SESSION['alert']['message'] = 'your name is empty';
        header('Location:registration.php');
        exit();
    }
    if (empty($email)){
        $_SESSION['alert']['type']='danger';
        $_SESSION['alert']['message']='your email is empty';
        header('Location:registration.php');
        exit();
    }




    // alert 2 type of alert
    // danger
    // success


    // session sart 
    // seession insert key value
    // example =  $_SESSION['abcd'] = $number;
    // session value unset 
    // eample unset($_SESSION['abcd'])


    // POST GET SESSION COOKIE FILE
}
