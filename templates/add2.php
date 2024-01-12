
<?php
$error="";
$msg="";

$con = mysqli_connect("localhost", "root", "", "cusine");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        echo "Connection successful!";
    }

if(isset($_POST['add'])) {
    $title=$_POST['title'];
    $serv=$_POST['serv'];
    $ingre=$_POST['ingre'];
    $preptime=$_POST['preptime'];
    $amt=$_POST['amt'];
    $aid=$_POST['aid'];
    $utube=$_POST['youtubelink'];
    $ingrename1=$_POST['ingrename1'];
    $ingreprice1=$_POST['ingreprice1'];
    $aimage=$_FILES['aimage']['name'];
    $temp_name  =$_FILES['aimage']['tmp_name'];
    $ingreimg1=$_FILES['ingreimg1']['name'];
    $temp_name3=$_FILES['ingreimg1']['tmp_name'];

    move_uploaded_file($temp_name,"recipes/$aimage");
    move_uploaded_file($temp_name3,"recipes/$ingreimg1");

    // $sql = "insert into recipes (title, serving, ingredientsno, preptime, amount, adminid, ingrename1, ingreprice1, rimage, ingreimg1, youtubelink)
    // values('$title','$serv','$ingre','$preptime','$amt','$aid','$ingrename1','$ingreprice1','$aimage','$ingreimg1','$utube')";
  
    
    $sql = "INSERT INTO recipes (title, serve, ingredient, preptime, amount, aid, youtubelink, ingrename1, ingreprice1, rimage, ingreimg1)
    VALUES ('$title', '$serv', '$ingre', '$preptime', '$amt', '$aid', '$utube', '$ingrename1', '$ingreprice1', '$aimage', '$ingreimg1')";
    echo "Query: " . $sql; // Print the query for debugging
    $result = mysqli_query($con, $sql);

    if ($result) {
        $msg = "<p class='alert alert-success'>Property Inserted Successfully</p>";
    } else {
        $error = "<p class='alert alert-warning'>Something went wrong. Please try again. Error: " . mysqli_error($con) . "</p>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>LM HOMES | Property</title>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/feathericon.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">recipe</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">recipe</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add recipe Details</h4>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h5 class="card-title">Recipe Details</h5><hr><br>
                                <?php echo $error; ?>
                                <?php echo $msg; ?>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-1 col-form-label">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="title" required placeholder="Enter Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-6 col-form-label" style="padding-left: 30px;">serving</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="serv" required placeholder="Enter serving">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-6 col-form-label">ingredients</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="ingre" required placeholder="Enter ingredients">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-6 col-form-label">Preparing Time</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="preptime" required placeholder="preparing Time">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-6 col-form-label">Amount</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="amt" required placeholder="Total amount of Recipe">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <h4 class="card-title">Recipe Images</h4><br>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-xl-2 col-form-label">Image</label>
                                            <div class="col-xl-6">
                                                <input class="form-control" name="aimage" type="file" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-2 col-form-label">aid</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="aid" required placeholder="Enter the admin ID">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <h4 class="card-title">Ingredients</h4><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">ingredient 1</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="ingreimg1" type="file" required="">
                                            </div>
                                            <div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
                                                <input type="text" class="form-control" name="ingrename1" required placeholder="Name of the ingredient">
                                            </div>
                                            <div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
                                                <input type="text" class="form-control" name="ingreprice1" required placeholder="Price of the ingredient">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="card-title">Video Link</h4><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Youtube Link</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="youtubelink" required placeholder="Enter Youtube Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="add">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.slimscroll.js"></script>
    <script src="../js/Chart.bundle.js"></script>
    <script src="../js/chart.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>


