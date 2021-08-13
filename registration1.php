<!-- //
 //session_start();
 // -->
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        header {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url("images/registration.jpg");
        }
    </style>
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/registration.css">

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
        <div class="main">
        <div class="regis">
            <h1>Register Here</h1>
            <form class="regi" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                <label>First name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="d" type="text" name="fname" id="fname" placeholder="Enter your first name" required>
                <br>
                <br>

                <label>Last name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="d" type="text" name="lname" id="lname" placeholder="Enter your last name" required>
                <br>
                <br>

                <label>Age:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d"  type="number" name="age" id="age" placeholder="Enter your age" required>
                <br>
                <br>

                <label>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="ak" > <input type="radio" name="gender" id="gender" value="Male" required> Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  type="radio" name="gender" id="gender" value="Female" required>Female
                </label>
    </span>
                <br>
                <br>

                <label>Contact number:</label>&nbsp;&nbsp;&nbsp;
                <input  class="d" type="text" name="phone" id="contactno" placeholder="Enter your contact number" required>
                <br>
                <br>

                <label>Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="email" name="email" id="email" placeholder="Enter your email id" required>
                <br>
                <br>
                 
                <label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d"  type="password" name="password" id="password" placeholder="Enter your password" required>
                <br>
                <br>

                <label>Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="date" name="dat" id="date" required>
                <br>
                <br>

                <label>Time:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="time" name="tim" id="time" required>
                <br>
                <br>

                <br>
                <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  type="submit" id="submit"  name="submit" value="submit">
               
        
            </form>
           
        </div>
    </div>
</body>

</html>

<?php 
include 'connection.php';

  if(isset($_POST['submit']))
  {
     $fn=$_POST['fname'];
     $ls=$_POST['lname'];
     $ag=$_POST['age'];
     $gn=$_POST['gender'];
     $ph=$_POST['phone'];
     $em=mysqli_real_escape_string($con,$_POST['email']);
     $ps=mysqli_real_escape_string($con,$_POST['password']);
     $dt=$_POST['dat'];
     $ti=$_POST['tim'];

     /*check mail alredy exist*/
    
     $pse=password_hash($ps,PASSWORD_BCRYPT);    
    $emailquery = "select *from registrationtable where Email='$em'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);
      if($emailcount>0)
      {
        ?>
        echo '<script type="text/javascript">
              alert("email already exist");
         </script>'
        <?php
       }
       $query = "INSERT INTO registrationtable(FirstName,LastName,Age,Gender,Contact,Email,Pass,Dat,Tim) VALUES ('".$fn."','".$ls."','".$ag."','".$gn."','".$ph."','".$em."','".$pse."','".$dt."','".$ti."')";
  
       if(mysqli_query($con, $query))
      {
            ?>
            <!-- <script>alert('successfully Added')</script> --> -->
            <!-- <script>alert("'.$fn.'");</script> -->
            <!-- echo "<script type="text/javascript">alert("your name'.$fn.);</script>; -->
            <script>alert("<?php echo "Congrats ",$fn; ?>")</script>
            <?php
      }
        else 
        {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
      }
      
        
  }
    ?>



    </header>
</body>

</html>