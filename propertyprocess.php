<?php
session_start();
require "userClass.php";
if(isset($_POST['publish'])){
    $userid=$_SESSION['user'];
    $type=htmlspecialchars($_POST['property']);
    $bedroom=htmlspecialchars($_POST['bedroom']);
    $bathroom=htmlspecialchars($_POST['bathroom']);
    $state=htmlspecialchars($_POST['state']);
    $price=htmlspecialchars(strip_tags($_POST['price']));
    $uaddress=htmlspecialchars(strip_tags($_POST['address']));
    $pname=htmlspecialchars(strip_tags($_POST['propname']));



    $output=$obj->AddProperty($pname,$userid,$type,$bedroom,$bathroom,$state,$price,$uaddress);
   
    if($output) {
        $_SESSION['property_id']=$output;
            header ("Location: pictureProperty.php");
        }
       
    }
    else{
        header ("Location: property.php?res='$output'");
    }

?>