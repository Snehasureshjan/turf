<?php
include('DatabaseCon.php');

    $b=$_POST['bid'];
    $s=mysqli_query($con,"update bookturf set pstatus='paid' where bid='$b'");

    echo "<script>alert('Successfully booked!!!');window.location='userhome.php';</script>";
    
?>