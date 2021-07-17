<?php
class Admin {
    public $con;
public function __construct(){
$this->con=new mysqli('localhost','User','Champion@2020','timiktec_rentalappdb');


}
function adminRegister($username,$password,$email){
$encpwd=md5($password);
$sql="INSERT INTO adminpage(admin_name,admin_email,admin_password) VALUES('$username','$email','$encpwd')";

$output=$this->con->query($sql);
if($output){
    $msg= "<div class='alert alert-success text-center'>You account has been successfully created</div>";
}
else{
    $msg="<div class='alert alert-danger  text-center'>You have an account on this page before, please try and login</div>";
}
return $msg;
}


function adminlogin($username,$email,$password){
    $enc=md5($password);
    $q="SELECT * FROM adminpage WHERE admin_name='$username' AND admin_password='$enc' OR admin_email='$email' AND  admin_password='$enc'";
    $result=$this->con->query($q);

    if($result->num_rows > 0) {
        //				if (is_array ($row)) {
                        $row = $result->fetch_array();
               if($row){
                $adminid=$row['admin_id'];
                   return $adminid;
               }
               else{
                   return 0;
               }
}
}

//Add multiple pictures


//logout session
function logout(){
			
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
    session_destroy ();
    
    header ("Location: adminlogin.php");
}
function getallLandlord(){
   $q= "SELECT * FROM landlord";
   $result=$this->con->query($q);
   $row=array();
   while($output=$result->fetch_assoc()){
       $row[]=$output;
   }
   if($row){
       return $row;
   }
   else{
       return 0;
   }
}
//property type
function showProperty(){
    $sql="SELECT * FROM property JOIN property_type ON property_type.property_type_id=property.property_type_id JOIN bedroom ON bedroom.bedroom_id=property.bedroom_id JOIN bathroom ON bathroom.bathroom_id=property.bathroom_id JOIN picture ON property.property_id=picture.property_id JOIN landlord ON property.landlord_id=landlord.landlord_Id";
       
    $result=$this->con->query($sql);
    if($result->num_rows > 0) {
        				$row=array();
                      while($output=$result->fetch_assoc()){
                          $row[]=$output;
                      }
               if($row){
                   return $row;
               }
               else{
                   return 0;
               }
}
            
    }
    function getStatus(){
        $sql="SELECT * FROM `landlord` WHERE status='1'";
        $result=$this->con->query($sql);
        if($result->num_rows > 0) {
                            $row=array();
                          while($output=$result->fetch_assoc()){
                              $row[]=$output;
                          }
                   if($row){
                       return $row;
                   }
                   else{
                       return 0;
                   }
    }
        
    }
}
$obj=new admin;
?>