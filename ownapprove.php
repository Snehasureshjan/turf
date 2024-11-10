<?php
include('DatabaseCon.php');

    $id=$_GET['id'];

    $sql=mysqli_query($con,"update login set status='approved' where uid='$id'");

    echo "<script>window.location='viewowner.php';</script>";
?>