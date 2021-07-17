<?php require "header.php"?>
<style>
.top{
    margin-top:100px;
}
.bod{
        
        border:1px solid green;
        text-align:center;
        
       margin:10px 5px 20px;
        
    }
  
</style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header Section for navigation -->
        <header>
        <?php include "navbar.php"; ?>
        </header>
        <div class="top" id="detail">
        
        </div>
       
<!-- <div id="table-container" class="top"></div>
<button id="showData">Show User Data</button> -->
<?php include "script.php" ?>
</body>
</html>