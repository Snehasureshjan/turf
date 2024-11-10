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
                    <a href="ownerhome.php" class="nav-item nav-link active">Home</a>
                    <a href="viewturf.php" class="nav-item nav-link">Back</a>
                </div>
            </div>              
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Near to <span>Turf</span></a>
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
        </div>
        <!-- Nav Bar End -->
        
        <!-- Page Header Start -->
        <div class="page-header">
            </br> </br> </br> </br> </br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    </div>                 
                    <div class="col-md-4">
                        <div id="success"></div>
                        <form action="addgameact.php" method="post">
                        	
                            <?php
                                include('DatabaseCon.php');
                                $n=$_GET['n'];
                                $s="select * from turfdetails where tid='$n'";
                                $rs=mysqli_query($con,$s);
                                while($row=mysqli_fetch_assoc($rs))
                                {
                            ?>         

                            <div>
                                <input type="text" name="turfid" value="<?php echo $row['tid']; ?>" readonly/>
                                <p class="help-block text-danger"></p>
                            </div>                            
                            <div class="control-group">
                                <input type="text" name="turfname" value="<?php echo $row['turfname']; ?>" readonly/>
                                <p class="help-block text-danger"></p>
                            </div>                          
                            <div>
                                <select name="game" required>
                                    <option>--Choose Game--</option>
                                        <optgroup label="Cricket">
                                            <option>Cricket</option>
                                            <option>Nano Cricket 1</option>
                                            <option>Nano Cricket 2</option>
                                        <optgroup label="Football">
                                            <option>Football 9 s</option>
                                            <option>Football 7 s</option>
                                            <option>Football 7 A</option>
                                            <option>Football 7 B</option>
                                            <option>Football 5 A</option>
                                            <option>Football 5 B</option>
                                            <option>Football 6 s</option>                              
                                        <optgroup label="Hockey">    
                                            <option>Hockey</option>
                                </select>                               
                            </div>
                            </br>            
                            <div>
                                <input type="text" name="grate" placeholder="Turf Rate/hour">                        
                            </div>
                            </br>
                            <div>
                                <select name="equipment" required>
                                    <option>--Choose Equipment--</option>
                                    <option>Cricket equipments</option>
                                    <option>Football equipments</option>                                                             
                                    <option>Hockey equipments</option>
                                </select>
                            </div>
                            </br>
                            <div>
                                <input type="text" name="erate" placeholder="Equipment Rate/hour">
                            </div>   
                            </br>
                            <div>
                                <button class="btn custom-btn" type="submit">Add Game</button>
                            </div>
                            <?php
                                }                                                                                 
                            ?>
                        </form>
                        </div>
                    </div>            
                    <div class="col-md-5">
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