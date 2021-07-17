<?php
include "constant.php";
class User {
    public $con;
public function __construct(){
$this->con=new mysqli(SERVERNAME,USER,PASSWORD,DATABASE);


}
function insertRegister($username,$fname,$lname,$gender,$pwd,$email,$phone,$address){
$encpwd=md5($pwd);
$sql="INSERT INTO landlord(username,firstname,lastname,gender,pass,email,phone,uaddress) VALUES('$username','$fname','$lname','$gender','$encpwd','$email','$phone','$address')";
$output=$this->con->query($sql);
if($output){
    $msg= "<div class='alert alert-success text-center'>You account has been successfully created</div>";
}
else{
    $msg="<div class='alert alert-danger  text-center'>You have an account on this page before, please try and login</div>";
}
return $msg;
}
public function updateUser($Id,$fname,$lname,$gender,$phone,$address) {
			
    $sql = "UPDATE landlord SET  firstname = '$fname',lastname='$lname',gender='$gender',phone='$phone', uaddress= '$address' WHERE landlord_Id = '$Id'";
    
    $result = $this->con->query($sql);
   if($result){
       return true;
   }
   return false;
        
    }

function login($username,$email,$password){
    $enc=md5($password);
    $q="SELECT * FROM landlord WHERE username='$username' AND pass='$enc' OR email='$email' AND  pass='$enc'";
    $result=$this->con->query($q);
    if($result->num_rows > 0) {
        //				if (is_array ($row)) {
                        $row = $result->fetch_array();
               if($row){
                   $user_id=$row['landlord_Id'];
                   return $user_id;
               }
               else{
                   return 0;
               }
}
}

//Add multiple pictures
public function uploadmultiple($id,$pix1,$pix2,$pix3,$pix4,$pix5,$pix6) {
	// echo "<pre>";
	// 	print_r($pix_array);
	// 	echo "</pre>";
		
		//echo $pix_array['name'];
		
		$imgname1 =  $pix1['name'];
		$imgname2 =  $pix2['name'];
		$imgname3 =  $pix3['name'];
		$imgname4 =  $pix4['name'];
		$imgname5 =  $pix5['name'];
        $imgname6 =  $pix6['name'];
        // foreach(){

        // }
		// $imgname =  $pix1['name'];
		$tmp_loc1 = $pix1['tmp_name'];
		$tmp_loc2 = $pix2['tmp_name'];
		$tmp_loc3 = $pix3['tmp_name'];
		$tmp_loc4 = $pix4['tmp_name'];
		$tmp_loc5 = $pix5['tmp_name'];
		$tmp_loc6 = $pix6['tmp_name'];
	
		
		//retrieve the extension
		$ext1 = pathinfo ($imgname1, PATHINFO_EXTENSION);
		$ext2 = pathinfo ($imgname2, PATHINFO_EXTENSION);
		$ext3 = pathinfo ($imgname3, PATHINFO_EXTENSION);
		$ext4 = pathinfo ($imgname4, PATHINFO_EXTENSION);
		$ext5 = pathinfo ($imgname5, PATHINFO_EXTENSION);
		$ext = pathinfo ($imgname6, PATHINFO_EXTENSION);
				//New file name
		//$newname = rand(100000000,900000000).".$ext";
		$newname1 = (time()*2).".$ext1";
		$newname2 = (time()*3).".$ext2";
		$newname3 = (time()*4).".$ext3";
		$newname4 = (time()*5).".$ext4";
		$newname5 = (time()*6).".$ext5";
		$newname6 = time().".$ext";
		
		//check allowed extension
		// if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
			move_uploaded_file ($tmp_loc1, "photo_pro/$newname1");
			move_uploaded_file ($tmp_loc2, "photo_pro/$newname2");
			move_uploaded_file ($tmp_loc3, "photo_pro/$newname3");
			move_uploaded_file ($tmp_loc4, "photo_pro/$newname4");
			move_uploaded_file ($tmp_loc5, "photo_pro/$newname5");
			move_uploaded_file($tmp_loc6, "photo_pro/$newname6");
			
			//CHANGE IMAGE
            $sql="INSERT INTO picture(property_id,frontage,surrounding,sitting_room,room,bathroom,kitchen) VALUES('$id','$newname1','$newname2','$newname3','$newname4','$newname5','$newname6')";
			$result = $this->con->query ($sql);
            if($result){
                return true;
            }
            // return false;
            // print_r($result);
            // die();
        //}
        else{
            header('location:manage.php?msg=upload failed');
        }

    // echo $pic1['name'];
    // echo $pic2['name'];
    // echo $pic3['name'];
    // echo $pic4['name'];
    // echo $pic5['name'];
    // echo $pic6['name'];
}
//update editprofile

public function uploadPix($pix_array) {
	echo "<pre>";
		print_r($pix_array);
		echo "</pre>";
		
		//echo $pix_array['name'];
		
		$imgname =  $pix_array['name'];
		$tmp_loc = $pix_array['tmp_name'];
		$filetype = strtolower ($pix_array['type']);
		$imgsize = $pix_array['size'];
		
		//retrieve the extension
		$ext = pathinfo ($imgname, PATHINFO_EXTENSION);
		
		//New file name
		//$newname = rand(100000000,900000000).".$ext";
		$newname = time().".$ext";
		
		//check allowed extension
		if($ext == strtolower('JPG') || $ext == 'jpeg' || $ext == 'png') {
			move_uploaded_file ($tmp_loc, "photos/$newname");
			$id = $_SESSION['user'];
			//CHANGE IMAGE
			$sql = "UPDATE landlord SET picture = '$newname' WHERE landlord_id = '$id'";
            $result = $this->con->query ($sql);
            
            if($result){
                return true;
            }
            return false;
        }
        else{
            header('location:manage.php?msg=upload failed');
        }

    //echo $pics_array['name'];
}
public function getDetails($id) {
    $sql = "SELECT * FROM landlord WHERE landlord_id = '$id'";
    
    $result = $this->con->query ($sql);
    
    $row = $result->fetch_assoc ();
    return $row;
}
public function getProperty() {
    $sql = "SELECT * FROM property";
    
    $result = $this->con->query ($sql);
    
    if($result->num_rows > 0) {
        //				if (is_array ($row)) {
                        $row = $result->fetch_array();
               if($row){
               $out=$row['property_id'];
               return $out;
               }
               else{
                   return 0;
               }

}
}
public function getPropertylandlord($id) {
    $sql ="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id where landlord_Id='$id'";
    
    $result = $this->con->query ($sql);
    
	$data = array();
			
			while($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
				return $data;
			
}
//logout 
function logout(){
			
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
    session_destroy ();
    
    header ("Location: login.php");
}
//property type
public function getPropertytype($selected = '') {
			
    //Query to Select all states from database
    $sql = "SELECT * FROM property_type";
    
    //Fetch using the query from database
    $result = $this->con->query($sql);
    
    
    
    //Put result in a select and run it through a while loop because it is an array
    echo "<select name='property' id='type' class='form-control'>";
    echo "<option value=''> Select Prop Type </option>";
        while($row = $result->fetch_assoc()) {
            
            $propertyname = $row['property_type_name'];
            $propertyid = $row['property_type_id'];
            
            if($selected == $propertyid) {
          
                echo "<option value='$propertyid' selected='selected'> $propertyname</option>";
            } else{
                echo "<option value='$propertyid'> $propertyname</option>";
            }
            
        }
    echo "</select>";
}
//bedroom
public function getBedroom($selected = '') {
			
    //Query to Select all states from database
    $sql = "SELECT * FROM bedroom";
    
    //Fetch using the query from database
    $result = $this->con->query($sql);
    
    
    
    //Put result in a select and run it through a while loop because it is an array
    echo "<select name='bedroom' id='number' class='form-control'>";
    echo "<option value=''> Select Bedroom Number </option>";
        while($row = $result->fetch_assoc()) {
            
            $bedname = $row['name'];
            $bedid = $row['bedroom_id'];
            
            if($selected == $bedid) {
          
                echo "<option value='$bedid' selected='selected'>$bedname </option>";
            } else{
                echo "<option value='$bedid'>$bedname</option>";
            }
            
        }
    echo "</select>";
}
//fetch bathroom
public function getBathroom($selected = '') {
			
    //Query to Select all states from database
    $sql = "SELECT * FROM bathroom";
    
    //Fetch using the query from database
    $result = $this->con->query($sql);
    
    
    
    //Put result in a select and run it through a while loop because it is an array
    echo "<select name='bathroom' id='number' class='form-control'>";
    echo "<option value=''> Select Bathroom Number </option>";
        while($row = $result->fetch_assoc()) {
            
            $bathname = $row['bathroom-number'];
            $bathid = $row['bathroom_id'];
            
            if($selected == $bathid) {
          
                echo "<option value='$bathid' selected='selected'>  $bathname</option>";
            } else{
                echo "<option value='$bathid'>$bathname</option>";
            }
            
        }
    echo "</select>";
}
//get states
public function getState($selected = '') {
			
    //Query to Select all states from database
    $sql = "SELECT * FROM states";
    
    //Fetch using the query from database
    $result = $this->con->query($sql);
    
    
    
    //Put result in a select and run it through a while loop because it is an array
    echo "<select name='state' id='state' class='form-control'>";
     echo "<option value=''>--Select State---</option>";
        while($row = $result->fetch_assoc()) {
            
            $statename = $row['name'];
            $stateid = $row['id'];
            
            if($selected == $stateid) {
                echo "<option value='$stateid' selected='selected'>$statename</option>";
            } else{
                echo "<option value='$stateid'>$statename</option>";
            }
            
        }
    echo "</select>";
}
//Get Local government
		
public function getLocal($id) {
			
    //Query to Select all states from database
    $sql = "SELECT * FROM local_governments
    where state_id='$id'";
    
    //Fetch using the query from database
    $result = $this->con->query($sql);
    
    
    
    //Put result in a select and run it through a while loop because it is an array
    echo "<select name='local' id='localid' class='form-control'>";
        while($row = $result->fetch_assoc()) {
            
            $localname = $row['name'];
            $localid = $row['id'];
            
            echo "<option value='$localid'>$localname</option>";
        }
    echo "</select>";
}

//add Property

function AddProperty($pname,$userid,$type,$bedroom,$bathroom,$state,$price,$address){
    $sql="INSERT INTO property(pname,landlord_id,property_type_id,bedroom_id,bathroom_id,state_id,price,locationproperty) VALUES('$pname','$userid','$type','$bedroom','$bathroom','$state','$price','$address')";
$output=$this->con->query($sql);

if($output){
    $property_id = $this->con->insert_id;

return  $property_id;
}
else{
   return 0;
}

}
function delete_property($id){
    $q="DELETE FROM property WHERE property_id='$id'"; 
    $q2="DELETE FROM picture WHERE property_id='$id'"; 
    $out=$this->con->query($q);
    $out2=$this->con->query($q2);
}
//return property id
function showPropertyid(){
    $sql="SELECT * FROM property";
       
    $result=$this->con->query($sql);
    if($result->num_rows > 0) {
        //				if (is_array ($row)) {
                        $row = $result->fetch_array();
               if($row){
                   $property_id=$row['property_id'];
                   return $property_id;
               }
               else{
                   return 0;
               }
}
            
    }
function showProperties(){
$sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON property.property_id=picture.property_id";
   
$result = $this->con->query ($sql);
    
$data = array();
        
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
            return $data;
        
}
function showPropertiesonIndex(){
    $sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON property.property_id=picture.property_id LIMIT 8";
       
    $result = $this->con->query ($sql);
        
    $data = array();
            
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
                return $data;
            
    }
//function to get all the property details including the landlord details

function showAlldetails($id){
$sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON picture.property_id=property.property_id  JOIN landlord ON landlord.landlord_Id=property.landlord_id WHERE property.property_id='$id'";
$result = $this->con->query ($sql);
    
$d = array();
        
        while($row = $result->fetch_assoc()) {
            $d[] = $row;
        }
            return $d;
        
}
function searchProperty($state,$bedname,$property){
    $sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON picture.property_id=property.property_id JOIN states ON states.id=property.state_id WHERE states.name='$state' OR bedroom.name like'%$bedname%' OR  property_type.property_type_name like '%$property%'";
    $result = $this->con->query ($sql);
        
    $d = array();
            
            while($row = $result->fetch_assoc()) {
                $d[] = $row;
            }
                return $d;
                
            
    }
    function searchPropertybyState($state){
        $sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON picture.property_id=property.property_id JOIN states ON states.id=property.state_id WHERE states.id='$state'";
        $result = $this->con->query ($sql);
            
        $d = array();
                
                while($row = $result->fetch_assoc()) {
                    $d[] = $row;
                }
                    return $d;
                    
                
        }

        function getPropertybyType($id){
            $sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON picture.property_id=property.property_id WHERE property_type.property_type_id='$id' ";
            $result=$this->con->query($sql);
            $d=array();
            while($row = $result->fetch_assoc()) {
                $d[] = $row;
            }
                return $d;
                
        }
        function getPropertybyTypebed($id2){
            $sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON picture.property_id=property.property_id  WHERE  bedroom.bedroom_id='$id2' ";
            $result=$this->con->query($sql);
            $d=array();
            while($row = $result->fetch_assoc()) {
                $d[] = $row;
            }
                return $d;
                
        }
}
$obj=new User;
?>