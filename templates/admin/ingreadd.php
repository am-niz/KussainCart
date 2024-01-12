<?php
session_start();
include("../config.php");
//code
 
if(!isset($_SESSION['auser']))
{
	header("location:login.php");
}

//// code insert
//// add code
$error="";
$msg="";

$con = mysqli_connect("localhost","root","","cusinecart");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}




if(isset($_POST['add']))
{

	// header("Location: ingreadd.php");
	
	$title=$_POST['title'];
	$ingrename=$_POST['ingrename'];
	$ingreprice=$_POST['ingreprice'];
	
	$image=$_FILES['image']['name'];
	

	$temp_name  =$_FILES['image']['tmp_name'];

	move_uploaded_file($temp_name,"recipes/$image");
	
	
	
	$sql = "INSERT INTO ingredients (iimage, iname, iprice, recipetitle)
	VALUES ('$image', '$ingrename', '$ingreprice', '$title')";

	

	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>ingredients Inserted Successfully</p>";
					
		}
		else
		{
			$error = "<p class='alert alert-warning'>Something went wrong. Please try again. Error: " . mysqli_error($con) . "</p>";
		}

	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>CusineCart</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="../../css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="../../css/style1.css">
		<link rel="stylesheet" href="../../styles/style-starter.css">
        <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css”>
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- <script>
			function validateForm() {
				var textarea = document.getElementById("myTextarea");

				if (textarea.value.trim() === "") {
				alert("Please enter a comment.");
				return false;
				}

				// Additional form validation logic can go here
				return true;
				}
		</script> -->

		
			<!-- Header -->
			<?php
			if(isset($_SESSION['auser'])){
				include("header2.php");
			}else{
				include("header.php");
			}
			?>
			
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">ingredients</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">recipe</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add ingredients Details</h4>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">ingredients Details</h5><hr><br>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group row">
													<label class="col-lg-6 col-form-label">Recipe Name (previous recipe name)</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" name="title" required placeholder="Enter recipe name" style="margin-left: -310px">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row"></div>
											<div class="col-lg-12">
												<div class="form-group row">
														<label class="col-lg-6 col-form-label"style="padding-left: 0px;">Ingredeint Name: </label>
														<div class="col-lg-6">
															<input type="text" class="form-control" name="ingrename" required placeholder="Enter name" style="margin-left: -310px">
														</div>
												</div>
											</div>
										</div>

										<div class="row"></div>
											<div class="col-lg-12">
												<div class="form-group row">
														<label class="col-lg-6 col-form-label"style="padding-left: 30px;">Price: </label>
														<div class="col-lg-6">
															<input type="text" class="form-control" name="ingreprice" required placeholder="Enter price" style="margin-left: -310px">
														</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												
												<div class="form-group row">
													<label class="col-lg-6 col-form-label" style="margin-left: 15px">Image </label>
													<div class="col-lg-6">
														<input class="form-control" name="image" type="file" required="">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="colo-lg-6">
													<div class="col-lg-6">
													<input type="submit" value="Add ingredients" class="btn btn-primary" name="add" style="margin-left: 0px">
													<a href="recipeadd.php" style="margin-left: 10px; margin-top: 6px;">back to recipe page?</a>
													</div>
												</div>
											</div>
										</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="../../assets/js/jquery-3.2.1.min.js"></script>
		<script src="../../assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="../../assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="../../assets/js/scriptscript (2).js"></script>

		
		
    </body>

</html>