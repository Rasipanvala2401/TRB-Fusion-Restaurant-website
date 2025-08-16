 <?php
	session_start();
	include("conn.php");
	if(!isset($_SESSION['aemail'])){
		header('location:index.php');
	}
	echo $_SESSION['aemail'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>

    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="bootstrap5.css">
    <link rel="stylesheet" href="menu.css">
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
                                <a href="update.php?fid=<?php echo $row['fid'] ?>">
                                    <button name="update" class="mt-2 update">UPDATE</button></a><br>
                                <a href="delete.php?fdid=<?php echo $row['fid'] ?>">
                                <button name="delete" class="mt-2 delete">DELETE</button></a>
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

    <script>
        $(".update").click(function() {
            let name = $(this).closest(".col-md-3").find(".name").text();
            if (confirm('Are you sure want to update ' + name + ' ?')) {
                window.location.href = "update.php";
            }
        })
        $(".delete").click(function() {
            let name = $(this).closest(".col-md-3").find(".name").text();
            if (confirm('Are you sure want to delete ' + name + ' ?')) {
                window.location.href = "delete.php";
            }
        })
    </script>

</body>

</html>