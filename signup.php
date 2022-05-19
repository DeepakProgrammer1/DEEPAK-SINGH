<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./new.php">
</head>
<body bgcolor="info mt-5">

<h1 align="center">Your Reegistration Successfully</h1>
<h3 class="pd-3 mt-3 text-center">Thanks for Joining!!!!</h3>
<p align="center">
<a href="./new.php">Back to Home</a></p>


<?php

$email=$_POST['email'];
$password=$_POST['password'];


$server='localhost';
$dbname='icoder';
$username='root';
$password='';


$conn=mysqli_connect($server,$username,$password,$dbname);

$qr="INSERT INTO `info`(`ID`, `Email`, `Password`) VALUES (null,'$email','$password')";

mysqli_query($conn,$qr);


?>


<script src="./js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
