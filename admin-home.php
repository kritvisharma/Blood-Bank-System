<?php
include ('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="admin-home.css">

</head>
<body>

<?php
   $email=$_SESSION['un'];
   if(!$email){
        header("Location:index.php");
   }
?>

<section>

<div class="logo"><img src="image/logo-no-background.png" class="logo-icon"></div>
    

    <div class=flexbox>
        <div class="child"><a href="donor-reg.php">Donor Registration</a></div>
        <div class="child"><a href="donor-list.php">Donor List</a></div>
        <div class="child"><a href="blood-availability.php">Blood Availability</a></div>
        <div class="child"><a href="exchange-list.php">Blood Exchange </a></div>
        <div class="child"><a href="about-blood-donation.php">About Blood Donation</a></div>
        <div class="child"><a href="about-us.php">About Us</a></div>
        
    </div>
     
    <div class="footer"><a href=logout.php>Logout</a></div>
    <br><br>

</section>

</body>
</html>