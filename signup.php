<?php
    include('conn.php');
    if(isset($_POST['submit'])){
      $uname=$_POST['uname'];
      $email=$_POST['email'];
      $mno=$_POST['mno'];
      $pwd=$_POST['pwd'];
      $sql="insert into tbluser (uname,email,mno,pwd)values('".$uname."','".$email."','".$mno."','".$pwd."')";
      $cmd=mysqli_query($conn,$sql);
      header('Location:index.php');
    }
    else{
      echo "location line wrong";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> 🔐 Sign Up</title>
    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="bootstrap5.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <script src="bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="signup-container">
        <center>
            <form class="signup-form" id="reg" method="post">
                <h1>Sign Up</h1>
                <input type="text" id="uname" name="uname" placeholder="User Name">
                <input type="email" id="email" name="email" placeholder="Email">
                <input type="text" id="mno" name="mno" placeholder="Mobile Number">
                <input type="password" id="pass" name="pwd" placeholder="Password">
                <input type="password" id="cpass" name="confirm_password" placeholder="Confirm Password">
                <div class="err" id="err"></div><br>
                <button type="submit" id="submit" name="submit">Sign Up</button><br><br>
                <a href="index.php">Back to login</a>
            </form>
        </center>
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
        $("#submit").click(function() {
            var uname = $("#uname").val();
            var mno = $("#mno").val();
            var email = $("#email").val();
            var emailch = email.match(/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/);
            var mnop = mno.match(/^\d{10}$/);
            var pass = $("#pass").val();
            var cpass = $("#cpass").val();
            var err = $(".err");
            if (uname == "" || email == "" || mno == "" || pass == "" || cpass == "") {
                err.html("All fields are compulsory!");
                return false;
            } else if (!(/^[A-Za-z\s]+$/).test(uname)) {
                err.html("Username has only alphabets!");
                return false;
            } else if (!emailch) {
                err.html("Invalid Email!");
                return false;
            } else if (!mnop) {
                err.html("Invalid Mobile!");
                return false;
            } else if (pass.length != 8) {
                err.html("Password length is 8!");
                return false;
            } else if (pass != cpass) {
                err.html("Not match with password!");
                return false;
            } else {
                err.html("");
                alert("WELCOME ");
                return true;
            }
        })
    </script>
</body>

</html>

