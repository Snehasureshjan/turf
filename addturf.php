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
                                    <a href="addturf.php" class="dropdown-item">Add Turf</a>
                                    <a href="viewturf.php" class="dropdown-item">View Turf</a>
                                    <!-- <a href="viewuser.php" class="dropdown-item">View User</a> -->
                                    <a href="viewbookings.php" class="dropdown-item">View Bookings</a>
                                </div>
                        </div>
                        <a href="index.php" class="nav-item nav-link">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        <!-- Page Header Start -->
        <?php
            include'DatabaseCon.php';
            $sql="select * from owner where oid='$val'";
            $rs=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($rs);
            $nm=$row['name'];
        ?>

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    </div>                   
                    <div class="col-md-5">
                        <div id="success"></div>
                            <form  action="addturfact.php" method="post" enctype="multipart/form-data">                               
                                
                                <div class="control-group">
                                    <input type="text" name="oid" value="<?php echo $row['oid'];?>" hidden/>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="text" name="tname" class="form-control" id="name" placeholder="Turf Name" required="required" data-validation-required-message="Enter turf name" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="text" name="tloca" class="form-control" id="location" placeholder="Location" required="required" data-validation-required-message="Enter location" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="text" name="tland" class="form-control" id="landmark" placeholder="Landmark" required="required" data-validation-required-message="Enter landmark" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="text" name="tdist" class="form-control" id="district" value="Pathanamthitta" readonly />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="text" name="tphone" class="form-control" id="contactno" placeholder="Contact No." required="required" maxlength="12" data-validation-required-message="Please enter your contact no." />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="email" name="tmail" class="form-control" id="email" placeholder="Contact Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            
                                <div class="control-group">
                            	    <input type="file" name="file" class="form-control" id="image" required="required" data-validation-required-message="Choose an image of turf" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <textarea name="tdesc"class="form-control" id="description" placeholder="Description" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div> 

                                <div>
                                    <button class="btn custom-btn" name="submit" type="submit" id="sendMessageButton">Add Turf</button>
                                </div>
                            </form>
                        </div>
                    </div>            
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
    
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