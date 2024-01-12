<?php
// session_start();
// require("config.php");
////code
 
// if(!isset($_SESSION['auser']))
// {
// 	header("location:home.php");
// }

//// code insert
//// add code
$error="";
$msg="";

$con = mysqli_connect("localhost","root","","cusine");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}




if(isset($_POST['add']))
{
	
	$title=$_POST['title'];
	// $content=$_POST['content'];
	$serv=$_POST['serv'];
	$ingre=$_POST['ingre'];
	$preptime=$_POST['preptime'];
	$amt=$_POST['amt'];
	$aid=$_POST['aid'];
	$utube=$_POST['youtubelink'];

	// ingrename1
	$ingrename1=$_POST['ingrename1'];
	// $ingrename2=$_POST['ingrename2'];
	// $ingrename3=$_POST['ingrename3'];
	// $ingrename4=$_POST['ingrename4'];
	// $ingrename5=$_POST['ingrename5'];
	// $ingrename6=$_POST['ingrename6'];
	// $ingrename7=$_POST['ingrename7'];
	// $ingrename8=$_POST['ingrename8'];
	// $ingrename9=$_POST['ingrename9'];
	// $ingrename10=$_POST['ingrename10'];
	// $ingrename11=$_POST['ingrename11'];
	// $ingrename12=$_POST['ingrename12'];
	// $ingrename13=$_POST['ingrename13'];
	// $ingrename14=$_POST['ingrename14'];

	// ingreprice
	$ingreprice1=$_POST['ingreprice1'];
	// $ingreprice2=$_POST['ingreprice2'];
	// $ingreprice3=$_POST['ingreprice3'];
	// $ingreprice4=$_POST['ingreprice4'];
	// $ingreprice5=$_POST['ingreprice5'];
	// $ingreprice6=$_POST['ingreprice6'];
	// $ingreprice7=$_POST['ingreprice7'];
	// $ingreprice8=$_POST['ingreprice8'];
	// $ingreprice9=$_POST['ingreprice9'];
	// $ingreprice10=$_POST['ingreprice10'];
	// $ingreprice11=$_POST['ingreprice11'];
	// $ingreprice12=$_POST['ingreprice12'];
	// $ingreprice13=$_POST['ingreprice13'];
	// $ingreprice14=$_POST['ingreprice14'];
	
	
	$aimage=$_FILES['aimage']['name'];
	// $aimage1=$_FILES['aimage1']['name'];
	// $aimage2=$_FILES['aimage2']['name'];

	$temp_name  =$_FILES['aimage']['tmp_name'];
	// $temp_name1 =$_FILES['aimage1']['tmp_name'];
	// $temp_name2 =$_FILES['aimage2']['tmp_name'];

	$ingreimg1=$_FILES['ingreimg1']['name'];
	// $ingreimg2=$_FILES['ingreimg2']['name'];
	// $ingreimg3=$_FILES['ingreimg3']['name'];
	// $ingreimg4=$_FILES['ingreimg4']['name'];
	// $ingreimg5=$_FILES['ingreimg5']['name'];
	// $ingreimg6=$_FILES['ingreimg6']['name'];
	// $ingreimg7=$_FILES['ingreimg7']['name'];
	// $ingreimg8=$_FILES['ingreimg8']['name'];
	// $ingreimg9=$_FILES['ingreimg9']['name'];
	// $ingreimg10=$_FILES['ingreimg10']['name'];
	// $ingreimg11=$_FILES['ingreimg11']['name'];
	// $ingreimg12=$_FILES['ingreimg12']['name'];
	// $ingreimg13=$_FILES['ingreimg13']['name'];
	// $ingreimg14=$_FILES['ingreimg14']['name'];

	$temp_name3=$_FILES['ingreimg1']['tmp_name'];
	// $temp_name4=$_FILES['ingreimg2']['tmp_name'];
	// $temp_name5=$_FILES['ingreimg3']['tmp_name'];
	// $temp_name6=$_FILES['ingreimg4']['tmp_name'];
	// $temp_name7=$_FILES['ingreimg5']['tmp_name'];
	// $temp_name8=$_FILES['ingreimg6']['tmp_name'];
	// $temp_name9=$_FILES['ingreimg7']['tmp_name'];
	// $temp_name10=$_FILES['ingreimg8']['tmp_name'];
	// $temp_name11=$_FILES['ingreimg9']['tmp_name'];
	// $temp_name12=$_FILES['ingreimg10']['tmp_name'];
	// $temp_name13=$_FILES['ingreimg11']['tmp_name'];
	// $temp_name14=$_FILES['ingreimg12']['tmp_name'];
	// $temp_name15=$_FILES['ingreimg13']['tmp_name'];
	// $temp_name16=$_FILES['ingreimg14']['tmp_name'];


	move_uploaded_file($temp_name,"recipes/$aimage");
	// move_uploaded_file($temp_name1,"recipes/$aimage1");
	// move_uploaded_file($temp_name2,"recipes/$aimage2");
	move_uploaded_file($temp_name3,"recipes/$ingreimg1");
	// move_uploaded_file($temp_name4,"recipes/$ingreimg2");
	// move_uploaded_file($temp_name5,"recipes/$ingreimg3");
	// move_uploaded_file($temp_name6,"recipes/$ingreimg4");
	// move_uploaded_file($temp_name7,"recipes/$ingreimg5");
	// move_uploaded_file($temp_name8,"recipes/$ingreimg6");
	// move_uploaded_file($temp_name9,"recipes/$ingreimg7");
	// move_uploaded_file($temp_name10,"recipes/$ingreimg8");
	// move_uploaded_file($temp_name11,"recipes/$ingreimg9");
	// move_uploaded_file($temp_name12,"recipes/$ingreimg10");
	// move_uploaded_file($temp_name13,"recipes/$ingreimg11");
	// move_uploaded_file($temp_name14,"recipes/$ingreimg12");
	// move_uploaded_file($temp_name15,"recipes/$ingreimg13");
	// move_uploaded_file($temp_name16,"recipes/$ingreimg14");
	
	
	$sql="insert into recipes (title, serving, ingredientsno, preptime, amount, adminid, ingrename1, ingreprice1, rimage, ingreimg1,youtubelink)
	values('$title','$serv','$ingre','$preptime','$amt','$aid','$ingrename1','$ingreprice1','$aimage','$ingreimg1','$utube')";
    $result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Property Inserted Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Something went wrong. Please try again</p>";
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM HOMES | Property</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="../css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="../css/style1.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		
			<!-- Header -->
			
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
												<!-- <div class="form-group row">
													<label class="col-lg-1 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
													</div>
												</div> -->
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
												<!-- <div class="form-group row">
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
												</div> -->
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
														<input type="text" class="form-control" name="ingreprice1" required placeholder="Price">
													</div>
												</div>
												<!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg2" type="file" required="">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename2" required placeholder="Name of the ingredient">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice2" required placeholder="Price">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg3" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename3">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice3">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg4" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename4">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice4">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 5</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg5" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename5">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice5">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 6</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg6" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename6">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice6">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 7</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg7" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename7">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice7">
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 8</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg8" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename8">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice8">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 9</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg9" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename9">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice9">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 10</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg10" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename10">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice10">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 11</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg11" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename11">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice11">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 12</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg12" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename12">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice12">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 13</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg13" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename13">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice13">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ingredient 14</label>
													<div class="col-lg-9">
														<input class="form-control" name="ingreimg14" type="file">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingrename14">
													</div>
													<div class="col-lg-9" style="margin-left: 150px; margin-top: 15px">
														<input type="text" class="form-control" name="ingreprice14">
													</div>
												</div>
											</div>
											<hr>
											<hr> -->
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label style="padding-top: 50px; padding-left: 30px" class="col-lg-6 col-form-label"><b>You tube iframe link</b></label>
													<div class="col-lg-6" style="padding-top:50px;">
														<input type="text" name="youtubelink" required="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12">
												<input type="submit" value="Add Recipe" class="btn btn-primary" name="add" style="margin-left: 35px; margin-top: 5px;">
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
        <script src="../assets/js/jquery-3.2.1.min.js"></script>
		<script src="../assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="../assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="../assets/js/scriptscript (2).js"></script>

		
		
    </body>

</html>