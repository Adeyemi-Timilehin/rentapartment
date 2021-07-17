<?php include "header.php"; ?>
    <style>
        .form {
            margin-top: 8rem;
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
                
            <?php include "navbar.php"; ?>
        </header>
        <section class="form offset-2">
            <form action="adminloginProcess.php" method="POST">
                <h3 class="mb-3">Welcome Back !!</h3>  
                <h4 class="mb-4">Login as Admin</h4>
                <?php
                if(isset($_GET['msg'])){
                    echo "<div class='alert alert-danger'>". $_GET['msg']."</div>";
                }
                ?>
                <div class="row">
               
                    <div class="col-12">          
                            <div class="row">
                            <div class="form-group col-12">
                                <label for="email">Username/Email</label>
                                <input id="email" type="text" name="userinput" class="validate form-control" placeholder="Enter your Username or Email" required>
                           
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="password">Password</label> 
                                <input id="password" type="password" name="pwd" placeholder="Must Have 8-30 Characters" class="validate form-control" required>
                            </div>
                        </div>
                        <button class="btn btn-secondary ml-5 btn-lg w-50" type="submit" name="login">Log In</button>
                    </div>
                 
                </div>
                       
                </form>
            </div>
          


        </section>
        

    </div>

    <!-- javascript -->
 <?php include "script.php"; ?>

</body>

</html>