<?php
    $conn=mysqli_connect("localhost","root","","dbrest");
    if(isset($conn)) {
        echo "Connection!";
    } else {
        echo "Connection failed!";
    }
?>