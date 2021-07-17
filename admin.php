<?php
session_start();
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
           
                <div class="col-md-6">
              
                <div class="row offset-md-2 mb-5">
                <?php 
            //    if(isset($_SESSION['guest'])) {
            //     unset($_SESSION['guest']);
            //     session_destroy ();
			// }
			// else{
                if(!empty($_SESSION['admin'])){
                    echo  $_SESSION['admin'];

                    session_destroy ();
                }  
                // }
               
                // if(isset($_GET['result'])){
                   
                //     echo $_GET['result']; 
                //     unset($_GET['result']);
                // }
              ?>
                    <form method="POST" action="adminregProcess.php" class="col-12">
                        <h3 class="mb-5">Register  as Admin </h3>
                         <div class="row">
                            <div class="form-group col-md-9 ">
                                <label for="uname">Username</label>
                                <input id="uname" name="username" type="text" placeholder="Enter your username" class="form-control" required>
                             </div>
                            </div>
             
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" placeholder="Must have 8-30 Characters" class="validate form-control" required>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" class="validate form-control" required>
                           
                            </div>
                        </div>
                 
                        <button  type="submit" class="btn btn-success mt-2 w-75 ml-5" name="admin_register">Sign Up</button>
                        <hr>
                         </form>
                    
                    <span class="ml-5">Login as Admin? <a href="adminlogin.php">LogIn</a></span>
                </div>
              </div>
               
            </div>
          


        </section>
        

    </div>

    <!-- javascript -->
    <script src="assets/bootstrap/js/jquery-3.6.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="" async defer></script>

</body>

</html>