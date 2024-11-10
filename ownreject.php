<?php
include('DatabaseCon.php');

    $id=$_GET['id'];

    $sql=mysqli_query($con,"update login set status='rejected' where uid='$id'");
    echo "<script>window.location='viewowner.php';</script>";
    
?>