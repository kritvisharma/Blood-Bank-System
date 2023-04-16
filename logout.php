<?php
session_start();
$email=$_SESSION['un'];
unset($email);

header('Location:index.php');
?>