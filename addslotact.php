<?php
include('DatabaseCon.php');

   $tid=$_POST['tid'];
   $st=$_POST['startime'];
   $et=$_POST['endtime'];

	$s=mysqli_query($con,"insert into timeslot(stime,etime,tid) values('$st','$et','$tid')");
   echo "<script>window.location='viewturf.php';</script>";
?>
