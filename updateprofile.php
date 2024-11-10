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
        
    </head>

    <body>

        <!-- Nav Bar Start -->
        
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="userhome.php" class="nav-item nav-link active">Home</a>
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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
                                <a href="bookturf.php" class="dropdown-item">Book Turf</a>
                                <a href="bookings.php" class="dropdown-item">Bookings</a>
                                <a href="viewprofile.php" class="dropdown-item">View profile</a>
                            </div>
                        </div>
                        <a href="index.php" class="nav-item nav-link active">Log Out</a>                        
                    </div>
                </div>
            </div>
        </nav>
        <!-- Nav Bar End -->

        <!-- Page Header Start --> 
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="carousel" >
            				<div class="container-fluid">
                				<div class="owl-carousel">
                    				<div class="carousel-item">                     
                        				<div class="booking">
            				                <div class="container">
              				                    <div class="row align-items-center">
                				                    <div class="col-lg-6">
  									                    <img src="img/h17.jpg" alt="Image">                    
                                                    </div>                    
                        		                    <div class="col-lg-6">
                       				                    <div class="booking-form">
                          		                            <form action="proact.php">
                                                                <?php
                                                                    include('DatabaseCon.php');
                                                                    $sql="select * from registration where rid='$val'";
                                                                    $rs=mysqli_query($con,$sql);
                                                                    while($row=mysqli_fetch_array($rs))
                                                                    {
                                                                ?>
                                                                <input type="text" name="rid" value="<?php echo $row['rid'];?>" hidden>
                                                                <div class="control-group">
                                  		                            <div class="input-group">
                                                                        <?php echo "<img src='uploads/".$row['idproof']."' width='30px' height='250px'";?>                                                                
                                    	                            </div>
                                	                            </div>
                                                                <div class="control-group">
                                  		                            <div class="input-group">
                                       		                            <input type="text" name="n" class="form-control" value="<?php echo $row['name'];?>" readonly/>
                                        		                        <div class="input-group-append">
                                            		                        <div class="input-group-text"><i class="far fa-user"></i></div>
                                        		                            </div>
                                    	                                </div>
                                	                                </div>
                               		                                <div class="control-group">
                                    	                                <div class="input-group">
                                        	                                <input type="email" name="mail" class="form-control" value="<?php echo $row['email'];?>" required/>
                                        		                            <div class="input-group-append">
                                            		                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        		                                </div>
                                    	                                    </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <div class="input-group">
                                        	                                    <input type="tel" pattern="[0-9]{10}" minlength="10" name="contact" class="form-control" maxlength="10" value="<?php echo $row['phone'];?>" required/>
                                        		                                <div class="input-group-append">
                                            		                                <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        		                                    </div>
                                                                                </div>
                                                                            </div>                                                                                                                                                
                                                                        </div>
                                                                    <div> 
                                                                    <?php
                                                                       }
                                                                    ?>
                                                                    <button class="btn custom-btn" type="submit" name="submit">Update</button> 
                                                                </div>  
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>    
                                    </div>      
                                </div>                       
                            </div>
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