<?php require "header.php"?>
<style>
.top{
    margin-top:100px;
}
.child{
    display:flex;
}
</style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header Section for navigation -->
        <header>
            
        <?php include "navbar.php"; ?>
         
        </header>
     
        <div class="row top" id="output">
           
        </div>
        <div class="col-8 mx-auto">
         <button class="btn btn-danger mb-4 w-100" onclick="document.location.href='rent.php'">Back</button> 
         </div>
     </div>
<!-- <div id="table-container" class="top"></div>
<button id="showData">Show User Data</button> -->
<?php include "script.php" ?>
</body>
</html>