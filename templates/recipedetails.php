<?php

$con = mysqli_connect("localhost","root","","cusinecart");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags --><!-- FOR MORE PROJECTS visit: codeastro.com -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Rcipie details PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../css/layerslider.css">
<link rel="stylesheet" type="text/css" href="../css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../styles/style-starter.css">
<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css”>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
<!--	Title
	=========================================================-->
<title>cusine cart</title>
</head>
<body>




<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
        <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                          </svg>CusineCart
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <a href="addtocart.php" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Add to Cart
                        </a>
                        
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-top: 12px;" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                              </svg> -->
                    </ul>
                </div>
                <!-- search button -->
                <div class="search-right">
                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Here Your Favourite Food
                            </h4>
                            <form action="#search" method="GET" class="search-box">
                                <div class="input-search"> <span class="fa fa-search mr-2"
                                        aria-hidden="true"></span><input type="search" placeholder="Enter Keyword"
                                        name="search" required="required" autofocus="">
                                </div>
                                <button type="submit" class="btn button-style">Search</button>
                            </form>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- //search popup -->
                </div>
                <!-- //search button -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->
        

		
        <div class="full-row">
            <div class="container">
                <div class="row">

                    <?php
					    $title=$_REQUEST['title']; 
					    $query=mysqli_query($con,"SELECT * from recipes where title= '$title'");
					    while($row=mysqli_fetch_array($query))
					    {
				    ?>
                    
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-8">
                                <div id="single-property" style="width: 1200px; height: 700px; margin: 30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../assets/images/<?php echo $row['10'] ?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../assets/images/<?php echo $row['11'] ?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../assets/images/<?php echo $row['12'] ?>" alt="" /> </div>
									
									<!-- Slide 4-->
									<!-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../assets/images/pastanw4.jpg" class="ls-bg" alt="" /> </div>-->
									
									<!-- Slide 5
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../assets/images/pastanw5.jpg" class="ls-bg" alt="" /> </div>  -->
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">recipe video</h4>
                                <?php echo $row['13']; ?>
                            <!-- <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                            </div>

                        </div>

                        <div class="row lg-12">
                            <div class="col-lg-6">
                                <div class="col-lg-6"></div>
                                    <a href="cart.html" class="btn btn-default btn-sm" style="margin-left: -280px">
                                        
                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                        Add to Cart 
                                    </a>
                                
                                    <span class="mb-sm-20 d-block text-capitalize"><?php echo $row['1']; ?></span>

                                <div class="col-lg -6" style="margin-left: 193px; margin-top: -41px;">
                                    <div class="text-success text-left h5 my-2 text-md-right">Rs <?php echo $row['6']; ?></div>
                                    <div class="text-left text-md-right">Price</div>
                                </div>
							</div>
                            
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"></span><b><?php echo $row['3']; ?></b><br>serving</li>
                                    <li><span class="text-secondary"></span><b><?php echo $row['4']; ?></b><br> ingredients</li>
                                    <li><span class="text-secondary"></span><b><?php echo $row['5']; ?> min</b><br>To prepare</li>
                                    <li><span class="text-secondary"></span><b>Rs <?php echo $row['6']; ?></b><br>Amount</li>
                                   
                                </ul>
                            </div>
                            <h4 class="text-secondary my-4">Description</h4>
                            <p><b><?php echo $row['2']; ?></b></p>
                           
                    <?php } ?>  

                            <h5 class="mt-5 mb-4 text-secondary">ingredients</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <thead>
                                        <tr>
                                            <td>INGREDIENT</td>
                                            <td>NAME</td>
                                            <td>PRICE</td>
                                
                                        </tr>
                                    </thead>

                            <?php
						        $title=$_REQUEST['title'];  
						        $query=mysqli_query($con,"SELECT * from ingredients where recipetitle= '$title'");
						        while($row=mysqli_fetch_array($query))
						        {
					        ?>
                                    <tbody>
                                        
                                        <tr>
                                            <td><img src="recipes/<?php echo $row['1']; ?>" alt=""></td>
                                            
                                            <td><?php echo $row['2']; ?></td>
                                            
                                            <td><?php echo $row['3']; ?></td>

                                            <td><a href="cart.html" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                Add to Cart
                                            </a></td>
                                        </tr>
                                        
                                    </tbody>
                            <?php
                                } ?>
                                </table>
                            </div>
                            <!-- <h5 class="mt-5 mb-4 text-secondary">Features</h5> -->
                            <!-- <div class="row"> -->
								
								
                            <!-- </div>    --> 
							
                            <h5 class="mt-5 mb-4 text-secondary">photos</h5>
                            <?php
						        $title=$_REQUEST['title']; 
						        $query=mysqli_query($con,"SELECT * from recipes where title= '$title'");
						        while($row=mysqli_fetch_array($query))
						        {
					        ?>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">photo1</button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="recipes/<?php echo $row['10']; ?> " alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">photo2</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="recipes/<?php echo $row['11']; ?> " alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">photo3</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="recipes/<?php echo $row['12']; ?> " alt="Not Available"> </div>
                            </div>
                            <?php } ?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--	Footer   start-->

		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="../js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="../js/greensock.js"></script> 
<script src="../js/layerslider.transitions.js"></script> 
<script src="../js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="../js/popper.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/owl.carousel.min.js"></script> 
<script src="../js/tmpl.js"></script> 
<script src="../js/jquery.dependClass-0.1.js"></script> 
<script src="../js/draggable-0.1.js"></script> 
<script src="../js/jquery.slider.js"></script> 
<script src="../js/wow.js"></script> 
<script src="../js/custom.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>

</html>