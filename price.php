<?php include "header.php"; ?>
    <style>
         #nav {
        background-image: url("images/price.JPG");
            background-repeat: no-repeat;
            height: 50em;
            background-size: cover;
        }
.wrapper{
    height: 50em;
    background-color: rgba(0,0,0,0.2);
}
.guide{
    position: relative;
    top: 10em;
    width: 45rem;
    height: 25rem;
    border-radius: 5px;
    margin: auto;
    background-color: #fff;
}
.select{
    font-size: 1.2rem;
}
h4{
    position: relative;
    top: 1em;
    left: 2em;
}
h4+.round{
    position: relative;
    left: 4em;
    top: .5em;
    border-radius: 10px;
    height: 2em;
    margin: 2em;
    color: rgb(62, 158, 62);
    text-align: center;
    background-color: rgba(121, 116, 116,0.2);
    width: 20em;
}
.row{
    margin-right: 1.5em !important;
}
.btn{
    position: absolute;
    top: 20rem;
    left: 15rem;
}
    </style>
</head>

<body>
    <div class="container-fluid" id="nav">
        <div class="wrapper">
            <!-- Header Section for navigation -->
            <header>
               <?php "navbar.php"; ?>
            </header>

        <main class="guide">
           
                <h4 class="ml-5">WHAT ARE YOU LOOKING TO PAY?</h4>
              
              <p class="ml-5 round">Up to $10,000 a month</p>
            <div class="row offset-1">
                <div class="col-md-3">
                    <div class="card">
                     
                        <div class="card-body">
                            <p class="card-a">S</p>
                            <p>Studio</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        
                        <div class="card-body">
                            <p class="card-a">1</p>
                            <p>Bedroom</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                       
                        <div class="card-body">
                            <p class="card-a">2</p>
                            <p>Bedroom</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-a">3</p>
                            <p>Bedroom</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-success w-25">Next</button>
        </main>

    </div>

    <!-- javascript -->
   <?php include "script.php"; ?>

</body>

</html>