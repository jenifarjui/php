<?php 
echo '<pre>';
print_r($_POST);
echo '</pre>';

if(isset($_POST['registration_submit'])){
    $name =htmlspecialchars($_POST['name']);
    $email =htmlspecialchars($_POST['email']);
    $password =htmlspecialchars($_POST['password']);
    $number =htmlspecialchars($_POST['number']);
    $submit =htmlspecialchars($_POST['submit']);
}

?>