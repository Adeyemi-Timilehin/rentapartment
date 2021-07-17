<?php
require "header.php";
require "userClass.php";
$out=$obj->showPropertiesonIndex();

?>
    <style>
         @font-face {
            font-family: "Roboto";
            src: url( assets/fonts/Roboto/Roboto-Bold.ttf)  format("ttf");
                }
               
            h1,h2,h3{
                font-family: "Roboto",sans-serif;
            }
        #bg {
            background-image: url("images/bg-image.png") !important;
            background-repeat: no-repeat;
            background-size: cover;
            height: 40rem;
            background-color: rgb(26, 201, 201);
            background-attachment: fixed;
        }
  .search{
      display:none;
      position:relative;
      left:2em;
  }
  .parentsearch{
      margin-bottom:100px;
      margin-left:100px;
  }
 .searchadd{
    border-bottom:2px solid black;
    margin-bottom:20px;
    width:50%;
 }
 @media all and (max-width:500px){
    .top-rental{
        width:100%;

    }  
h3.top-rental{
    font-size:1.2rem;
text-align:center;
}
    .fab{
      padding: 2px;
   }
   .padding{
margin-left:3em;
   }
::placeholder{
font-size:.6rem;
font-weight:500;
}
 }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header Section for navigation -->
        <header>
         <?php include "navbar.php"; ?>
            <!-- background pictures -->
            <div id="bg">
                <div class="overlay">
                    <div class="bg-content">
                        <h2 class="animate__animated animate__flash">Find Your Perfect Home</h2>
                        <p class="animate__animated animate__backInUp">Heping 100 million renters find simple and
                            perfect fit</p>
                            <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder=" Search by property type, state, or apartment" aria-label="Username" aria-describedby="basic-addon1" id="search">
                                <span class="input-group-text" id="basic-addon1"><i  class='fas fa-search'></i></span>
                            </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- <div id="table-container"></div>
        <button id="showData">Show User Data</button> -->
        <section class="people">
            <div class="container top">
            <div id="ps">
            <h2 class="search" id="s">Search Result</h2>
            <div id="searchdetail" class="row"></div>
        
        </div>
                <h3 class="top-rental">Explore Top Rentals in Nigeria</h3>
               

                <div class="row">
                
                <?php 
                $counter=1;
                foreach($out as $g)
{
    ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card mb-4 shadow-sm" id="card">
                         <!-- <form  method="POST" action="detailproperty.php?id=$product_id?>
                         <input type="text" name="product_id hidden value="<?// echo $g['product_id'];?>-->
                            <img src="photo_pro/<?php echo $g['frontage']?>"  height="150">
                            <div class="card-header">
                                <h6><?php echo $g['pname'];  ?></h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $g['name'];  ?></p>
                                <p class="card-text"><?php echo $g['bathroom-number'];  ?></p>
                                <h5 class="text-muted">&#x20A6;<?php echo $g['price'];  ?></h5>
                                <?php  $product=$g['property_id'];?>
                                <a href='detailproperty.php?id=<?php echo $product;?>' class='text-light ml-5 btn btn-success' id="view">view</a>
                            </div>
                        </div>
                    </div>
                  
                    <?php
                
}?>
                     <a href='more.php'class='btn btn-success' >Click for more</a>

                </div>
              
            </div>
            <h5 class="info">FOR RENTALS</h5>
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="jumbotron jumbotron-fluid ">
                        <div class="container ml-3">
                            <h1 class="">Let our search guide you</h1>
                            <p class="lead">Search thousands of up-to-date property listings on our easy-to-use website
                                Narrow down your options by choosing what's most important to you
                                ,such as Property type, Price range, location and more </p>
                            <a href="rent.php" class="bg-success text-light p-2 rent">Start Search</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <img src="images/ec597249.jpg" alt="" class="img-fluid">
                </div>

            </div>

            <h5 class="landlord">FOR LANDLORD</h5>
            <div class="row">
                <div class="col-md-7">
                    <img src="images/desk.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-5">
                    <div class="jumbotron jumbotron-fluid ">
                        <div class="container">
                            <h1 class="">Simple and Streamlined rental management</h1>
                            <p class="lead">List your rental property by posting your property for potential renters
                            </p>
                            <a class="bg-success text-light p-2 rent" href="list.php">Add listing</a>
                        </div>
                    </div>
                </div>

            </div>
       
        </section>

     
    </div>
    <?php require "footer.php"; ?>
    <!-- javascript -->
    <?php include "script.php"; ?>
</body>

</html>