<?php
require("userClass.php");
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$output=$obj->delete_property($id);
  
 header("Location: manage.php");
}

?>