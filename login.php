<?php include "header.php"; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
        .form {
            margin-top: 8rem;
        }

        .register {
            margin-left: 5rem;
        }
        .pass i {
  position: relative;
  top: -34%;
  left: 90%;
    cursor: pointer;
}
.login-design{
    background-color:rgb(246,248,250);
   padding:20px 50px;
   border-radius:20px;
}
label{
    font-size:20px;
    font-weight:500;
}
input{
    border-radius:10px;
    height:230px;
}
.register{
border:thin solid #000;
border-radius:10px;
height:5em;
text-align:center;
line-height:5em;
font-size:1rem;
font-weight:500;
margin:10px auto;

}
h2{
    font-size:1.6rem;
}
        @media all and (max-width:500px){
            .fab{
      padding: 2px;
   }
   .padding{
margin-left:2.6em;
   }
h2{
font-size:24px;
margin-left:1em;
}
.register {
            margin-left: 1rem;
            font-size:14px;
        }
        label [for='email']{
font-size:.2rem;
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
        <div class="row offset-md-3 mt-5">
            <div class="col-md-6">
            <section>
                <div class="offset-md-4 mt-5">
            <form action="loginform.php" method="POST">
                
                <img src="images/logo2.png" alt="" width="200" class="rounded mx-auto d-block">
                <h2>Sign in to TimikApartment</h2>
                <?php
                if(isset($_GET['msg'])){
                    echo "<div class='alert alert-danger'>". $_GET['msg']."</div>";
                }
                ?>
                <div class="row">
               
                    <div class="col-12 login-design">          
                            <div class="row">
                            <div class="form-group col-12">
                                <label for="email">Username or Email address</label>
                                <input id="email" type="text" name="userinput" class="validate form-control" required>
                           
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 pass">
                                <label for="password">Password</label> 
                                <input id="password" type="password" name="pwd" class="validate form-control" required>
                                <!--<i class="fa-eye fa-eye-slash" id="togglePassword"></i>-->
                                 <i class="fas fa-eye-slash" id="togglePassword"></i>
                            </div>
                        </div>
                        <button class="btn btn-outline-success ml-5 btn-lg w-75" type="submit" name="login">Log In</button>
                    </div>
                 
                </div>
                       
                </form>
                    <div class="register"><p >New to TimikApartment? <a href="register.php">Create an account.</a> </p></div>
            </div>
          

            </div>
        </section>

            </div>
        </div>
       
        <?php require "footer.php"?>

    </div>

<?php include "script.php";?> 

    <!-- javascript -->
    <script>
          $("#togglePassword").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
           var type = $(this).hasClass("fa-eye-slash") ? "password" : "text";
            $("#password").attr("type", type);

   })
    
    </script>

</body>

</html>