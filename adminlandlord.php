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
// echo "<pre>";
// print_r($out);
// echo "</pre>";
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





    <div>
    <h1 class="text-light">Available Landlord</h1>
<table class="table table-striped text-light land">


    <thead><tr><th>S/N</th><th>Landlord Name</th><th>Gender</th><th>Email</th><th>Phone</th><th>Address</th><th>Status</th><th>Date Time</th></tr></thead>
    <?php
$counter=1;
foreach($out as $g){
?>
    <tbody><tr><td><?php echo $counter; ?></td><td><?php echo $g['firstname'] ." ".$g['lastname']   ?></td><td><?php echo $g['gender']   ?></td><td><?php echo $g['email']?></td><td><?php echo $g['phone'] ?></td><td><?php echo $g['uaddress']   ?></td><td><?php echo $g['status']   ?></td><td><?php echo $g['register_at']   ?></td></tr></tbody>
    <?php
        $counter++;
}
        ?>
</table>

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

