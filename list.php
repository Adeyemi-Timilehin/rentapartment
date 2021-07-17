<?php include "header.php"; ?>
    <style>
        .form {
            margin-top: 8rem;
            margin-bottom:20rem;
        }

        .register {
            margin-left: 5rem;
        }
        .fas{
                margin-left: 0.5em;
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
         
          <?php include "navbar.php"; ?>

        </header>
     <div class="form">
        <div class="row offset-md-4">
         <div class="col-md-6">
                        <h2 class="bg-secondary rounded text-light text-center mb-5">List Property</h5>
                 <div class="text-center">
                       <a class="text-light bg-secondary rounded p-2 " href="login.php"><i class="fas fa-sign-in-alt"></i> LOGIN</a>
                     <a class="text-light bg-success rounded p-2" href="register.php"> <i class="fas fa-user-plus"></i> REGISTER</a>
                </div>
          </div>
        </div>
     </div>
           
        

    
    </div>
    <?php include "footer.php"?>
    <!-- javascript -->
    <script src="assets/bootstrap/js/jquery-3.6.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/index.js"></script>

</body>

</html>