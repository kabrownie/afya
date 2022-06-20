<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Afya Blood Donation</title>
</head>
<body>
<!-- navbar -->
<?php include('includes/navbarin.php')?>
<?php include('includes/conn.php') ?>



<!----->
<!----->
<?php
  session_start();


?>

    
<!----->


<div class="user">

   <div class="left">
        <h3>profile</h3>
       <!-- logged in user information -->
      <?php  if (isset($_SESSION['username'])) : ?>
    <p><img class="profile" src= "/image/drop.png" ><br>
    <strong>Welcome  <?php echo $_SESSION['username']; ?></strong></p>
    <strong><?php echo $_SESSION['password']; ?></strong></p>
    <?php endif ?>
    
    <p>One point of blood can save Three live</p>
   <div>
        <h3>
            Recommended Diet
        
        </h3>
        <h4>Before Donating</h4>
        <ul>
            <li>Meats,likebeef, lamb, ham, pork, veal, and dried beef.</li>
            <li>Poultry, such as chicken and turkey.</li>
            <li> and shellfish, like tuna, shrimp, clams, haddock, and mackerel.</li>
            <li>Organs, such as liver.</li>
            <li>Eggs</li>
            
        </ul>
        <h4>After Donation</h4>
         <ul>
            <li>
                Eat Iron-rich foods
            </li>
            <li>
                Eat foods rich in Vitamin C
            </li>
            <li>
                Drink plenty of water
            </li>
         </ul>
   </div>

   </div>
  
    <div class="right"> 
      <div> 



   <!-- try -->
   <?php
$id =  $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$id'";

$result = $db->query($sql);



      // LOOP TILL END OF DATA
                while($row=$result->fetch_assoc())
               $home = $row['county'];
                {?>

        <a href="donate/donate.php?id=<?=$home?>" >
            <img src="../image/donate.png"  height="150px"><br>
            Donate now</a></a>
                
                  <?php
                }
             ?>

             <!-- end try -->


       
     </div>
     <div>
        <a href="#">
        <img src="../image/calender.jpg" height="150px"><br>
            My Appointments</a> 
      
      </div>
     <div> 
     <a href="account.php">
     <img src="../image/account.png" height="150px"><br>
         Account
     </a>
     
     </div>
    </div>
</div>
    
<?php include('includes/footer.php') ?>
</body>
</html>