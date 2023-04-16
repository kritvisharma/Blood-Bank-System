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
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
</head>
<body>



    <section>
   
    <form action="" method="post">

    <div><img src="image/logo-no-background.png" class="logo-icon"></div>
    <div class="form-box">
        <div class="form- value">    
                
            <h2>Login</h2>

            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="email" required name="un">
                <label for="">Email </label>
            </div>

            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="Password" required name="ps">
                <label for="">Password </label>
            </div>

            <div class="forget">
                <label for=""><input type="checkbox">Keep Me Signed In 
                <br><br><a href="#">Forgot Password?</a></label>
                
            </div>

            <div class="login">
                <label for=""><input type="submit" name="sub" value="Login"></label>
            </div>

            <div class="register">
                <p>Don't Have an Account?<a href="#"> Register</a></p>
            </div>

        </div>
  
    </div>
    <form>  
    </section>

    <?php

    if (isset($_POST['sub'])) {
        $email = $_POST['un'];
        $password = $_POST['ps'];
    
        
        $q = $db->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
        $q->execute([$email, $password]);
        $res = $q->fetchAll(PDO::FETCH_OBJ);
    
        if ($res) {
            $_SESSION['un']=$email;
            header("Location: admin-home.php");
            exit; 
        } 
        
        else {
            echo "<script>alert('Wrong User')</script>";
        }
    }
    
    
    ?>

    

    
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>