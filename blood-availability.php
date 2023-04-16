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
    <title>Blood Stock</title>
    <link rel="stylesheet" type="text/css" href="blood-availability.css"/>
    

</head>
<body>

<?php
   $email=$_SESSION['un'];
   if(!$email){
        header("Location:index.php");
   }
?>


    
<section>
<div class="logo"><a href="admin-home.php"><img src="image/logo-no-background.png" class="logo-icon"></a></div>
    
<div class="form-box">
        <h1>Blood Stock</h1>

        <div class="form-value">
            <div class="inputbox">Blood Group</div>
            <div class="inputbox">Quantity</div>    
            
            <div class="inputbox1" style="color:white; background-color:black">O+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='O+'");
                echo $row=$q->rowcount();
                ?>
            </div>


            <div class="inputbox1" style="color:white; background-color:black">O-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='O-'");
                echo $row=$q->rowcount();
                ?>
            </div>


            <div class="inputbox1" style="color:white; background-color:black">A+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A+'");
                echo $row=$q->rowcount();
                ?>
        
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A-'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">B+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='B+'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">B-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='B-'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">AB+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='AB+'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">AB-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='AB-'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A1+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A1+'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A1-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A1-'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A2+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A2+'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A2-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A2-'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A1B+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A1B+'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A1B-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A1B-'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A2B+</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A2B+'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">A2B-</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='A2B-'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">INRA</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='INRA'");
                echo $row=$q->rowcount();
                ?>
            </div>

            <div class="inputbox1" style="color:white; background-color:black">Bombay Blood Group</div>
            <div class="inputbox2"><?php
                $q=$db->query("Select * from donor_registration where blood_group='Bombay Blood Group'");
                echo $row=$q->rowcount();
                ?>
            </div>

            
        </div>  
</div>

<div class="footer"><a href="logout.php">Logout</a></div>
</section>



</body>
</html>