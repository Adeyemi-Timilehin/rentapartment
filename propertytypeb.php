<?php
require "userClass.php";


$bedpropertyid=$_GET['id'];
$r=$obj->getPropertybyTypebed($bedpropertyid);
// echo "<pre>";
// print_r($detail);

// echo "</pre>";
include "header.php" ;
?>
</head>


<body>

    <?php include "navbar.php" ?>
    <div class="contaner-fluid">
        <div class="row mt-5">
            <?php
 if($r){

     if(count($r)>0){
        $sn=1;
        foreach($r as $data){ 
         $p=$data['property_id'];
    ?>

            <div class='col-md-5 col-lg-4'>
                <div class='card mb-4 shadow-sm'>
                    <img src='photo_pro/<?php echo $data['frontage'] ?>' class='img-fluid'>
                    <div class='card-header'>
                        <h2><?php echo $data['pname'] ?></h2>
                    </div>
                    <div class='card-body'>
                        <h4 class='card-text'><?php echo $data['property_type_name']?></h4>
                        <h4 class='card-text'><?php echo $data['name']?></h4>
                        <h4 class='card-text'><?php echo $data['bathroom-number']?></h4>
                        <h4 class='text-muted'><?php $data['price']?></h4>
                        <div>
                            <a href='detailproperty.php?id=<?php echo  $data['property_id'];?>'
                                class='text-light ml-auto btn btn-success'>view</a>
                            <button class="btn btn-danger mr-2"
                                onclick="document.location.href='rent.php'">Back</button>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }
        
    }

 ?>
        </div>
        <?php
   }
    else{
        include "header.php";
        include "navbar.php" ;
    ?>
    </div>
</body>

</html>


<div style="margin-top:100px">
    <h2 class="text-danger text-center">No Result Found</h2>
    <button class="btn btn-danger w-75 ml-5" onclick="document.location.href='rent.php'">Back</button>
</div>
<?php
    }
    
    ?>

<?php
 require "script.php";
 require "footer.php";
 ?>
</div>