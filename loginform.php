<?php
session_start();
require("userClass.php");
if(isset($_POST['login'])){
    $username=trim(htmlspecialchars(strip_tags($_POST['userinput'])));
    $email=htmlspecialchars(strip_tags($_POST['userinput']));
    $pass=htmlspecialchars(strip_tags($_POST['pwd']));
   $output= $obj->login($username,$email,$pass);
    if($output){
        $_SESSION['user']=$output;
        header("location:manage.php");

    }
    else{
        header("location:login.php?msg='incorrect Password'");
    }
}

// $output=
// if($output){
    
// }
?>