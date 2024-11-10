<?php
define('HOST','localhost:3306');
define('USER','root');
define('PASS','');
define('DB','turf');
$con=mysqli_connect(HOST,USER,PASS,DB)or die("unable to connect");
?>