<?php
$con = mysqli_connect("test5.chaw264c6t0p.us-east-1.rds.amazonaws.com", "admin", "12345678", "ecommerce");
$con=mysqli_connect("localhost","root","","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
