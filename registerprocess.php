<?php
session_start();
require "userClass.php";
// print_r($_POST);
if(isset($_POST['landlord_register'])){
    $username=htmlspecialchars(strip_tags($_POST['username']));
    $firstname=htmlspecialchars(strip_tags($_POST['fname']));
    $lastname=htmlspecialchars(strip_tags($_POST['lname']));
    $password=htmlspecialchars(strip_tags($_POST['password']));
    $email=htmlspecialchars(strip_tags($_POST['email']));
    $phone=htmlspecialchars(strip_tags($_POST['phone']));
    $address=htmlspecialchars(strip_tags($_POST['address']));
    if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
    }
    else{
        $gender='';
    }
   

    $output=$obj->insertRegister( $username,$firstname,$lastname,$gender,$password,$email,$phone,$address);
    if($output) {
        $_SESSION['guest'] = $output;
        header ("Location: register.php");
    }
}

?>