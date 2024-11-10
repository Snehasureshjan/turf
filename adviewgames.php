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
        </style>
    </head>

    <body>

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="adminhome.php" class="nav-item nav-link active">Home</a>
                <a href="adviewturf.php" class="nav-item nav-link" style="color:white;">Back</a>
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
                            <a href="adviewturf.php" class="dropdown-item">View Turf</a>
                            <a href="viewowner.php" class="dropdown-item">View Owner</a>
                        </div>
                    </div>
                    <a href="index.php" class="nav-item nav-link active">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->   
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">           
                    <?php
                        include('DatabaseCon.php');
                        $n=$_GET['n'];
                        $y="select turfname,landmark,place,district from turfdetails where tid='$n'";
                        $ry=mysqli_query($con,$y);
                        while($row1=mysqli_fetch_assoc($ry))
                        {
                    ?>   
                        <table>
                            <tr><td>  
                                <h1 style="color:white;"><?php echo $row1['turfname'];?></h2></td></tr>
                            <tr><td>
                                <h3 style="color:yellow;"><?php echo $row1['landmark'].", ".$row1['place'];?></h3></td></tr>
                        </table>
                    <?php
                        }
                    ?> 
                    <div class="menu" >
                        <div id="venue" class="container">
                            <div class="section-header text-center">
                                <h2>Available Sports Details</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <table border="5" align="center" style="color:white;">
                                        <tr><th><h5 style="color:yellow;">Games</h5></th><th><h5 style="color:yellow;">Gamerate</h5></th><th><h5 style="color:yellow;">Equipments</h5></th><th><h5 style="color:yellow;">Equipment Rate</h5></th></tr>
                                        <tr>
                                    <?php
                                        $s="SELECT * FROM games INNER JOIN turfdetails ON turfdetails.tid = games.tid";
                                        $rs=mysqli_query($con,$s);
                                        while($row=mysqli_fetch_assoc($rs))
                                        {
                                            if($row['tid']==$n)
                                            {
                                    ?>  
                                            <td> <?php echo $row['game']; ?> </td>
                                            <td> <?php echo $row['gamerate']; ?> </td>
                                            <td> <?php echo $row['equipmentname']; ?> </td>
                                            <td> <?php echo $row['eqrate']; ?> </td>
                                        </tr>
                                    <?php
                                            }
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