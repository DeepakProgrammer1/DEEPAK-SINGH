<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
</head>
<body>

<?php

$username=$_POST['uname'];
$password=$_POST['pwd'];

$savedusername="admin";
$savedpassword="12345";

if($username==$savedusername)
{
    if ($password==$savedpassword) {
        echo '<div class="alert alert-sucsess text-center">Login Successfull</div>';
    }
    else
    echo '<div class="alert alert-danger text-center">Invalid Password</div>';
}
else
echo '<div class="alert alert-danger text-center">Invalid Username</div>';

?>

<script src="./js/bootstrap.bundle.min.js"></script>
    
</body>
</html>