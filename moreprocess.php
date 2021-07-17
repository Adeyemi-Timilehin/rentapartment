<?php
require "userClass.php";
$r=$obj->showProperties();
// echo "<pre>";
// print_r($r);
// $d=json_encode($r);
// print_r($d);
//  echo "</pre>";
?>

    <?php
     if(count($r)>0){
        $sn=1;
        foreach($r as $data){ 
         $p=$data['property_id'];
    ?>
    <div class='col-md-6 col-lg-4'>
          <div class='card mb-4 shadow-sm'>
          <img src='photo_pro/<?php echo $data['frontage'] ?>'height="200">
          <div class='card-header'>
                    <h6><?php echo $data['pname'] ?></h6>
                </div>
              <div class='card-body'>
                  <p class='card-text'><?php echo $data['name']?></p>
                  <p class='card-text'><?php echo $data['bathroom-number']?></p>
                  <h5  class='text-muted'>&#x20A6;<?php echo $data['price']?></h5>
                  <div class="child">
                  <a href='detailproperty.php?id=<?php echo $p;?>'  class='text-light ml-auto btn btn-success'>view</a>
                
                  </div>
                  
              </div>
            </div>
        </div>
    <?php
        }
    }
    ?>


 
