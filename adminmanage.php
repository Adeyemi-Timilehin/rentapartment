<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard  </title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
         .land{
             margin-top:100px;
         }
         h1{
             color:white;
         }
         .text-light{
             color:white;
         }
     </style>
   </head>
<body>
<?php 
include "adminClass.php";

$out=$obj->getallLandlord();
$propout=$obj->showProperty();
$status=$obj->getstatus();
?>
  
  <div class="sidebar">
    <div class="logo-details">
    <img src="images/logo2.JPG" width="30" style='margin-left: 10px'>
      <span class="logo_name" style='margin-left: 10px'>Timik Property</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminmanage.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="adminlandlord.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Landlords</span>
          </a>
        </li>
        <li>
          <a href="adminprop.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Properties</span>
          </a>
        </li>
        <li>

        <li class="log_out">
          <a href="adminlogout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
      <div class="profile-details" style="backgroundColor:red">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Timik Inc</span>
       
      </div>
    </nav>





    <div class="home-content">
      
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">All Landlords</div>
            <div class="number"><?php echo count($out); ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from today</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">All Properties</div>
            <div class="number"><?php echo count($propout); ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from today</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
          
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Active LandLords</div>
            <div class="number"><?php echo count($status); ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from today</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Inactive LandLord</div>
            <div class="number">0</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from today</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
     
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

