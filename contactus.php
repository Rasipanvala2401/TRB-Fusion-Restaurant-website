<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="bootstrap4.css">
	<link rel="stylesheet" href="bootstrap5.css">
	<link rel="stylesheet" href="contact.css">
	<Script src="jquery-3.7.1.min.js"></Script>
	<script src="bootstrap.bundle.min.js"></script>
	<title>Contact Us</title>

</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid justify-content-between align-items-center">
			<img src="images/navlogo.png" alt="" class="navbar-brand" height="50px" width="120px">
			<button class="navbar-toggler p-fixed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse flex-column w-100" id="navbarMenu">
			<div class="navLinkWrap">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
					<li class="nav-item"><a class="nav-link" href="contactus.php" id="cnt">Contact Us</a></li>
					<li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<hr>
	<br><br>

	<div class="overlay">
		<h1>Contact Us</h1>
		<div class="contact-info">
			<h4>
				📞 +91 5459581031 <br>
				✉️ <a href="TRB">trbfusion@gmail.com</a><br>
				📍 1234 Culinary Rd, Cityville <br>
				🕐 Mon–Sun: 5pm – 11pm </h4>
		</div>

		<form action="#" method="POST">
			<input type="text" name="name" placeholder="Name" class="name" />
			<input type="email" name="email" placeholder="Email" class="email" />
			<textarea name="message" rows="5" placeholder="Message" class="msg"></textarea>
			<div class="err"></div>
			<input type="submit" value="Send Message" id="sub" class="submit"></input>
		</form>
	</div>

	<script>
		$(".submit").click(function() {
			var name = $(".name").val();
			var email = $(".email").val();
			var emailch = email.match(/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/);
			var msg = $(".msg").val();
			var err = $(".err");
			if (name == "" || email == "" || msg == "") {
				err.html("All fields are compulsory!");
				return false;
			} else if (!(/^[A-Za-z\s]+$/).test(name)) {
				err.html("Username has only alphabets!");
				return false;
			} else if (!emailch) {
				err.html("Invalid Email!");
				return false;
			} else {
				err.html("");
				alert("Submitted !");
				return true;
			}
		})
	</script>

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