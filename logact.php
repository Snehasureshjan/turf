<?php
include('DatabaseCon.php');

    $uname=$_POST['username'];
    $upass=$_POST['password'];
    $sql="select * from login where username='$uname' and password='$upass'";
    $a=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($a);

    session_start();
    if($row['usertype']=="admin")
    {
        $_SESSION['uid']=$row['uid'];
        header('location:adminhome.php');
    }
    else if($row['usertype']=="user")
    {
        $_SESSION['uid']=$row['uid'];
        header('location:userhome.php');
    }
    else if($row['usertype']=="owner" && ($row['status']=="approved")) 
    {
        $_SESSION['uid']=$row['uid'];
        header('location:ownerhome.php');
    }
    else
    {
        echo "<script>alert('invalid username or password');window.location='login.php';</script>";
    }
?>