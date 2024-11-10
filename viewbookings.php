<?php
    session_start();
    $val=$_SESSION['uid'];
?>

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
        
        <!-- Google Web Fonts -->
    	<link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        
        <!-- Libraries Stylesheet -->
    	<link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />
		
        <!-- Icon Font Stylesheet -->
  		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
         <!-- Customized Bootstrap Stylesheet -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <style>
            th,td{
                padding: 20px;
                text-align:center;
                border: 2px solid white;
                color:white;
            }
            h5{
                color: white;
            }
        </style>

    </head>

    <body>

        <!-- Nav Bar Start -->
        
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="ownerhome.php" class="nav-item nav-link active" style="color:white;">Home</a>
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
              
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Near to <span>Turf</span> </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Actions</a>
                            <div class="dropdown-menu">
                                <a href="addturf.php" class="dropdown-item">Add Turf</a>
                                <a href="viewturf.php" class="dropdown-item">View Turf</a>
                                <a href="viewbookings.php" class="dropdown-item">View Bookings</a>
                            </div>
                        </div>
                        <a href="index.php" class="nav-item nav-link active">Log Out</a>                        
                    </div>
                </div>
            </div>
        </nav>
        <!-- Nav Bar End -->

        <!-- Carousel Start -->

        <?php
            include'DatabaseCon.php';
            $sql="select * from owner where oid='$val'";
            $rs=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($rs);
            $no=$row['oid'];
            $nm=$row['name'];
        ?>
         
        <div class="carousel">
            <div class="container-fluid">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/h28.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                    <h2 style="color:white;">Bookings</h2>
                        <div class="menu-tab">                 
                            <div class="tab-content">
                                <div id="all" class="container tab-pane active">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <table border="5" align="center">
                                                <tr><th><h5>Turf Name</h5></th><th><h5>Booked Game</h5></th><th><h5>Match Date</h5></th><th><h5>Start Time</h5></th><th><h5>End Time</h5></th><th><h5>Booked On</h5></th><th><h5>User</h5></th><th><h5>Phone No.</h5></th></tr>
                                            <?php                                  
                                                $q="select * from bookturf where oid='$no' AND pstatus='paid'";
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