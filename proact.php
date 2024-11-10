<?php
include('DatabaseCon.php');

    $em=$_GET['mail'];
    $ph=$_GET['contact'];
    $id=$_GET['rid'];

    $sql="update registration set email='$em', phone='$ph' where rid='$id'";
    $rs=mysqli_query($con,$sql);
    $sq=mysqli_query($con,"update login set username='$em' where uid='$id'");

    echo "<script>window.location='userhome.php';</script>";
?>