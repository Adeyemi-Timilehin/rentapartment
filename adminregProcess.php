<?php
session_start();
require "adminClass.php";
// print_r($_POST);
if(isset($_POST['admin_register'])){
    $username=htmlspecialchars(strip_tags($_POST['username']));
    
    $password=htmlspecialchars(strip_tags($_POST['password']));
    $email=htmlspecialchars(strip_tags($_POST['email']));
   
 
    $output=$obj->adminRegister( $username,$password,$email);
    if($output) {
        $_SESSION['admin'] = $output;
        header ("Location: adminRegister.php");
    }
}

?>