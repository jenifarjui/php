<?php 
session_start();

if(isset($_POST['registration_submit'])){
    $name =htmlspecialchars($_POST['name']);
    $email =htmlspecialchars($_POST['email']);
    $password =htmlspecialchars($_POST['password']);
    $number =htmlspecialchars($_POST['number']);
    $_SESSION['abcd'] = $number;
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';




    
    // session sart 
    // seession insert key value
    // example =  $_SESSION['abcd'] = $number;
    // session value unset 
    // eample unset($_SESSION['abcd'])


    // POST GET SESSION COOKIE FILE
}
echo $_SESSION['abcd'];

?>