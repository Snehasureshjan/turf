<?php
session_start();
$val=$_SESSION['uid'];
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Near to Turf</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
                table, th, td {
                        padding: 15px;
                }
                .button {
                        border: none;
                        background-color: #4CAF50;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                }
        </style>
    </head>

<body>

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
            <a href="userhome.php" class="nav-item nav-link active">Home</a>
            <a href="bookturf.php" class="nav-item nav-link">Back</a>
        </div>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">Near to <span>Turf</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">             
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Actions</a>
                    <div class="dropdown-menu">
                        <a href="bookturf.php" class="dropdown-item">Book Turf</a>
                        <a href="bookings.php" class="dropdown-item">Bookings</a>
                        <a href="viewprofile.php" class="dropdown-item">View profile</a>
                    </div>
                </div>
                    <a href="index.php" class="nav-item nav-link active">Log Out</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar Ends -->

<?php
  include'DatabaseCon.php';
  $sql="select * from registration where rid='$val'";
  $rs=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($rs);
  $nm=$row['rid'];
?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="bookact.php" method="post">
                    <input type="text" name="rid" value="<?php echo $nm;?>" hidden>

                <?php                    
                    $m=$_GET['m'];    
                    $y="select turfname,landmark,place,district,oid from turfdetails where tid='$m'";
                    $ry=mysqli_query($con,$y);
                    while($row1=mysqli_fetch_assoc($ry))
                    {                        
                ?>  
                <table>
                    <input type="text" name="oid" value="<?php echo $row1['oid'];?>" hidden>
                    <tr><td>  
                        <h3 style="color:white;"><?php echo $row1['turfname'];?></h3></td></tr>
                    <input type="text" value="<?php echo $row1['turfname']; ?>" name="tn" hidden>
                    <tr><td>
                        <h4 style="color:yellow;"><?php echo $row1['landmark'].", ".$row1['place'];?></h4></td></tr>
                    <tr><td>  
                        <h4 style="color:white;"><?php echo $row1['district'];?></h4></td></tr>
                </table>
                                                                    
                <?php
                    }                
                    $n=$_GET['n'];
                    $t="SELECT * FROM  games INNER JOIN turfdetails ON turfdetails.tid = games.tid where games.gid='$n'";
                    $rt=mysqli_query($con,$t);
                    while($row2=mysqli_fetch_assoc($rt))
                    {           
                ?>   
                 
                    <h2> <?php echo $row2['game']; ?> </h2> 
                  
                    <input type="text" value="<?php echo $row2['game']; ?>" name="gc" hidden>
                  </br>
                    <h5 style="color:white;"> Choose date </h5>
                    <input type="date" name="dt" min="<?php echo date('Y-m-d');?>" required>
                  </br> </br> 
                 
                <?php
                    date_default_timezone_set('Asia/Calcutta');
                    $tym = date(' h:i:s a', time());
                ?>
            
                    <input type="text" name="time" value="<?php echo $tym; ?>" readonly hidden>                      
                    <h5 style="color:white;"> Choose time-slot </h5>                  
                    <select name="s1" required>
                        <option>--Select Slot--</option>

                <?php
                    $p="select * from timeslot where tid='$m'";
                    $rp=mysqli_query($con,$p);
                    while($row3=mysqli_fetch_assoc($rp))
                    {
                    $sid=$row3['slotid'];
                ?>
                    <option value="<?php echo $sid;?>"> <?php echo $row3['stime'];  echo- $row3['etime'];?> </option>
                <?php
                    }
                ?>
                    </select>
                </br></br>
                    <h5 style="color:white;"> Slot Rate : <?php echo " - ₹".$row2['gamerate']; ?> </h5>
                    <input type="text" name="rt" value="<?php echo $row2['gamerate']; ?>" readonly hidden>
                    <input type="text" name="yr" value="<?php echo $row2['gid']; ?>" readonly hidden>
                    <h5 style="color:white;"> 
                    <input type="checkbox" name="c<?php echo $row2['gid'];?>" value="<?php echo $row2['gid'];?> "> <?php echo $row2['equipmentname'];?> : - ₹ <input type="text" name="c[{gid}]" value="<?php echo $row2['eqrate'];?>" style="width: 50px;" readonly></h5>
                          
                <?php
                    }      
                ?>   

                  </br>
                    <input type="submit" value="Book Now" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>    
                                                    