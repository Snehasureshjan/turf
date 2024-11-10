<?php
include('DatabaseCon.php');

$b=$_GET['n'];

$s=mysqli_query($con,"delete from bookturf where bid='$b'");

echo "<script>window.location='bookings.php';</script>";

//echo "<script>alert('Successfully Cancelled your booking!!!');window.location='bookings.php';</script>";
?>