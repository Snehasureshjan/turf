<?php 
include('DatabaseCon.php');

    $amt=0;

	if(isset($_POST["submit"]))
	{	
	    session_start();
	    $val=$_SESSION['uid'];
    
        $r=$_POST['rid'];
        //echo $r;
        $tn=$_POST['tn'];
        $g=$_POST['gc'];
        $ct=$_POST['time'];
        $d=$_POST['dt'];
        $st=$_POST['s1'];
        //echo $st;
        $o=$_POST['oid'];
        $cd=date("Y-m-d");
        $gr=$_POST['rt'];
        $yid=$_POST['yr'];
        //$er=$_POST['equip'];

        $yz=mysqli_query($con,"select * from games where gid='$yid'");
        while($row1=mysqli_fetch_array($yz))
        {
            if(isset($_POST['c'.$row1['gid']]))
            {      
                $amt=$amt+($row1['eqrate']);
            }
        }
    }

    $z=mysqli_query($con,"select * from registration where rid='$r'");
    $y=mysqli_fetch_array($z);
    $nm=$y['name'];
    $ph=$y['phone'];
    $x=mysqli_query($con,"select bid from bookturf where cdate='$cd' AND slotid='$st'");        
    
    if ($x->num_rows) 
    {
        echo "<script>alert('Sorry!!! Not available for these timings!');window.location='bookturf.php';</script>";     
    } 

    else 
    {
        $q=mysqli_query($con,"insert into bookturf(turfname,games,cdate,bdate,ctime,rid,slotid,pstatus,oid,name,phone,gamerate,eqrate) values('$tn','$g','$cd','$d','$ct','$r','$st','Not Paid','$o','$nm','$ph','$gr','$amt')");
        $s="select max(bid) as bid from bookturf";
        $rs=mysqli_query($con,$s);
        $row=mysqli_fetch_array($rs);
        $bid=$row['bid'];
        echo"<script>window.location='payment.php?bid=".$bid."&gr=".$gr."&amt=".$amt."';</script>"; 

        //echo "<script>alert('Successfully Booked!');window.location='bookturf.php';</script>";  
    }
?>