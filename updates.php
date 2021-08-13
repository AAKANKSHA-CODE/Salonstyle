<?php

if(isset($_POST['submit']))
{
  header('Location:details1.php');
} 
?>
<!DOCTYPE html>

<head>

    <title>Update</title>
    <link rel="stylesheet" href="css\registration.css">
    <style>
        header {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url("images/registration.jfif");
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
            <h1>Update Here</h1>
            <form action="" class="regi" style="margin-top:20px;" method="POST">

            <?php 
include 'connection.php';
$ids=$_GET['id'];
$showquery="SELECT * FROM registrationtable where id={$ids}";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);
if(isset($_POST['submit']))
{
 
    $idupdate=$_GET['id'];
    $fn=$_POST['fname'];
    $ls=$_POST['lname'];
   $ag=$_POST['age'];
     $gn=$_POST['gender'];
     $ph=$_POST['phone'];
    $em=$_POST['email'];
    $ps=$_POST['password'];
     $dt=$_POST['dat'];
     $ti=$_POST['tim'];
   $query = "UPDATE registrationtable SET id=$ids,FirstName='$fn',LastName='$ls',Age='$ag',Gender='$gn',Contact='$ph',Email='$em',Pass='$ps',Dat='$dt',Tim='$ti' WHERE id=$idupdate";
  $res=mysqli_query($con,$query);
   if($res)
  {
        ?>
        <script>alert('data updated successfully Added')</script>
        <?php
  }
    else 
    {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
  }
    
}
?>



<!--  <label>First name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="d" type="text" name="fname" id="fname" placeholder="Enter your first name" >
                <br>
                <br>

                <label>Last name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="d" type="text" name="lname" id="lname" placeholder="Enter your last name" >
                <br>
                <br>

                <label>Age:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d"  type="number" name="age" id="age" placeholder="Enter your age" d>
                <br>
                <br>

                <label>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="ak" > <input type="radio" name="gender" id="gender" value="Male" > Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  type="radio" name="gender" id="gender" value="Female" >Female
                </label>
    </span>
                <br>
                <br>

                <label>Contact number:</label>&nbsp;&nbsp;&nbsp;
                <input  class="d" type="text" name="phone" id="contactno" placeholder="Enter your contact number" d>
                <br>
                <br>

                <label>Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="email" name="email" id="email" placeholder="Enter your email id" >
                <br>
                <br>
                 
                <label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d"  type="password" name="password" id="password" placeholder="Enter your email id">
                <br>
                <br>

                <label>Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="date" name="dat" id="date" >
                <br>
                <br>

                <label>Time:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="time" name="tim" id="time" >
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
-->
 <label>First name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="d" type="text" name="fname" id="fname" value="<?php echo $arrdata['FirstName'];?>" placeholder="Enter your first name" >
                <br>
                <br>

                <label>Last name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="d" type="text" name="lname" id="lname" value="<?php echo $arrdata['LastName'];?>" placeholder="Enter your last name" >
                <br>
                <br>

                <label>Age:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d"  type="number" name="age" id="age" value="<?php echo $arrdata['Age'];?>" placeholder="Enter your age" d>
                <br>
                <br>

                <label>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="ak" > <input type="radio" name="gender" id="gender" value="Male" required
                <?php
                if($arrdata['Gender']=="Male")
                {
                  echo "checked";
                }
                
                ?>
                > Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  type="radio" name="gender" id="gender" value="Female" required
                <?php
                if($arrdata['Gender']=="Female")
                {
                  echo "checked";
                }
                
                ?>
                >Female
    </span>
                <br>
                <br>

                <label>Contact number:</label>&nbsp;
                <input  class="d" type="text" name="phone" id="contactno" value="<?php echo $arrdata['Contact'];?>" placeholder="Enter your contact number">
                <br>
                <br>

                <label>Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="email" name="email" id="email" value="<?php echo $arrdata['Email'];?>" placeholder="Enter your email id" >
                <br>
                <br>
                 
                <label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d"  type="password" name="password" id="password" value="<?php echo $arrdata['Pass'];?>" placeholder="Enter your password">
                <br>
                <br>

                <label>Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="date" name="dat" value="<?php echo $arrdata['Dat'];?>" id="date" >
                <br>
                <br>

                <label>Time:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="d" type="time" name="tim" value="<?php echo $arrdata['Tim'];?>" id="time" >
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="margin-top:15px;" type="submit" id="submit"  name="submit" value="update">
               
        
            </form>
           
        </div>
    </div>
    </header>
</body>

</html>
