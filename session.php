<?php
include'connection.php';
session_start();
$user_check = $_SESSION['login_user'];
if(!isset($user_check)){
mysqli_close($con); 
header('Location:signup.php'); 
}
?>