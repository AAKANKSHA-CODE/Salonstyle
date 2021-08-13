
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/main.css">


    <style>
        header {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url("images/det.jfif")no-repeat;
            background-size:cover;
            background-attachment:fixed;
        }

        
        table{
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%,-50%);
            border-collapse:collapse;
            width:1500px;
            height:200px;
            border:1px solid #bdc3c7;
            box-shadow:2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0.2);
            background-color:yellow;
        }
        tr{
            transition:all .2s ease-in;
            cursor:pointer;
        }
        th,td{
            padding:12px;
            text-align:left;
            border-bottom:1px solid #ddd;
        }
        #header1{
            background-color:#16a085;
            color:#fff;
        }
        h1{
            font-weight:600;
            text-align:center;
            background-color:#16a085;
            margin-top:40px;
            padding:20px 0px;
        }
        tr:hover{
            background: color #f5f5f5;
            transform:scale(1.02);
            box-shadow:2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0.2);
        }
        @media only screen and (max-width:768px)
        {table{
            width:100%;}
        }
        button{
            width:200px;
            height:50px;
            text-decoration:none;
            margin-left:850px;
            margin-top:400px;
            background-color: transparent;
        }
        button:hover
        { background-color:#16a085;}

    </style>
    
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
        <div class="main-div">
        <h1>List of people</h1>
        
                            <table>
                    <thead>
                        <tr id="header1">

                           <th>ID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Pass</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th colspan="2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

include 'connection.php';
include 'session.php';
include 'link.php';
 $showquery="SELECT * FROM registrationtable where email='$user_check' ";
$query=mysqli_query($con,$showquery);

while($res=mysqli_fetch_array($query))
{
?>
<tr>
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['FirstName'];?></td>
    <td><?php echo $res['LastName'];?></td>
    <td><?php echo $res['Age'];?></td>
    <td><?php echo $res['Gender'];?></td>
    <td><?php echo $res['Contact'];?></td>
    <td><?php echo $res['Email'];?></td>
    <td><?php echo $res['Pass'];?></td>
    <td><?php echo $res['Dat'];?></td>
    <td><?php echo $res['Tim'];?></td>
    <td><a href="updates.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a>
    </td>
    <td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>

</tr>

<?php }?>

                    </tbody>

                </table>
                <script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>  
<a style="text-decoration:none;" href="logout.php"><button>LOG OUT</button></a>
<!-- <a href="logout.php"><input type="submit" name="logout" value="LOG OUT"></a> -->
    </header>


</body>

</html>