<?php
require "userClass.php";

$property_id=$_GET['id'];
$detailed=$obj->showAlldetails($property_id);
foreach( $detailed as $d){
    ?>
    <!--html-->
    <?php require "header.php"?>
<style>
.top{
    margin-top:10em;
}
.bod{
        
        border:1px solid green;
        text-align:center;
        
       margin:10px 5px 20px;
        
    }
    p{
        font-size:1.4rem;
    }
  .landlord{
      border:2px solid green;
      width:50%;
  }
</style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header Section for navigation -->
        <header>
        <?php include "navbar.php";?>
        </header>
    <div class="top">
        <div class="container-fluid offset-1">
         
            <div class="row ">
                <div class="col-md-4">
                <h3 class="ml-5 mb-3 mt-4"><u>Property Details</u></h3>
                    <p><b>Property Title: </b><?php echo $d['pname']?></p>
                    <p><b>Property Date listed: </b><?php echo $d['date_registered']?></p>
                    <p><b>Property Type: </b><?php echo $d['property_type_name']?></p>
                    <p><b>Bathroom Number: </b><?php echo $d['name']?></p>
                    <p><b>Price: #</b><?php echo $d['price']?></p>
                    <p><b>Property Location: </b><?php echo $d['locationproperty']?></p>
                </div>
                <div class="col-md-6">
                <h3>Available Pictures for living spaces</h3>
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img src='photo_pro/<?php echo $d['frontage']?>'width='300' height='300' class="d-block w-100" alt='FRONTAGE'>
    <div class="carousel-caption d-none d-md-block">
        <h3>Frontage View</h3>
      </div>
    </div>
    <div class="carousel-item">
    <img src='photo_pro/<?php echo $d['surrounding']?>'width='300' height='300' class="d-block w-100"alt='SURROUNDING'>
    <div class="carousel-caption d-none d-md-block">
        <h3>Surrounding View</h3>
      </div>
    </div>
    <div class="carousel-item ">
    <img src='photo_pro/<?php echo $d['kitchen']?>'width='300' height='300' class="d-block w-100" alt='KITCHEN'>
    <div class="carousel-caption d-none d-md-block">
        <h3>kitchen View</h3>
      </div>
    </div>
    <div class="carousel-item">
    <img src='photo_pro/<?php echo $d['sitting_room']?>'width='300' height='300' class="d-block w-100" alt='SITTING ROOM'>
    <div class="carousel-caption d-none d-md-block">
        <h3>Sitting Room View</h3>
      </div>
    </div>
    <div class="carousel-item">
    <img src='photo_pro/<?php echo $d['room']?>'width='300' height='300' class="d-block w-100" alt='ROOM'>
    <div class="carousel-caption d-none d-md-block">
        <h3>Room View</h3>
      </div>
    </div>
    <div class="carousel-item">
    <img src='photo_pro/<?php echo $d['bathroom']?>'width='300' height='300' class="d-block w-100" alt='BATHROOM'>
    <div class="carousel-caption d-none d-md-block">
        <h3>BathRoom View</h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    
                   
                </div>
            </div>
        </div>
<div class="mt-1 offset-1">

        <h2>Landlord Details</h2>
    <div class="row">
        <div class="col-6">
            <h5>Name: <?php echo $d['firstname']?> <?php echo $d['lastname']?><h5>
            <h5>Gender: <?php echo $d['gender']?><h5>
            <h5>Phone: <?php echo $d['phone']?><h5>
             <h5>Address: <?php echo $d['uaddress']?><h5>
        </div>
    </div>
    
</div>
    </div>
    <button class="btn btn-danger w-75 ml-5" onclick="document.location.href='rent.php'">Back</button>
      <?php
}
      ?> 
<!-- <div id="table-container" class="top"></div>
<button id="showData">Show User Data</button> -->
<?php include "script.php" ;
include "footer.php";
?>
</body>
</html>
    <!--End html-->
