<?php

session_start();
include("conn.php");
if (!isset($_SESSION['aemail'])) {
    header('location:index.php');
    exit();
}
echo $_SESSION['aemail'];


$fid = $_GET['fid'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $folder = "images/" . $image;
    $category = $_POST['category'];
    $sql = "UPDATE tblfood SET name='$name', price='$price', img='$image', category='$category' WHERE fid=$fid";
    $cmd = mysqli_query($conn, $sql);
    if ($cmd) {
        move_uploaded_file($tmp_name, $folder);
        echo "<script>
        alert('Food Updated Successfully');
        window.location.href='adminmenu.php';
    </script>";
    } else {
        echo "Not Updated!" . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>

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
    <div class="container">
    </div>
    <?php
    $query = "SELECT fid,name, price, img FROM tblfood where fid=$fid";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <form method="POST" action="#" enctype="multipart/form-data">
            <h2 class="text-center">UPDATE FOOD</h2>

            <h4>Name</h4>
            <input type="text" name="name" value="<?php echo $row['name']; ?>">

            <h4>Price</h4>
            <input type="text" name="price" value="<?php echo $row['price']; ?>">

            <h4>Image</h4>
            <input type="file" name="img">
            <br>
            <img src="images/<?php echo $row['img']; ?>" height="80" alt="Current Image"><br>
            <h4>Category</h4>
            <select name="category" id="cate" style="width: 100%;height:35px;color:rgb(56,39,164);background-color:antiquewhite;">
                <option value="Desi Tadka" <?php echo ($row['category']=='Desi Tadka') ? 'selected':'';?>>Desi Tadka</option>
                <option value="Chinese" <?php echo ($row['category']=='Chinese') ? 'selected':'';?>>Chinese</option>
                <option value="Diet" <?php echo ($row['category']=='Diet') ? 'selected':'';?>>Diet</option>
                <option value="Italian" <?php echo ($row['category']=='Italian') ? 'selected':'';?>>Italian</option>
                <option value="Punjabi" <?php echo ($row['category']=='Punjabi') ? 'selected':'';?>>Punjabi</option>
                <option value="South" <?php echo ($row['category']=='South') ? 'selected':'';?>>South</option>
                <option value="Sweet" <?php echo ($row['category']=='Sweet') ? 'selected':'';?>>Sweet</option>
            </select><br>

            <div class="err"></div>
            <button type="submit" name="update">UPDATE</button>
        </form>
    <?php } ?>
</body>

</html>
<script>

</script>