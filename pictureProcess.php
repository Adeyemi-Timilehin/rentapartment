<?php
	session_start ();
	
	require "userClass.php";
	
	//Preventing unwanted visits
	if(isset($_POST['picupload'])) {
		
		//main location
		$pix1 = $_FILES['picture1'];
		$pix2 = $_FILES['picture2'];
		$pix3 = $_FILES['picture3'];
		$pix4 = $_FILES['picture4'];
		$pix5 = $_FILES['picture5'];
		$pix6 = $_FILES['picture6'];
		$id=  $_SESSION['property_id'];
		
		
		// print_r($pix);
// echo "<pre>";		
// print_r($pix1);
// print_r($pix2);
// print_r($pix3);
// print_r($pix4);
// print_r($pix5);
// print_r($pix6);
// echo "</pre>";

        $output=$obj->uploadmultiple($id,$pix1,$pix2,$pix3,$pix4,$pix5,$pix6);
        if($output){
            header("Location: manage.php?msg=Upload Successful!");
        }
        else{
            header("Location: pictureProperty.php?msg=error, unsuccessful uploadl!");
        }
	} 