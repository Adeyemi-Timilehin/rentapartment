<?php
session_start();

if (empty($_SESSION['user'])) {
    header("Location: login.php");
} else {

    require "userClass.php";

    $id = $obj->getDetails($_SESSION['user']);

    $output = $obj->getPropertylandlord($_SESSION['user']);

    $pix = $id['picture'];
    if (empty($pix)) {

        $pix = 'avatar.jpg';
    }
}

include "header.php"; ?>
<style>
footer {
    position: relative;
    top: 10px;

}

.form {
    margin-top: 6rem;
}

.add,
.manage {
    display: none;
}

.top {
    margin-top: 7em;
}

.top-property {
    margin-top: 4em;
}

.table {
    width: 95%;
}

@media all and (max-width:500px) {
    .form {
        width: 100%;
    }

    .table {
        overflow-x: auto;
        display: block;
    }
}
</style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header Section for navigation -->
        <header>
            <?php include "navbar2.php"; ?>
        </header>
        <div class="row top">
            <div class="col-md-4 col-12">
                <h2>Welcome, <?php echo ucfirst($id['firstname']); ?></h2>
                <img class="mt-3" src="photos/<?php echo $pix; ?>" width="200">
                <form action="landlordimage.php" id="picture" enctype='multipart/form-data' class="mt-3" method="post">
                    <input type="file" value="" name="picture" id="file" placeholder="Upload File Now">
                    <button class="btn btn-danger" type="submit" name="picupload">Change</button>
                </form>

                <?php
                if (isset($_GET['result'])) {
                    echo
                    "<div class='alert alert-info mt-2 alert-dismissible fade show' role='alert'>
            You have successfully updated your profile
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
                }

                ?>
                <div class="mt-2">
                    <a class="btn btn-primary text-light mr-3" href="editprofile.php">Edit</a>
                    <a class="btn btn-danger text-light" href="logout.php">Logout</a>
                </div>
            </div>

            <div class="col-md-8 col-12 top-property">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="4"><?php if (!$output) {
                                                    echo "No Property Listed Yet";
                                                } ?></th>
                                <td colspan="4"><a class="btn btn-success text-light ml-5" href="property.php">Add
                                        Property</a> </td>
                            </tr>
                            <?php if ($output) { ?>
                            <tr class="table-secondary">

                                <th scope="col">Property ID</th>
                                <th scope="col">Property type</th>
                                <th scope="col">Apartment</th>
                                <th scope="col">Bathroom</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date Registered</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>


                        <?php
                                //for serial number
                                $counter = 1;
                                // for($i=0;$i<count($output);$i++){

                                foreach ($output as $res) {

                        ?>

                        <tbody>
                            <tr>
                                <td><?php echo $counter; ?> </td>
                                <td><?php echo $res['property_type_name'] . "<br>"; ?> </td>
                                <td><?php echo $res['name'] . "<br>"; ?> </td>
                                <td><?php echo $res['bathroom-number'] . "<br>"; ?> </td>
                                <td>#<?php echo $res['price'] . "<br>"; ?> </td>
                                <td><?php echo date('jS \of F, Y', strtotime($res['date_registered'])); ?> </td>
                                <td> <a href="delete.php?id=<?php echo $res['property_id']; ?>"
                                        onclick='return confirm("Are you sure you want to delete this:")' type="button"
                                        class="btn btn-danger"> Delete</a>

                            </tr>
                            <?php
                                    $counter++;
                                }
                            }

                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
    <?php require "footer.php"; ?>
    <!-- javascript -->
    <?php include "script.php"; ?>

    </div>
    <script>
    $(document).ready(function() {
        $("#demo").fadeOut(1000);
        $("pixchange").click(function() {
            $("#picture").hide();
        })
    })
    </script>
     </div>

</body>

</html>