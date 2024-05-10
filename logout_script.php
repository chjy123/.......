<?php
$con = mysqli_connect("t4.chaw264c6t0p.us-east-1.rds.amazonaws.com "admin", "12345678", "ecommerce");
session_start();
session_unset(); 
session_destroy(); 
header('location:index.php');
?>
