<?php
session_start();

if (isset($_POST['registration_submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars($_POST['email']); // you do 
    $password = htmlspecialchars($_POST['password']); // you do 
    $number = htmlspecialchars($_POST['number']); // you do 
    if (empty($name)) {
        $_SESSION['alert']['type'] = 'danger';
        $_SESSION['alert']['message'] = 'your name is empty';
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
