
<?php
session_start();
include("config.php");

?>




<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
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
  .relative{

	margin-top: 90px; 
	background-color: white;
	 }
</style>
  
</head>
<body class="bg-blue-50 overflow-x-hidden">

    <!--header-->
	
	<?php
		if(isset($_SESSION['uemail'])){

			include("../include/header2.php");
		}else{
			include("../include/header.php");
		}
	?>
			
		


    <!--//header-->

    <!--Hero Section-->
	<section class="relative">
		<div class="container mx-auto flex flex-col lg:flex-row items-center gap-12 mt-10">
		  <!-- Content -->
		  <div class="flex flex-1 flex-col items-center lg:items-start overflow-hidden">
			<h2 class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-green-500 font-bold text-3xl md:text-4 lg:text-6xl text-center lg:text-center mb-2 py-2 slideUp">
			Recipes at your fingertips<br/>
			</h2>
			<div class="overflow-hidden">
			<p class="font-thin text-xl md:text-3xl text-center lg:text-left slideUp">
				Say good bye to long and frustrating
			</p>
			<p class="font-thin text-xl md:text-3xl text-center lg:text-left slideUp">
				food blogs and recipe videos. Access </p>
			<p class="font-thin text-xl md:text-3xl text-center lg:text-left slideUp">
				our recipe cards to prepare any dish </p>
			<p class="font-thin text-xl md:text-3xl text-center lg:text-left slideUp">
				in minutes.</p>
			</p>
		    </div>
			<div class="flex mx-auto md:mx-40 mt-6 justify-center flex-wrap gap-6">
			  <a href="#search-dish-call">
			  <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white text-xl font-regular py-2 px-4 rounded transition duration-500 ease-in-out bg-blue-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 ...">
				Browse Dish
			  </button>
			</a>
			</div>
		  </div>
		  <!-- Image -->
		  <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10" style="margin-top: 100px;">
			<img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full fadeInRotate" src="../assets/images/hero-dish.png" alt="" />
		  </div>
		</div>
		<!-- Rounded Rectangle -->
		<div
		  class="
			hidden
			md:block
			overflow-hidden
			bg-bookmark-purple
			rounded-l-full
			absolute
			h-80
			w-2/4
			top-32
			right-0
			lg:
			-bottom-28
			lg:-right-36
		  "
		></div>
	</section>

	  <!--Browse Dish Section-->
	  <section class="relative md:m-10">
		  <div id="search-dish-call" class="font-medium text-2xl md:text-4xl text-center mb-6">Search Your Favorite Dish</div>
		  <div class="bg-white p-3 shadow-sm rounded-sm">
			  <!--Search bar-->
			  <div class="border rounded overflow-hidden flex mb-4">
				<input id="home-dish-search-bar" type="text" class="w-11/12 px-4 py-2 border-gray-300 focus:ring-blue-600 font-regular" placeholder="What are you looking for?">
				<button class="flex w-1/12 items-center justify-center md:px-4 border-l">
				  <svg class="h-4 w-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
				</button>
			  </div>

			  <!--Recent Posts-->
			  <p id="home-no-posts" class="hidden text-center my-4 text-sm font-medium text-gray-400">No Dishes Found</p>
			  <div id="home-posts" class="grid grid-cols-1 md:grid-cols-4 gap-3">

			  </div>
		  </div>
	  </section>
	  

	<section class="bg-blue-600">
		<div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
			<div class="flex justify-center mt-8 space-x-6">
				<a href="https://www.facebook.com/laymanbrother.19/" class="text-gray-50 hover:text-white">
					<span class="sr-only">Facebook</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
					</svg>
				</a>
				<a href="https://twitter.com/ashutosh_1919" class="text-gray-50 hover:text-white">
					<span class="sr-only">Twitter</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
					</svg>
				</a>
				<a href="https://github.com/ashutosh1919" class="text-gray-50 hover:text-white">
					<span class="sr-only">GitHub</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
					</svg>
				</a>
			   
			</div>
			<p class="mt-8 text-base leading-6 text-center text-gray-50">
				© 2021 FoodLovers, Inc. All rights reserved.
			</p>
	</section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script type="text/javascript" src='../scripts/loginHandler.js'></script>
  <script type="text/javascript" src='../scripts/homeDishesHandler.js'></script>

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