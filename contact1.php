
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
     <style>
        header {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url("images/contact.jfif");
        } 
    </style>
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/ncontact.css">

</head>

<body>
    <header>

     <div class="header_menu">
            <div class="logo">
                <img src="images/logo.jfif" alt="logo">
            </div>
            <div class="menu_list">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about1.php">About</a></li>
                    <li><a href="gallery1.php">Gallery</a></li>
                    <li><a href="registration1.php">Registration</a></li>
                    <li><a href="details1.php">Details</a></li>
                
                    <li><a href="contact1.php">contact us</a></li>
                </ul>
            </div>
        </div>
       
        <section>
     <div class="container">
          <div class="contactinfo">
                <div>
                    <h1>Contact Information</h1>
                    <ul class="info">
                        <li>
                            <span><img src="images\address.png"></span>
                            <span>A-Block,Boring Road<br>Patna-800012,Bihar</span>
                        </li>
                        <li>
                            <span><img src="images\mail.jfif"></span>
                            <span>kumari01aakanksha@gmail.com</span>
                        </li>
                        <li>
                            <span><img src="images\call.jfif"></span>
                            <span>+91-9876543210</span>
                        </li>
                    </ul>
                </div>
            </div>
            <form  method="POST">
            <div class="contact-form">
          
                <h1>Send a Message</h1>
                <div class="formbox">
                    <div class="inputbox w50">
                        <span>First Name*</span><br><br>
                        <input type="text" name="fname" required>

                    </div>
                    <div class="inputbox w50">
                        <span>Last Name*</span><br><br>
                        <input type="text" name="lname" required>

                    </div>
                    <div class="inputbox w50">
                        <span>Email*</span><br><br>
                        <input type="email" name="mail" required>

                    </div>
                    <div class="inputbox w50">
                        <span>Mobile number*</span><br><br>
                        <input type="number" name="mob" required>

                    </div>
                    <div class="inputbox w100">
                        <span>Write your message*</span><br><br>
                        <textarea name="msg" required></textarea>

                    </div>
                    <div class="inputbox w100">

                        <input type="submit" name="submit" value="submit">

                    </div>

                </div>
         </div>
            </form>
        </div>

<section>
</body>

</html>


<?php 
include 'connection.php';

if(isset($_POST['submit']))
{
    $fn=$_POST['fname'];
    $ls=$_POST['lname'];
    $em=$_POST['mail'];
     $ph=$_POST['mob'];
    $mg=$_POST['msg'];
    
    $query = "INSERT INTO contactus(FirstName,LastName,Email,Mobile,Mesage) VALUES ('".$fn."','".$ls."','".$em."','".$ph."','".$mg."')";
  
   if(mysqli_query($con, $query))
  {
        ?>
<script>
    alert('Message Sent');
</script>
<?php
  }
    else 
    {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
  }
    
}
?>




        /*
    </header>
</body>

</html>*/