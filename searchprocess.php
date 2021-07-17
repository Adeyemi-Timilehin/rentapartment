<?php
include "userClass.php";
if(isset($_POST)){
    $state=strtolower(htmlspecialchars(strip_tags($_POST['name'])));
    $bed=strtolower(htmlspecialchars(strip_tags($_POST['name'])));
    $property=strtolower(htmlspecialchars(strip_tags($_POST['name'])));
  $r=$obj->searchProperty($state,$bed,$property);

}

?>

 <?php
 if($r){

 
     if(count($r)>0){
        $sn=1;
        foreach($r as $data){ 
         $p=$data['property_id'];
         
    ?>
    <div class='col-md-6 col-lg-4'>
          <div class='card mb-4 shadow-sm'>
          <img src='photo_pro/<?php echo $data['frontage'] ?>'class='img-fluid'>
          <div class='card-header'>
                    <h6><?php echo $data['pname'] ?></h6>
                </div>
              <div class='card-body'>
                  <p class='card-text'><?php echo $data['name']?></p>
                  <p class='card-text'><?php echo $data['bathroom-number']?></p>
                  <h5  class='text-muted'><?php $data['price']?></h5>
                  <a href='detailproperty.php?id=<?php echo $p;?>'  class='text-light ml-auto btn btn-success'>view</a>
              </div>
            </div>
        </div>
    <?php
        }
    }}
    else{
        ?>
        <h4 class="text-danger">No Result Found</h4>
    <?php
    }
    
    ?>
    

