<?php
include('DatabaseCon.php');

$tn=$_POST['tn'];
    $g=$_POST['gc'];
    $ct=$_POST['time'];
    $d=$_POST['dt'];
    $start_time=$_POST['s1'];
    $end_time=$_POST['s2'];
    $cd=date("Y-m-d");
while(strtotime($start_time) <= strtotime($end_time)){
    $start = $start_time;
    $end = date('H:i',strtotime(' minutes',strtotime($start_time)));
    $start_time = date('H:i',strtotime(' minutes',strtotime($start_time)));
    
    if(strtotime($start_time) <= strtotime($end_time)){
        $time[$i]['start'] = $start;
        $time[$i]['end'] = $end;
    }
    //Here you need to write query and fetch data.
    $todayDate = date('d-m-Y'); //Please check date format. It should be similar as your database date field format.
    //please use data binding instead of contacting variable.
    $selectQuery = "select \'bid\' from bookturf where cdate = \"\'.$todayDate.\'\" AND (( \'startime\' >= \"\'.$start.\'\" AND \'startime\' <= \"\'.$start.\'\" ) || (\'endtime\' >= \"\'.$end.\'\" AND \'endtime\' <= \"\'.$end.\'\"))";

    // After, you need to exeucte this query and need to check query output. if it has records, then you need to show booked else available. as below
    $result = mysqli_query($con, $selectQuery);
    if ($result->num_rows) {
        $time[$i]['status'] = 'booked';
    } else {
        $time[$i]['status'] = 'available';
    }
}
print_R($time);
?>