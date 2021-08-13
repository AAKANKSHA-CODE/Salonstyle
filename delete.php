<?php
include 'connection.php';
$ids=$_GET['id'];
$deletequery="delete from registrationtable where id=$ids";
$query=mysqli_query($con,$deletequery);

if($query)
{

?>
<script>
    alert("row deleted successfully");
    </script>
    <?php }
    else
    {?>
     <script>
    alert("row not deleted successfully");
    </script>
    <?php
    }
header('location:details1.php');
?>
