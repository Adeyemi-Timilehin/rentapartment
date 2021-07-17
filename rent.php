<?php 
require "userClass.php";
?>
<?php include "header.php"; ?>
<style>
#nav {
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("images/bedroom.png");
    background-color: gray;
    background-repeat: no-repeat;
    background-size: cover;
}

/* .wrapper {

    margin-top: 10px;
    height: 55em;
    background-color: gray;
    background-color: rgba(0, 0, 0, 0.7);

} */

.fa-angle-right {
    margin-top: .2em;
    color: #fff;
    font-size: 7rem;
}


.card {
    width: 12em;
    height: 10em !important;

}

h4 {
    font-size: 1.6rem;
    color: #fff;
}

.card {
    width: 12rem;

}

@media all and (max-width:500px) {
    .card {
        width: 6rem;
        height: 4rem;
    }

    h4 {
        font-size: 16px;

        margin-top: 2rem;
        line-height: 1.5rem;
    }

    .top {
        margin-top: 6rem;
    }

    .top-footer {
        margin-top: 5rem;
    }
    .dup{
        width:100%;
        background-color:#3E3F40;
    }
}

.card:hover {
    box-shadow: 4px 5px 5px rgb(125, 255, 255);
}

.rent-guide {
    color: #fff;
    background-color: #666;
    width: 15em;
    text-align: center;
    height: 2em;
    font-size: 1.5rem;
    border-radius: 5px;

}

a.rent-guide {
    text-decoration: none;
}

.h4 {
    color: #fff;
}

.top {
    margin-top: 12rem;
}
</style>
</head>

<body>
    <div class="container-fluid" id="nav">
        <div class="wrapper">
            <!-- Header Section for navigation -->
            <header>
                <?php include "navbar.php";?>
            </header>
            <div>
      
                <section>
                    <div class=" top offset-1">
                    <h2 class="text-white text-center mt-5">Welcome to your Search Guide </h2>
                        <h4 class="text-center text-light">Search By BedRoom</h4>
                        <div class="row">
                            <div class="col-md-2 col-6">
                                <a href='propertytypeb.php?id=1' class="btn custom-card">

                                    <div class="card bg-success">
                                        <h4>A Room Apartment</h4>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-2 col-6">
                                <a href='propertytypeb.php?id=2' class="btn custom-card">

                                    <div class="card bg-success">
                                        <h4>2 bedroom Apartment</h4>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-2 col-6">
                                <a href='propertytypeb.php?id=3' class="btn custom-card">

                                    <div class="card bg-success">
                                        <h4>3 Room Apartment</h4>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-2 col-6">
                                <a href='propertytypeb.php?id=4' class="btn custom-card">
                                    <div class="card bg-success">
                                        <div class="card-body">
                                            <h4>4 Room Apartment</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>


                        <h4 class="text-center text-light mt-5">Search By Apartment type</h4>
                        <div class="row">
                            <div class="col-md-2 col-6">
                                <a href='propertytype.php?id=2' class="btn custom-card">
                                    <div class="card bg-success">
                                        <div class="card-body ">
                                            <h4>Studio Apartment</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 col-6">
                                <a href='propertytype.php?id=1' class="btn custom-card">
                                    <div class="card bg-success">
                                        <div class="card-body">
                                            <h4>Self- Contained</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 col-6">
                                <a href='propertytype.php?id=5' class="btn custom-card">
                                    <div class="card bg-success">
                                        <div class="card-body">
                                            <h4>Shared Apartment</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 col-6">
                                <a href='propertytype.php?id=7' class="btn custom-card">
                                    <div class="card bg-success">
                                        <div class="card-body">
                                            <h4>Bungalow</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="row  ml-1">
                                <div class="col-md-2 col-6">
                                    <a href='propertytype.php?id=6' class="btn custom-card">
                                        <div class="card bg-success">
                                            <div class="card-body">
                                                <h4>Duplex Flat</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-6">
                                    <a href='propertytype.php?id=3' class="btn custom-card">
                                        <div class="card bg-success">
                                            <div class="card-body">
                                                <h4>Mini Flat</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-6">
                                    <a href='propertytype.php?id=4' class="btn custom-card">
                                        <div class="card bg-success">
                                            <div class="card-body">
                                                <h4>Condo</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-6">
                                    <a href='propertytype.php?id=8' class="btn custom-card">
                                        <div class="card bg-success">
                                            <div class="card-body">
                                                <h4>Charlet</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="form-group ml-md-5">
                                    <h4 class="h4">Filter by State</h4>
                                    <?php echo $obj->getState();?>
                                </div>
                                <div id="demo" class="ml-2">
                            </div>
                            </div>
                          
                        </div>
                    </div>
            </div>
        </div>

        </section>

    </div>

    </div>

    <!-- javascript -->
    <?php 
    include "script.php";
    ?>
    <script>
    $(document).ready(function() {
        //#('$demo').load(url,data,function(rsp){})
        $('#state').change(function() {
            var stateid = $("#state").val();

            var data = "id=" + stateid;
            $("#demo").load('getpropertybystate.php', data);
            //sending data

        })

    })
    </script>
    <div class="top-footer">

        <?php 
include "footer.php";
?>
    </div>
</body>

</html>