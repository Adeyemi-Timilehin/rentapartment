<?php 
session_start();
require "userClass.php";

require "header.php"; ?>
</head>
<body>
<?php require "navbar2.php";?>
<div class="container-fluid mt-5">
<p class="text-center">Lease Your Perfect Apartment</p>
<?php
if(isset($_GET['res'])){
    echo $_GET['res'];
}

?>
            <h2 class="text-success text-center">ADD YOUR PROPERTY</h2>
            <div class="row offset-md-2 mt-5">
                <div class="col-10">
                    <form action="propertyprocess.php" method="POST">
                           
                        <div>
                            <div class="form-group">
                                <label for="name">Property Name</label>
                                <input type="text" name="propname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Property Type</label>
                              <?php  $obj->getPropertytype();?>
                            </div>
                            <div class="form-group">
                                <label for="name">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                           
                            <div class="form-group">
                            <label for="">State</label>
                                       <?php echo $obj->getState();?>
                            </div>
                            <div class="form-group">
                            <label for="">Area</label>
                            <div id="demo"></div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div>
                                        <label for=""># of Bedroom</label>
                                       <?php $obj->getBedroom(); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for=""># of Bathroom</label>
                                        <?php $obj-> getBathroom();?>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- <div class="input-group mt-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div> -->
                            <div class="form-group mt-3">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                           
                            <button class="btn btn-success w-25 mb-5 ml-5" type="submit" name="publish"><i class="fas fa-plus"></i> Pix</button>
                            <button type="button" class="btn btn-danger w-25 mb-5" onClick="document.location.href='manage.php'">Cancel</button>
                          
                        </form>
                        </div>
                     
                    </div>
                
            </div>



</div>
   <?php require "footer.php"; ?>
    <!-- javascript -->
   <?php include "script.php"; ?>
<script>
$(document).ready(function(){
//#('$demo').load(url,data,function(rsp){})
$('#state').change(function(){
    var stateid=$("#state").val();

    var data="id="+ stateid;
$("#demo").load('getlga.php',data);
    //sending data
   
})    

})
</script>
</body>
</html>

