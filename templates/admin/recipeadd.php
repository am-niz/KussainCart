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

	header("Location: ingreadd.php");
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	$serv=$_POST['serv'];
	$ingre=$_POST['ingre'];
	$preptime=$_POST['preptime'];
	$amt=$_POST['amt'];
	$aid=$_POST['aid'];
	$comment=$_POST['comment'];
	$category=$_POST['category'];
	$utube=$_POST['youtubelink'];
	

	// ingrename1
	
	
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];

	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];

	


	move_uploaded_file($temp_name,"recipes/$aimage");
	move_uploaded_file($temp_name1,"recipes/$aimage1");
	move_uploaded_file($temp_name2,"recipes/$aimage2");
	
	
	
	$sql = "INSERT INTO recipes (title, rcontent, serving, ingredientsno, preptime, amount, adminid, comment, category, rimage, rimage1, rimage2, utubelink)
	VALUES ('$title', '$content', '$serv', '$ingre', '$preptime', '$amt', '$aid', '$comment', '$category', '$aimage', '$aimage1', '$aimage2', '$utube')";

	

	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>recipe Inserted Successfully</p>";
					
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
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
		
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
								<h3 class="page-title">recipe</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">recipe</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add recipe Details</h4>
								</div>
								<form id="recipeadd" method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">Recipe Details</h5><hr><br>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-1 col-form-label">name</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" name="title" required placeholder="Enter recipe name (remember or copy the name )">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-1 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
													</div>
												</div>
											</div>
											
												<div class="form-group row">
													<label class="col-lg-6 col-form-label"style="padding-left: 30px;">serving</label>
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
													<label class="col-xl-2 col-form-label">Image 1</label>
													<div class="col-xl-6">
														<input class="form-control" name="aimage1" type="file" required="">
													</div>
												</div>
											</div>

											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-xl-2 col-form-label">Image 2</label>
													<div class="col-lg-6">
														<input class="form-control" name="aimage2" type="file" required="">
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

										<h4 class="card-title">Short Description</h4><br>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group-row">
													<label class="col-lg-3 col-form-label">Description:</label>
												</div>
												<div class="col-lg-9">
												<textarea id="myTextarea" name="comment" rows="4" cols="50"></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group-row">
													Veg or Non Veg(please right it): <input type="text" name="category" class="form-control" required="">
												</div>
											</div>
										</div>

										<hr>
										<hr>
										
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label style="padding-top: 50px; padding-left: 30px" class="col-lg-6 col-form-label"><b>You tube iframe link</b></label>
													<div class="col-lg-6" style="padding-top:50px;">
														<input type="text" style="margin-left: -425px;" name="youtubelink" required="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-12">
												<div class="col-lg-6">
													<div class="col-lg-6">
													<input type="submit" value="Add Recipe" class="btn btn-primary" name="add" style="margin-left: -23px; margin-top: 6px;">
													<a href="ingreadd.php" style="margin-left: 10px; margin-top: 6px;">Go to ingredients page?</a>
													</div>
												</div>
											</div>
										</div>

										<!-- <div class="row">
											<div class="col-md-12">
												<input type="submit" value="Add Ingredinets" class="btn btn-primary" name="add" style="margin-left: 10px; margin-top: 6px;">
											</div>
										</div> -->

										<!-- <div class="row">
											<div class="col-md-12">
												<a href="ingreadd.php" onclick="document.getElementById('recipeadd').submit();" class="btn btn-primary" style="margin-left: 10px; margin-top: 6px;">
													Add Recipe
												</a>
											</div>
										</div> -->	


												
											
									

										
											
										
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