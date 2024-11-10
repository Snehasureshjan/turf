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
            $o=$_POST['oid'];
            $tn=$_POST['tname'];
            $tlo=$_POST['tloca'];
            $tla=$_POST['tland'];
            $tdis=$_POST['tdist'];
            $tp=$_POST['tphone'];
            $tm=$_POST['tmail'];
            $td=$_POST['tdesc'];
           
            $q=mysqli_query($con,"insert into turfdetails(oid,turfname,place,landmark,district,phone,image,email,description,status) values('$o','$tn','$tlo','$tla','$tdis','$tp','$name','$tm','$td','available')");		
            echo "<script>window.location='ownerhome.php';</script>";
      }
    }
}
?>
