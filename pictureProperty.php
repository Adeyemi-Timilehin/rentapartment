<?php
include("header.php");

?>
    <style>
    .top{
        margin-top:100px;
    }
    .bod{
        width:250px;
        height:200px;
        border:1px solid green;
        text-align:center;
        line-height:50px;
        margin-left:20px;
        
    }
    h2{
        margin-bottom:100px;
    }
   
    .head{
        margin-top:8rem;
        text-align:center;
    }
    /*.ml{*/
    /*    margin-left:25em;*/
    /*}*/
    @media screen and (max-width: 700px) {
  .bod {
  
    margin-bottom:2em;
    line-height:1px;
     margin-left:2em;
  }
  input#file{
      margin-top:-1.5rem;
  }
  .ml{
        margin-left:0;
    }
}
    </style>
</head>
<body>
    <div class="container-fluid"> 
<?php
include ("navbar2.php");
?>

<h3 class="head">Upload All Pictures for Tenant View</h2>
<form action="pictureProcess.php" id="picture" enctype='multipart/form-data' method="post">
                <div class="container top">
              <?php  if(isset($_GET['msg'])){
                  echo $_GET['msg'];
              }
              ?>
                  <div class="row">
                    <div class="col-md-3  bod card">
                    <h2>Upload Frontage</h2>
                    <input type="file" value="" name="picture1" class="form-control" id="file" placeholder="Upload File Now">
                    </div>
                    <div class="col-md-4  bod card">
                    <h2>Upload Surrounding</h2>
                        <input type="file" value="" name="picture2" class="form-control" id="file" placeholder="Upload File Now">
                    </div>
                    <div class="col-md-4 bod card">
                    <h2>Sitting Room</h2>
                        <input type="file" value="" name="picture3" class="form-control" id="file" placeholder="Upload File Now">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-3 bod card">
                    <h2>Upload Rooms</h2>
                     <input type="file" value="" name="picture4" class="form-control" id="file" placeholder="Upload File Now">
                    </div>
                    <div class="col-md-4 bod card">
                    <h2>Upload Bathroom</h2>
                        <input type="file" value="" name="picture5" class="form-control" id="file" placeholder="Upload File Now">
                    </div>
                    <div class="col-md-4 bod  card">
                    <h2>Upload Kitchen</h2>
                        <input type="file" value="" name="picture6" class="form-control" id="file" placeholder="Upload File Now">
                    </div>
                  </div>
                </div>
                 <button class="btn btn-success w-25 mb-5 ml-5" type="submit" name="picupload">Publish</button>
                            <button type="button" class="btn btn-warning w-25 mb-5" onClick="document.location.href='property.php'">Back</button>
                            <button type="button" class="btn btn-danger w-25 mb-5" onClick="document.location.href='manage.php'">Cancel</button>
                 
                </form>
    </div>
       <?php require "footer.php"; ?>
    <!-- javascript -->
     <?php include "script.php"; ?>
</body>
</html>