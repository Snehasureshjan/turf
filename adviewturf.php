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

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/h36.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        </br></br></br> </br> </br> </br> </br> </br>
                        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
              				<div class="modal-header border-0">
               				</div>                              
                			<div class="modal-body d-flex align-items-center justify-content-center">
                  				<div class="input-group" style="max-width: 600px;">
                        			<input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Pathanamthitta">
                       			 	<button class="btn btn-primary px-4"><i class="fa fa-search"></i><a href="#venue"> <font color="#FFFFFF">Search</font></a></button>
                   				</div>
                			</div>
          				</div>
                        </br></br> </br> </br> </br> </br> </br>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="menu" >
            <div id="venue" class="container">
                <div class="section-header text-center">
                    <h2>Your Favorite Sports</h2>              
                    <div id="all" class="container tab-pane active"> 
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <table border="5" >
                                         <tr><th><h5>Turf Logo</h5></th><th><h5> Turf Name </h5></th> <th><h5> Landmark </h5> </th> <th><h5> Place</h5> </th> <th><h5> District</h5> </th> <th><h5> Phone </h5></th> <th> <h5>Email </h5></th> <th><h5> Description</h5> </th> </tr>
                                    <?php
                                        include('DatabaseCon.php');
                                        $q="select * from turfdetails";
                                        $rs=mysqli_query($con,$q);
                                        while($row=mysqli_fetch_assoc($rs))
                                        { 
                                    ?>                                      
                                        <tr>
                                        <td>
                                            <?php echo "<img src='uploads/".$row['image']."' width='70px' height='70px'";?>
                                        </td>
                                        <td>                                        
                                            <?php echo $row['turfname']; ?>                                      
                                        </td>
                                        <td>                                       
                                            <?php echo $row['landmark']; ?>                                      
                                        </td>
                                        <td>                                       
                                            <?php echo $row['place']; ?>                                       
                                        </td>
                                        <td>                                      
                                            <?php echo $row['district']; ?>                                      
                                        </td>
                                        <td>                                      
                                            <?php echo $row['phone']; ?>                                       
                                        </td>
                                        <td>                                       
                                            <?php echo $row['email']; ?>                                      
                                        </td>
                                        <td>                                        
                                            <?php echo $row['description']; ?>                                       
                                        </td>
                                        <td>
                                            <a href="viewturfowner.php?n=<?php echo $row['oid'];?>">View Owner</a>
                                        </td>
                                        <td>
                                            <a href="adviewgames.php?n=<?php echo $row['tid'];?>">View Games</a>
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