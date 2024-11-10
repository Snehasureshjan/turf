<?php 
include('DatabaseCon.php');

    //$tid=$_POST['turfid'];
    $r=$_POST['rid'];
    echo $r;
    $tn=$_POST['tn'];
    $g=$_POST['gc'];
    $ct=$_POST['time'];
    $d=$_POST['dt'];
    $st=$_POST['s1'];
    echo $st;
    //$et=$_POST['s2'];
   $cd=date("Y-m-d");
    //while(strtotime($st) <= strtotime($et)){
        //$start = $st;
        //$end = date('H:i',strtotime(' minutes',strtotime($st)));
        //$st = date('H:i',strtotime(' minutes',strtotime($st)));
        //$diff = $end - $st;
        //if(strtotime($st) <= strtotime($et)){
            //$time['start'] = $start;
            //$time['end'] = $end;
        //}

    $x=mysqli_query($con,"select bid from bookturf where cdate='$cd' AND slotid='$st'");        
    
if ($x->num_rows) {
    echo "<script>alert('Sorry!!! Not available for these timings!');window.location='bookturf.php';</script>";
    //$time = 'Not available for these timings!!';
    //print_R($time);  
} else {
    $q=mysqli_query($con,"insert into bookturf(turfname,games,cdate,bdate,ctime,startime,endtime,rid,slotid) values('$tn','$g','$cd','$d','$ct','0','0','$r','$st')");
    echo "<script>alert('Successfully Booked!');window.location='bookturf.php';</script>";
    //$time['status'] = 'available';
}

  
//}
?>


<?php 
include('DatabaseCon.php');

    //$tid=$_POST['turfid'];
    $r=$_POST['rid'];
    $tn=$_POST['tn'];
    $g=$_POST['gc'];
    $ct=$_POST['time'];
    $d=$_POST['dt'];
    $st=$_POST['s1'];
    $et=$_POST['s2'];
    $cd=date("Y-m-d");
    while(strtotime($st) <= strtotime($et)){
        $start = $st;
        $end = date('H:i',strtotime(' minutes',strtotime($st)));
        $st = date('H:i',strtotime(' minutes',strtotime($st)));
        //$diff = $end - $st;
        if(strtotime($st) <= strtotime($et)){
            $time['start'] = $start;
            $time['end'] = $end;
        }

    $x=mysqli_query($con,"select bid from bookturf where cdate='$cd' && ((startime >='$start' AND startime <='$start') && (endtime >='$end' AND endtime <='$end'))");        
    
if ($x->num_rows) {
    echo "<script>alert('Sorry!!! Not available for these timings!');window.location='bookturf.php';</script>";
    //$time = 'Not available for these timings!!';
    //print_R($time);  
} else {
    $q=mysqli_query($con,"insert into bookturf(turfname,games,cdate,bdate,ctime,startime,endtime,rid) values('$tn','$g','$cd','$d','$ct','$start','$et','$r')");
    echo "<script>alert('Successfully Booked!');window.location='bookturf.php';</script>";
    //$time['status'] = 'available';
}

  
}
?>