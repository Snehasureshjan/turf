<?php
include('DatabaseCon.php');

    $tid=$_POST['turfid'];
    $g=$_POST['game'];
    $gr=$_POST['grate'];
    $e=$_POST['equipment'];
    $er=$_POST['erate'];

$q=mysqli_query($con,"insert into games(tid,game,gamerate,equipmentname,eqrate) values('$tid','$g','$gr','$e','$er')");
echo "<script>window.location='viewturf.php';</script>";
?>