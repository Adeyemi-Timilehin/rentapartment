<?php
	
	session_start ();
	
	
	require "userClass.php";
	
	//Preventing unwanted visits
	if(isset($_POST['picupload']) && isset($_SESSION['user'])) {
		
		//main location
		$pix = $_FILES['picture'];
		
		// print_r($pix);
		

        $output=$obj->uploadPix($pix);
        if($output){
            header("Location: manage.php?msg=Upload Successful!");
        }
        else{
            header("Location: manage.php?msg=error, unsuccessful uploadl!");
        }
	} 
