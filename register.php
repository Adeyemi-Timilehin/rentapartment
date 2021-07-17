<?php
session_start();
require "header.php";
?>
    <style>
        @font-face {
            font-family: "Roboto";
            src: url( assets/fonts/biorhyme-extrabold-webfont.woff)  format("woff");
                }
               @font-face {
                   font-family: "Paragraph";
                   src: url(assets/fonts/Roboto/Roboto-Italic.ttf) format("ttf");
               }
        h2{
            font-family: "Roboto";
            color: #686868;
            font-size: 3.5rem;
            margin-top: 0.2em;
        }
        .p{
            margin-top: 1em;
            margin-left:.5em;
            font-family: "Paragraph";
            font-size: 1.5rem;
        }
          .top{
            margin-top: 10em;
        }
        .register {
            margin-left: 5rem;
        }
        .pass i {
  position: relative;
  top: -33%;
  left: 90%;
    cursor: pointer;
}
        @media all and (max-width:500px){
            .fab{
      padding: 2px;
   }
   .padding{
margin-left:2.6em;
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
        
        <section>
            <div class="row offset-md-1 top">
                <div class="col-md-4">

                     <h2>
                        Find the Right Tenants.
                        </h2>
                        <h2>
                        Right now.
                     </h2>
                     <p class="p">Improve the way you market your Property.</p>
                </div>
                <div class="col-md-6">
              
                <div class="row offset-md-2 mb-5">
                <?php 
            //    if(isset($_SESSION['guest'])) {
            //     unset($_SESSION['guest']);
            //     session_destroy ();
			// }
			// else{
                if(!empty($_SESSION['guest'])){
                    echo  $_SESSION['guest'];

                    session_destroy ();
                }  
                // }
               
                // if(isset($_GET['result'])){
                   
                //     echo $_GET['result']; 
                //     unset($_GET['result']);
                // }
              ?>
                    <form method="POST" action="registerprocess.php" class="col-12">
                        <h3 class="mb-5">Register Your BioData as Landlord </h3>
                         <div class="row">
                            <div class="form-group col-md-9 ">
                                <label for="uname">Username</label>
                                <input id="uname" name="username" type="text" placeholder="Enter your username" class="form-control" required>
                             </div>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-6 ">
                                <label for="first_name">First Name</label>
                                <input id="first_name" name="fname" type="text" placeholder="Enter your First Name" class="form-control" required>
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" name="lname" type="text" placeholder="Enter your Surname" class="form-control" required>
                              
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-10">
                               <h5 class="ml-3">Gender</h5> 
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox1" name="gender" checked value="male">
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox2" name="gender" value="female">
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                  </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-group col-12 pass">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" placeholder="Enter the password" class="validate form-control" required>
                                <i class="fas fa-eye-slash" id="togglePassword"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" class="validate form-control" required>
                           
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group  col-12">
                                <label for="number">Phone Number</label>
                                <input id="number" type="text" name="phone" class="validate form-control" required>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="address">Address</label>
                                <input id="email" type="text" name="address" class="validate form-control" required>
                           
                            </div>
                        </div>
                        <div class="g-recaptcha" data-theme="light" data-sitekey="6Lfo3I4bAAAAAKEYNs9gdp7y5AZ8q9YmvLUlwGZn"></div>
                        <input type="checkbox"  id="agree" class="form-control-checkbox mr-2 mt-2"><label for="agree">I agree to the terms and
                            conditions</label> 
                        <button  type="submit" class="btn btn-success mt-2 w-75 ml-5" id="btn" name="landlord_register" disabled>Sign Up</button>
                        <hr>
                         </form>
                    
                    <span class="ml-4">Already on TimikApartment? <a href="login.php">LogIn</a></span>
                </div>
              </div>
               
            </div>
          


        </section>
        
              
    </div>
    
    
    <!-- javascript -->
  <?php 
  require "footer.php"; 
   require "script.php"; ?>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCM37kJM6xwMAk6LpMUzKtz9omH29pcBJsY&callback=initMap"
  type="text/javascript"></script>

    <script type="text/javascript">
       $("#togglePassword").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
           var type = $(this).hasClass("fa-eye-slash") ? "password" : "text";
            $("#password").attr("type", type);

   })
   
//    var onloadCallback = function() {
//         grecaptcha.render('html_element', {
//           'sitekey' : '6LfTf3UbAAAAABBgyi7gVVGuSmTntWa8JQJ5JyWQ'
//         });
//       };




function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}


    </script>

</body>

</html>