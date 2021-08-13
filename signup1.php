 <?php
 session_start();
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    
<?php 
include 'connection.php';

//    if(isset($_POST['register']))
//    {
//        header('location:registration1.php');
//    }exit(0);
 if(isset($_POST['submit']))
{
    $em=$_POST['mail'];
    $ps=$_POST['pass'];

    $email_search="select *from registrationtable where Email='$em'";
    $query=mysqli_query($con,$email_search);
    $email_count=mysqli_num_rows($query);
    if($email_count)
    {
         $email_pass=mysqli_fetch_assoc($query);
         $dbpass=$email_pass['Pass'];
         $passcheck=password_verify($ps,$dbpass);
         if($passcheck)
         {
        
                $_SESSION['login_user']=$em; 
            
               if(isset( $_SESSION['login_user'])) {
                header("location: details1.php?log=".$_SESSION['login_user']);
               } exit(0);
               
            } 
             
            
        
         }
         else
         {?>
            <script>
            alert('enter correct password');
        </script>
        <?php }
         
   
}
?>

    <div class="wrap">
        <h1>
            Sign Up Here
        </h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <label>Email</label>
            <br>
            <input type="email" name="mail" placeholder="Enter your email id" required>
            <br> <br>
            <label>Password</label>
            <br>
            <input type="password" name="pass" placeholder="Enter your password" required> <br> <br>
            <input type="submit" name="submit" value="Log in">
           
        </form>
        <a href="registration1.php"><input type="submit" name="register" value="Register"></a>
        
    </div>
</body>

</html>
