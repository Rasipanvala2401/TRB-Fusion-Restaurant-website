<?php    
    include('conn.php');
        $fdid = $_REQUEST['fdid'];

    if (isset($_REQUEST['fdid'])) {
        $sql = "DELETE from tblfood where fid=$fdid";
        $cmd = mysqli_query($conn,$sql);
        echo "<script>
                    alert('Food Deleted');
                    window.location.href='adminmenu.php';
                </script>";

    }

?>