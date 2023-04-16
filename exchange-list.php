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
    <title>Blood Exchange Page</title>
    <link rel="stylesheet" type="text/css" href="exchange-list.css"/>
    
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
                
           <h2>Blood Exchange</h2>

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
                <label for="">Select Blood Group to recieve </label>
                <br><br>
                <select name="recieve_blood_group">
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
                <label for="">Select Blood Group to give </label>
                <br><br>
                <select name="give_blood_group">
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
        $recieve_blood_group = $_POST['recieve_blood_group'];
        $give_blood_group = $_POST['give_blood_group'];
        $illness = $_POST['illness'];


        // Query to check if recieve_blood_group exists in donor_registration
        $check_q = "SELECT * FROM donor_registration WHERE blood_group = :recieve_blood_group";
        $st_check = $db->prepare($check_q);
        $st_check->bindValue(':recieve_blood_group', $recieve_blood_group);
        $st_check->execute();

        $num_row = $st_check->rowCount();

        // If recieve_blood_group exists in donor_registration, remove the entry and allow submission
        if ($num_row > 0) {
            // Delete the entry from donor_registration
            $delete_q = "DELETE FROM donor_registration WHERE blood_group = :recieve_blood_group";
            $st_delete = $db->prepare($delete_q);
            $st_delete->bindValue(':recieve_blood_group', $recieve_blood_group);
            $st_delete->execute();

            $q = $db->prepare("INSERT INTO blood_exchange(name, fname, address, city, age, email, mobile_no, recieve_blood_group, give_blood_group, illness) VALUES (:name, :fname, :address, :city, :age, :email, :mobile_no, :recieve_blood_group, :give_blood_group, :illness)");
            
            
            echo "<script>alert('Exchange Registered!')</script>";
        } 

        else {
            echo "<script>alert('Out of Stock Blood')</script>";
        }
    }
?>

</body>
</html>