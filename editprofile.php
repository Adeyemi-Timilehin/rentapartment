<?php

	session_start ();	
	
	if (empty($_SESSION['user'])) {
		header("Location: register.php");
	} else {
		
		require "userClass.php";
		
		$id = $obj->getDetails($_SESSION['user']);
		
		// echo "<pre>";
		// print_r($id);
		// echo "</pre>";
	}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Timik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/imageonline-co-cropped-image (1).png" type="image/x-icon">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        @font-face {
            font-family: "Roboto";
            src: url( assets/fonts/biorhyme-extrabold-webfont.woff)  format("woff");
                }
               @font-face {
                   font-family: "Paragraph";
                   src: url(assets/fonts/Roboto/Roboto-Italic.ttf) format("ttf");
               }
        .form {
            margin-top: 8rem;
        }
        h2{
            font-family: "Roboto";
            color: #686868;
            font-size: 3.5rem;
            margin-top: 0.2em;
        }
        p{
            margin-top: 1em;
            margin-left:.5em;
            font-family: "Paragraph";
            font-size: 1.5rem;
        }
        .register {
            margin-left: 5rem;
        }
      
        @media all and (max-width:500px){
            .form{
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header Section for navigation -->
        <header>
           <?php include "navbar.php";?>
        </header>
        <section class="form">
            <div class="row offset-md-1">
                <div class="col-md-4">
                    
                     <h2>
                        Find the Right Tenants.
                        </h2>
                        <h2>
                        Right now.
                     </h2>
                     <p>Improve the way you market your Property.</p>
                  
                </div>
                <div class="col-md-6">
              
                <div class="row offset-md-2 mb-5">
                <?php 
            //    if(isset($_SESSION['guest'])) {
            //     unset($_SESSION['guest']);
            //     session_destroy ();
			// }
			// else{
             
            
              ?>
                    <form method="POST" action="editprofileprocess.php"  enctype='multipart/form-data' class="col-12">
                        <h3 class="mb-5">Edit Your Profile </h3>
                        <div class="row">
                            <div class="form-group col-md-6 ">
                                <label for="first_name">First Name</label>
                                <input id="first_name" name="fname" type="text" value="<?php echo $id['firstname']; ?>" placeholder="Enter your First Name" class="form-control" required>
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" name="lname" type="text"  value="<?php echo $id['lastname']; ?>"  placeholder="Enter your Surname" class="form-control" required>
                              
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group ml-5 col-10">
                               <h5 class="ml-3">Gender</h5> 
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"  <?php if($id['gender']=="male") {echo "checked";}?> id="inlineCheckbox1" name="gender" value="male">
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox2"  <?php if($id['gender']=='female'){echo "checked";} ?> name="gender" value="female">
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group  col-12">
                                <label for="number">Phone Number</label>
                                <input id="number" type="text" name="phone" value='<?php echo $id['phone'] ?>'  class="validate form-control" required>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="address">Address</label>
                                <input id="email" type="text" name="address"  value='<?php echo $id['uaddress'] ?>' class="validate form-control" required>
                           
                            </div>
                        </div>
                      
                        <button  type="submit" class="btn btn-success mt-2 w-75 ml-5" id="btn" name="update">Update</button>
                        <hr>
                         </form>
                
                </div>
              </div>
               
            </div>
          


        </section>
        

    </div>

    <!-- javascript -->


</body>

</html>