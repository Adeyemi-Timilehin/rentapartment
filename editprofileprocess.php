<?php
session_start();
require "userClass.php";

// print_r($_POST);
if(isset($_POST['update'])){
    $userid=$_SESSION['user'];
    $firstname=htmlspecialchars(strip_tags($_POST['fname']));
    $lastname=htmlspecialchars(strip_tags($_POST['lname']));
    $phone=htmlspecialchars(strip_tags($_POST['phone']));
    $address=htmlspecialchars(strip_tags($_POST['address']));
    if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
    }
    else{
        $gender='';
    }
   

    $output=$obj->updateUser( $userid,$firstname,$lastname,$gender,$phone,$address);
    if($output) {

        header ("Location: manage.php?result='$output'");
    }
}

?>