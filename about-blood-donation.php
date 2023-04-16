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
    <title>About Blood Donation</title>
    <link rel="stylesheet" type="text/css" href="about-blood-donation.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>


<body>
<section>

<div class="logo"><a href="admin-home.php"><img src="image/logo-no-background.png" class="logo-icon"></a></div>

<div class="heading"><p>Why Donate Blood?</p></div>

<div class = "flex-box">

    <div class="elements"><p class="points">The most precious gift that one can give to another person is the gift of life i.e. blood. It is the essence of life. Your blood saves more than one life when it is separated into its components (red blood cells, plasma etc). Blood is needed regularlytients with diseases such as thalassemia and hemophilia, and alsoe treatment of injuries after an accident, major surgeries, anemia, etc.    
    <p><img src="image\190613-donating-blood-cs-406p.jpg" class="image"></div>

    <div class="elements"><img src="image\Benefits-of-blood-donation.jpg" class="image1"><p class="points">Did you know that people who donate blood are 88% less likely to suffer a heart attack and 33% less likely to acquire any type of cardiovascular disease. When you donate blood, it removes 225 to 250 milligrams of iron from your body, hence reducing the risk of heart disease. Blood Center performs numerous tests on the donated blood. Therefore regular blood donation helps in sheilding you from serious diseases.
    </p></div>

    <div class="elements"><p class="points">One unit of donated blood can save up to three lives.You can donate blood every three months. It only takes 48 hoursur body fluids to be completely replenished. Scientists have estimated the volume of blood in the human body to be eight percent of body weight. There are 100,000 miles of blood vessels in an adult human body. A red blood cell can make a complete circuit of your body in 30 seconds. White blood cells make up about 1% of your blood.
    </p><img src="image\Blood_Donation-732X549-thumbnail.webp" class="image2"></div>

    <div class="elements"><img src="image\blood-donation-gd071f3ded_1920_1655893247578_1655893271863.png" class="image3"><p class="points">According to a 2012 World Health Organisation (WHO) report, only nine million units are collected annually, while the need is million units.Delhi NCR alone faces a shortage of 100,000 units per year. The shelf-life of donated blood is 35 to 42 days. There is a constant need to replenish stocks in our blood banks. Healthy donors are between the age of 18 to 65 years.
    </p></div>

</div>
<br><br><br><br>

<div class="login">
    <label for=""><a href="donor-reg.php"><input type="submit" name="sub" value="Donate Now!"></a></label>
</div>
        <br>

<div class="footer"><a href=logout.php>Logout</a></div>
<br><br>
</section>


</body>
</html>