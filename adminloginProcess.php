<?php
session_start();
require("adminClass.php");
if(isset($_POST['login'])){
    $username=trim(htmlspecialchars(strip_tags($_POST['userinput'])));
    $email=htmlspecialchars(strip_tags($_POST['userinput']));
    $pass=htmlspecialchars(strip_tags($_POST['pwd']));
   $output= $obj->adminlogin($username,$email,$pass);
    if($output){
        $_SESSION['user']=$output;
        header("location:adminmanage.php");

    }
    else{
        header("location:adminlogin.php?msg='incorrect Password'");
    }
}

// $output=
// if($output){
    
// }
?>