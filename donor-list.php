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
    <title>Donor List Page</title>
    <link rel="stylesheet" type="text/css" href="donor-list.css"/>
    

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
        <h1>Donor List</h1>
        <div class="form-value">
            <div class="inputbox">Name</div>
            <div class="inputbox">Father's Name</div>
            <div class="inputbox">Address</div>
            <div class="inputbox">City/Region</div>
            <div class="inputbox">Age</div>
            <div class="inputbox">Email</div>
            <div class="inputbox">Mobile No</div>
            <div class="inputbox">Blood Group</div>
            <div class="inputbox">Illness/Medical Requirement?</div>

            <?php
            $q = $db->query("SELECT * FROM donor_registration");
            $results = $q->fetchAll(PDO::FETCH_OBJ);

            foreach ($results as $r1) {
                ?>
                <div class="inputbox1"><?= $r1->name; ?></div>
                <div class="inputbox1"><?= $r1->fname; ?></div>
                <div class="inputbox1"><?= $r1->address; ?></div>
                <div class="inputbox1"><?= $r1->city; ?></div>
                <div class="inputbox1"><?= $r1->age; ?></div>
                <div class="inputbox1"><?= $r1->email; ?></div>
                <div class="inputbox1"><?= $r1->mobile_no; ?></div>
                <div class="inputbox1"><?= $r1->blood_group; ?></div>
                <div class="inputbox1"><?= $r1->illness; ?></div>
                <?php
            }
            ?>
        </div>
    </div>
    <br>
    <div class="footer"><a href="logout.php">Logout</a></div>
    <br><br><br>
</section>


</body>
</html>