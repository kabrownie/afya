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
<div class="navbar">
<div class="logo_div">

<a href="main.php"><h1><img src= "/image/drop.png" >Afya Blood Donation System</h1></a>
</div>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#where">Where to donate</a></li>
  <li><a href="#why">Why donate</a></li>
  <li><a href="#who">Who can donate</a></li>
  <li><a href="#about">About us</a></li>
  <li><a href="../registration/logout.php">logout</a></li>


</ul>
</div>



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
    <strong><?php echo $_SESSION['username']; ?></strong></p>
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
        <a href="donate.php">
            <img src="image/donate.png"  height="150px"><br>
            Donate now</a>
       
     </div>
     <div>
        <a href="#">
        <img src="image/calender.jpg" height="150px"><br>
            My Appointments</a> 
      
      </div>
     <div> 
     <a href="account.php">
     <img src="image/account.png" height="150px"><br>
         Account
     </a>
     
     </div>
    </div>
</div>
    
<?php include('includes/footer.php') ?>
</body>
</html>