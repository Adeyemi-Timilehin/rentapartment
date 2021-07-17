<?php
require "userClass.php";
$d=$_GET['id'];
$r=$obj->searchPropertybyState($d);
?>

<body>
   <div class="card mb-2 ml-4 p-1">
                                <h4 class="text-dark">Property Number:<?php echo count($r)?></h4>
                                <a href='getpropertybystatedetails.php?id=<?php echo $d?>' class='text-light btn btn-success'>view</a>
                            </div>
                 
</body>
</html>