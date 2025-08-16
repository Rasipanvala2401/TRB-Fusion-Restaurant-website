<?php
 
	session_start();
	include("conn.php");

	if(!isset($_SESSION['aemail'])){
		header('location:index.php');
	}
	echo $_SESSION['aemail'];

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$image = $_FILES['img']['name'];
	$tmp_name = $_FILES['img']['tmp_name'];
	$folder = "images/" . $image;
	$category = $_POST['category'];
	$sql = "insert into tblfood(name,price,img,category) values('$name','$price','$image','$category')";
	$cmd = mysqli_query($conn, $sql);
	if ($cmd) {
		move_uploaded_file($tmp_name, $folder);
		echo "<script>alert('Product addedd Successfully!')</script>
				window.location.href='admindash.php'";
	} else {
		echo "Not inserted!" . mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>

	<link rel="stylesheet" href="bootstrap4.css">
	<link rel="stylesheet" href="bootstrap5.css">
	<link rel="stylesheet" href="admindash.css">
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
					<li class="nav-item"><a class="nav-link" href="admindash.php" id="insert">Insert</a></li>
					<li class="nav-item"><a class="nav-link" href="adminmenu.php">Menu</a></li>
					<!-- <li class="nav-item"><a class="nav-link" href="">Users</a></li> -->
					<li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<hr>
	<br><br><br><br>
	<form action="#" method="post" enctype="multipart/form-data">

		<h2 class="text-center">INSERT FOOD</h2>
		<h4>Name</h4>
		<input type="text" name="name" id="name">
		<h4>Price</h4>
		<input type="text" name="price" id="price">
		<h4>Image</h4>
		<input type="file" name="img" id="img"><br>

		<h4>Category</h4>
		<select name="category" id="cate" style="width: 100%;height:35px;color:rgb(56,39,164);background-color:antiquewhite;">
			<option value="Desi Tadka">Desi Tadka</option>
			<option value="Chinese">Chinese</option>
			<option value="Diet">Diet</option>
			<option value="Italian">Italian</option>
			<option value="Punjabi">Punjabi</option>
			<option value="South">South</option>
			<option value="Sweet">Sweet</option>
		</select><br>
		<div class="err"></div>
		<button type="submit" name="submit" id="submit">SUBMIT</button>
	</form>
	<br>
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
	<script>
		$("#submit").click(function() {
			name = $("#name").val();
			price = $("#price").val();
			pricep = price.match(/^\d[0-9]+$/);
			img = $("#img").val();
			cate = $("#cate").val();
			err = $(".err")
			if (name == "" || price == "" || img == "" || category == "") {
				err.html("All fields are required!");
				return false;
			} else if (!(/^[A-Za-z\s]+$/).test(name)) {
				err.html("Name has only alphabets!");
				return false;
			} else if (!pricep) {
				err.html("Price has only numbers!");
				return false;
			} else {
				err.html("");
				alert("NEW PRODUCT ADDED!");
				return true;
			}
		})
	</script>
</body>

</html>

