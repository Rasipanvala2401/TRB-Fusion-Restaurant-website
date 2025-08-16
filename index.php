
<?php
    session_start();
    include("conn.php");
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        
        $sql="select * from tbluser where email='$email' and pwd='$pwd' ";
        $cmd=mysqli_query($conn,$sql);
        $row=mysqli_num_rows($cmd);
        echo "$sql";
        
        if($row > 0){
            $data = mysqli_fetch_array($cmd);
            $email=$data['email'];
            $pwd=$data['pwd'];
            $_SESSION['email']=$email;
            $_SESSION['pwd']=$pwd;

            echo "<script>
                            alert('login Successfully');
                                window.location.href='home.php';
                            </script>";

        }
        elseif($email=="admin@gmail.com" && $pwd=="12345678"){
            $_SESSION['aemail']=$email;
            $_SESSION['apwd']=$pwd;
            echo "<script>
                            alert('login Successfully');
                                window.location.href='admindash.php';
                            </script>";
        }else{
            echo "<script>
                            alert('login Failed');
                                window.location.href='index.php';
                            </script>";
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="bootstrap5.css">
    <Script src="jquery-3.7.1.min.js"></Script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="index.css">
    <title> 🔐 Login</title>
</head>

<body>

    <!-- Sign In Form -->
    <center>
        <div id="signInSection" class="container mt-5">
            <div class="login-card mt-5">
                <h3>Sign In</h3>
                <form method="post" action="#">
                    <div class="mb-3">
                        <input type="email" class="form-control email" placeholder="Email" name="email" />
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control pass" placeholder="Password" name="pwd"/>
                    </div>
                    <div class="mb-2 err"></div>
                    <a href="signup.php" id="create-acc">Create account</a>
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-primary submit" name="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </center>
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
