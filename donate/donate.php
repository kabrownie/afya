<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Afya Blood Donation</title>
</head>
<body>   <?php include('../includes/navbarin.php')?>




<!----->
<!----->

<?php include('../includes/mininav.php') ?>
<?php include('../includes/conn.php') ?>


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
    <strong>Hello  <?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
    <p>One point of blood can save Three live</p>
     <div>
        <?php
$id =  $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$id'";

$result = $db->query($sql);



      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {?>
                <p>Find Donation centers near you :) </p>


<p>  Click your county <br>You currently stay at County : <strong> <?php echo $rows['county'];?><br ></strong></p>
                  <?php
                }
             ?>



<div class = bodylink style="min-width:200px; min-height:50px; margin: 5px;"><a href="Nyeri.php" >Nyeri</a></div>
<div class = bodylink style="min-width:200px; min-height:50px; margin: 5px;"><a href="Kirinyaga.php" >Kirinyaga</a></div>
<div class = bodylink style="min-width:200px; min-height:50px; margin: 5px;"><a href="Kiambu.php" >Kiambu</a></div>
<div class = bodylink style="min-width:200px; min-height:50px; margin: 5px;"><a href="Nyandarua.php" >Nyandarua</a></div>
<div class = bodylink style="min-width:200px; min-height:50px; margin: 5px;"><a href="Muranga.php" >Muranga</a></div>






      </div>
   </div>


   <div class="left"> 

   <h3>
            Donor Centers
        </h3>
   <h4>     select county and available donor centers will display here :)</h4>

   <div class="hospitals"><a  href="Nyeri.php" >Nyeri </a></div><hr>
   <div class="hospitals"><a  href="Kirinyaga.php" >Kirinyaga </a></div><hr>
   <div class="hospitals"><a   href="Kiambu.php" >Kiambu </a></div><hr>
   <div class="hospitals"><a href="Nyandarua.php" >Nyandarua </a></div><hr>
   <div class="hospitals"><a  href="Muranga.php" >Muranga </a></div><hr>




</div>
</div>
  

<iframe src="https://www.google.com/maps/d/embed?mid=1euE8PzconXhsr0x9IgpnLgqruP9jSNg&ehbc=2E312F" width="100%" height="480"></iframe>
<?php include('../includes/footer.php') ?>
</body>
</html>