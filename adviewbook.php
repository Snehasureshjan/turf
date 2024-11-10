<!DOCTYPE html>
<html lang="en">
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
            h5{
                color:white;
            }
            th,td{
                color:white;
                padding:20px;
                text-align:center;
            }
            </style>
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            &nbsp; &nbsp; &nbsp;
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="adminhome.php" class="nav-item nav-link active" style="color:#FFFFFF;">Home</a>
                </div>
            </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

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
                                <a href="adviewturf.php" class="dropdown-item">View Turf</a>
                                <a href="viewowner.php" class="dropdown-item">View Owner</a>
                                <a href="adviewbook.php" class="dropdown-item">View Bookings</a> 
                            </div>
                        </div>
                        <a href="index.php" class="nav-item nav-link">Log Out</a>    
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Bar End -->   

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu" >
                            <div id="venue" class="container">
                                <div class="section-header text-center">
                                    <h2 style="color:lightblue;">Booking Details</h2>               
                                    <div id="all" class="container tab-pane active"> 
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <table border="5" align="center">
                                                    <tr><th><h5>Turf Name</h5></th><th><h5> Booked Game </h5></th><th><h5>Match Date</h5></th><th><h5>Start Time</h5></th><th><h5>End Time</h5></th><th><h5>Booked On</h5></th><th><h5>User</h5></th><th> <h5>Contact</h5></th></tr>
                                                <?php
                                                    include('DatabaseCon.php');
                                                    $q="select * from bookturf where pstatus='paid'";
                                                    $rs=mysqli_query($con,$q);
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    { 
                                                        $ts=$row['slotid'];
                                                ?>
                                                    <tr>                                      
                                                        <td>
                                                            <?php echo $row['turfname']; ?>                                       
                                                        </td>
                                                        <td>                                     
                                                            <?php echo $row['games']; ?>                                        
                                                        </td>
                                                        <td>                                     
                                                            <?php echo $row['bdate']; ?>                                      
                                                        </td>
                                                <?php
                                                    $ab=mysqli_query($con,"select stime,etime from timeslot where slotid='$ts'");
                                                    while($row1=mysqli_fetch_assoc($ab))
                                                    {
                                                ?>
                                                        <td>
                                                            <?php echo $row1['stime']; ?>   
                                                        </td>
                                                        <td>                                    
                                                            <?php echo $row1['etime']; ?>                                      
                                                        </td>
                                                <?php
                                                    }
                                                ?>
                                                        <td>                                       
                                                            <?php echo $row['cdate']; ?>                                        
                                                        </td>
                                                        <td>                                      
                                                            <?php echo $row['name']; ?>                                
                                                        </td>
                                                        <td>                                     
                                                            <?php echo $row['phone']; ?>                                        
                                                        </td>
                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                                </table>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                            </br></br></br></br></br></br></br>                           
                    </div>
                </div>
            </div>
        </div>        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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