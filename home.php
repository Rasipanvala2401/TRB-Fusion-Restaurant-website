 <?php
	session_start();
	include("conn.php");
	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}
	echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>🍽 TRB Fusion</title>

	<link rel="stylesheet" href="bootstrap4.css">
	<link rel="stylesheet" href="bootstrap5.css">
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="bootstrap.min.css.map">
	<script src="bootstrap.bundle.min.js"></script>
	<script src="jquery-3.7.1.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid justify-content-between align-items-center w-100">
			<img src="images/navlogo.png" alt="" class="navbar-brand" height="50px" width="120px">
			<button class="navbar-toggler p-fixed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse flex-column w-100" id="navbarMenu">
			<div class="navLinkWrap">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="home.php" id="home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
					<li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
					<li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<hr>

	<div id="carouselExampleDark" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
				aria-label="Slide 4"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="1000">
				<img src="images/s1.png" class="d-block" alt="coffee">
				<div class="carousel-caption d-none d-md-block">
					<h5>Desi Tadka</h5>
					<p>The Taste of Togetherness</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="2000">
				<img src="images/s2.png" class="d-block" alt="ff">
				<div class="carousel-caption d-none d-md-block">
					<h5>FAST FOOD</h5>
					<p>Bite, crunch, repeat — fast food, faster smiles!</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="3000">
				<img src="images/s3.png" class="d-block" alt="icecream">
				<div class="carousel-caption d-none d-md-block">
					<h5>Salad</h5>
					<p>Fresh, Crisp, and Crafted for Every Bite.</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="4000">
				<img src="images/sl4.png" class="d-block" alt="pastry">
				<div class="carousel-caption d-none d-md-block">
					<h5>Sweets</h5>
					<p>Make your day by having our Sweet</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<section class="abt container">
		<h3>Enjoy our best items</h3>
		<hr>
		<!-- <div class="container"> -->
		<div class="row">
			<div class="col-md-5">
				<p id="kmp">TRB Fusion began with one goal: <br> To bring people together over unforgettable meals. From farm-fresh ingredients to bold spices and age-old techniques, we blend cultures, flavors, and memories on every plate. Our chefs pour heart into every dish, and our staff ensures every guest feels at home.
				</p><br>
				<button id="km" value="KNOW MORE..."><a href="aboutus.php">KNOW MORE...</a></button>
			</div>
			<div class="offset-md-1 col-md-5">
				<img src="images/building.jpg" alt="building" class="buildimg">

			</div>
		</div>
		</div>
	</section>
	<section class="menu">
		<div class="overlay">
			<div class="container">
				<h3 class="text-center" style="font-size: 40px;">Our Menu</h3>
				<div class="row">
					<div class="offset-md-2 col-md-2">
						<a href="menu.php#dk"><img src="images/cchawal.png" class="" alt=""></a>
						<h3>Desi Tadka</h3>
					</div>
					<div class="col-md-2">
						<a href="menu.php#chinese"><img src="images/cchinese.png" class="" alt=""></a>
						<h3>Chinese</h3>
					</div>
					<div class="col-md-2">
						<a href="menu.php#diet"><img src="images/csalad.png" class="" alt=""></a>
						<h3>Diet</h3>
					</div>
					<div class="col-md-2">
						<a href="menu.php#sweet"><img src="images/crg.png" class="" alt=""></a>
						<h3>Sweets</h3>
					</div>
					<div class="col-md-2">
					</div>
				</div><br><br><br>
				<div class="row">
					<div class="offset-md-3 col-md-2">
						<a href="menu.php#italian"><img src="images/cbg.png" class="" alt=""></a>
						<h3>Italian</h3>
					</div>
					<div class="col-md-2">
						<a href="menu.php#punjabi"><img src="images/cpunjabi.png" class="" alt=""></a>
						<h3>Punjabi</h3>
					</div>
					<div class="col-md-2">
						<a href="menu.php#south"><img src="images/csouth.png" class="" alt=""></a>
						<h3>South</h3>
					</div>
					<div class="col-md-3">

					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<center>
			<img src="images/logo.png" alt="" height="200px">
			<h3>Come once, crave forever.</h3>
			<h5>© Copyright 2019 ADN Hospitality.</h5>
			<h5> All Rights Reserved</h5>
			<a href="#"><img src="Images/fb.png" alt="fb"></a>
			<a href="#"><img src="Images/insta.png" alt="insta"></a>
			<a href="#"><img src="Images/ldin.png" alt="ldin"></a>
			<a href="#"><img src="Images/twitter.png" alt="twitter"></a>
		</center>
	</footer>
</body>


</html>