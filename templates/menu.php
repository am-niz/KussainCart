<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cusines</title>
    <!-- google-fonts -->
    <!-- <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet"> -->
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="../styles/style-starter.css">
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css”>
    <style>
        .container {
            margin-top: 30px;
            color: royalblue;
        }
 
        span {
            color: royalblue;
        }
    </style>
</head>

<body>
    <!--header-->
    <?php
    session_start();

    include("config.php");

	if(!isset($_SESSION["uemail"]))
    {
        include("../include/header.php"); 
    }
	else{
		include("../include/header2.php");
	}
	?>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Menu</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Menu</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- menu -->
    <div class="menu-w3ls py-5" id="menu">
        <div class="container py-md-4 py-3">
            <h3 class="title-big mb-2">RECIPES</h3>
            
            <div class="row menu-body">
                <?php 
                $query=mysqli_query($con,"SELECT * from recipes");
                    while($row=mysqli_fetch_array($query))
                    {
                ?>
                <!-- Section starts: Breakfast -->
                <div class="col-lg-6 menu-section">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="recipes/<?php echo $row['10'];?>" alt="pimage" class="img-responsive">
                            <a href="cart.php?title=<?php echo $row['1']; ?>" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <a href="recipedetails.php?title=<?php echo $row['1']; ?>"><b><?php echo $row['1'];?></b></a>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6><?php echo $row['6'];?></h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p><?php echo $row['8'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

                   
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script src="../assets/js/moveup.js"></script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="../assets/js/theme-change.js"></script>
    <script src="../assets/js/typewriter.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script src="../assets/js/script.js"></script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script src="../assets/js/script1.js"></script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>
