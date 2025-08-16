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

    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="bootstrap5.css">
    <link rel="stylesheet" href="menu.css">
    <Script src="jquery-3.7.1.min.js"></Script>
    <script src="bootstrap.bundle.min.js"></script>
    <title>Menu</title>
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
                    <li class="nav-item"><a class="nav-link" href="menu.php" id="menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <br><br>
     <?php
    include('conn.php');
    $categories = ['Desi Tadka', 'Chinese', 'Diet', 'Italian', 'Punjabi', 'South', 'Sweet']; // predefined sections

    ?>
    <div class="container-fluid">
        <div class="menu">
            <?php foreach ($categories as $cat) { ?>
                <h1><?php echo $cat ?></h1>
                <div class='row'>
                    <?php
                    $query = "SELECT fid,name, price, img FROM tblfood WHERE category = '$cat'";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-md-3 p-4">
                            <img src="images/<?php echo $row['img'] ?>" class="img-fluid" alt="Image">
                            <h5 class="name"><?php echo $row['name'] ?></h5>
                            <p>₹<?php echo $row['price'] ?></p>
                            <center>
                                <a href="order.php?fid=<?php echo $row['fid'] ?>">
                                    <button name="order" class="mt-2 order">ORDER</button></a><br>
                            </center>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>

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