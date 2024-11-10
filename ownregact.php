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
                $d=$_POST['mail'];
                //$tn=$_POST['cn'];
				$c=$_POST['contact'];				
				$e=$_POST['password'];

				$q=mysqli_query($con,"insert into owner(name,email,contact,idproof) values('$a','$d','$c','$name')");
                //echo $q;

				$sql="select max(oid) as id from owner";
				$n=mysqli_query($con,$sql);
				$t=mysqli_fetch_array($n);
				$uid=$t['id'];
				
				$s=mysqli_query($con,"insert into login(uid,username,password,usertype,status) values('$uid','$d','$e','owner','pending')");
                //echo $s;
				echo "<script>window.location='login.php';</script>";
		}
	}
}
?>