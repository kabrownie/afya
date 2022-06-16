<?php include('conn.php');
 session_start();?>



<div class ="mininav">
<a href="../main.php">Main</a>



   <!-- try -->
   <?php
$id =  $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$id'";

$result = $db->query($sql);



      // LOOP TILL END OF DATA
                while($row=$result->fetch_assoc())
               $home = $row['county'];
                {?>

        <a href="../donate/donate.php?id=<?=$home?>" >
            Donate now</a></a>
                
                  <?php
                }
             ?>

             <!-- end try -->

  <a href="../appointment.php">My Appointments</a>
<a href="../account.php">Account</a></div>
