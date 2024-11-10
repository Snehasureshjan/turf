<?php
include('DatabaseCon.php');

if(isset($_POST['submit']))
{ 
  $name=$_FILES['file']['name'];
  $tmpname=$_FILES['file']['tmp_name'];
  	if(isset($name))
	{
		if(!empty($name))
		{
			$location='uploads/';
			if(move_uploaded_file($tmpname,$location.$name))

				$a=$_POST['n'];
				$c=$_POST['contact'];
				$d=$_POST['mail'];
				$e=$_POST['password'];
				$q=mysqli_query($con,"insert into registration(name,phone,email,idproof) values('$a','$c','$d','$name')");
				$sql="select max(rid) as id from registration";
				$n=mysqli_query($con,$sql);
				$t=mysqli_fetch_array($n);
				$uid=$t['id'];
				$s=mysqli_query($con,"insert into login(uid,username,password,usertype,status) values('$uid','$d','$e','user','')");
				echo "<script>window.location='login.php';</script>";
		}
	}
}

?>