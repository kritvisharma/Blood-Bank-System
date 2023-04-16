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
    <title>Donor Registration Page</title>
    <link rel="stylesheet" type="text/css" href="donor-reg.css"/>
    
</head>
<body>

<?php
   $email=$_SESSION['un'];
   if(!$email){
        header("Location:index.php");
   }
?>

<form action="" method="post">

<section>


<div class="logo"><a href="admin-home.php"><img src="image/logo-no-background.png" class="logo-icon"></a></div>
    <div class="form-box">
    
        <div class="form-value">
                
           <h2>Donor Registration</h2>

            <div class="inputbox">
                 <label for="">Enter Name</label>
                <input type="text" required name="name" >
                
            </div>

            <div class="inputbox">
                <label for="">Enter Father's Name</label> 
                <input type="text" required name="fname" >
                
            </div>

            <div class="inputbox">
                <label for="">Enter Address</label>
                <input type="textarea" required name="address">
                
            </div>

            <div class="inputbox">
                <label for="">Enter City/Region</label>
                <input type="text" required name="city/region" >
                
            </div>

            <div class="inputbox">
                <label for="">Enter Age</label>
                <input type="text" required name="age">
                
            </div>

            <div class="inputbox">
                <label for="">Enter Email</label>
                <input type="email" required name="email">
                
            </div>

            <div class="inputbox">
                <label for="">Enter Mobile No</label>
                <input type="tel" required name="mobile_no">
                
            </div>

            <div class="inputbox">
                <label for="">Select Blood Group</label>
                <br><br>
                <select name="blood_group">
                    <option>Default</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>A1+</option>
                    <option>A1-</option>
                    <option>A1B+</option>
                    <option>A1B-</option>
                    <option>A2+</option>
                    <option>A2-</option>
                    <option>A2B+</option>
                    <option>A2B-</option>
                    <option>INRA</option>
                    <option>Bombay Blood Group</option>
                </select>   
            </div>

            <div class="inputbox">
                <label for=""> Do you have any illness/medical requirement?</label>
                <input type="textarea" required name="illness">
                
            </div>

            <div class="login">
                <label for=""><input type="submit" name="sub" value="Submit"></label>
            </div>
            <br>

            <div class="footer"><a href=logout.php>Logout</a></div>

        </div>
        

    </div>
    
</section>


</form>

<?php

    

    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $address = $_POST['address'];
        $city= $_POST['city/region'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $mobile_no = $_POST['mobile_no'];
        $blood_group = $_POST['blood_group'];
        $illness = $_POST['illness'];

        $q = $db->prepare("INSERT INTO donor_registration (name, fname, address, city, age, email, mobile_no, blood_group, illness) VALUES (:name, :fname, :address, :city, :age, :email, :mobile_no, :blood_group, :illness)");
        $q->bindValue(':name', $name);
        $q->bindValue(':fname', $fname);
        $q->bindValue(':address', $address);
        $q->bindValue(':city', $city);
        $q->bindValue(':age', $age);
        $q->bindValue(':email', $email);
        $q->bindValue(':mobile_no', $mobile_no);
        $q->bindValue(':blood_group', $blood_group);
        $q->bindValue(':illness', $illness);

        if($q->execute()){
            echo "<script>alert('Donor Registered!');</script>";
            
        }
        else{
            echo "<script>alert('Donor Not Registered!');</script>";
        }
    }
?>

</body>
</html>