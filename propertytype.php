<?php
require "userClass.php";

$property_id=$_GET['id'];
// $bedpropertyid=$_GET['id'];
$r=$obj->getPropertybyType($property_id);

if($r){

if(count($r)>0){
   $sn=1;
   foreach($r as $data){ 
    $p=$data['property_id'];
?>
<?php include "header.php" ?>
<style>
.child {
    display: flex;
}
</style>
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="container-fluid mt-5">

        <div class="row m-5">
            <div class='col-md-6 col-lg-4 col-12'>
                <div class='card mb-4 shadow-sm'>
                    <img src='photo_pro/<?php echo $data['frontage'] ?>' class='img-fluid'>
                    <div class='card-header'>
                        <h6><?php echo $data['pname'] ?></h6>
                    </div>
                    <div class='card-body'>
                        <p class='card-text'><?php echo $data['name']?></p>
                        <p class='card-text'><?php echo $data['bathroom-number']?></p>
                        <h5 class='text-muted'><?php $data['price']?></h5>
                        <div class="child">
                            <a href='detailproperty.php?id=<?php echo $data['property_id'];?>'
                                class='text-light ml-auto btn btn-success'>view</a>
                            <button class="btn btn-danger ml-2"
                                onclick="document.location.href='rent.php'">Back</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<?php
   }
}}
else{
  
    include "navbar.php" ;
?>
<div style="margin-top:100px">
    <h2 class="text-danger text-center">No Result Found</h2>
    <button class="btn btn-danger w-100" onclick="document.location.href='rent.php'">Back</button>
</div>

<?php
}?>