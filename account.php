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
<!-- na  <?php include('includes/navbarin.php')?>


<?php include('includes/mininav.php') ?>




<!----->
<?php
  session_start();
   include('includes/conn.php') ?>

    
<!----->
<div class="user">

<div class="left" style=" margin-left:30%; margin-right:30%">
        <h3>profile</h3>
       <!-- logged in user information -->
      <?php  if (isset($_SESSION['username'])) : ?>
    <p><img class="profile" src= "/image/drop.png" ><br>
    <strong>Hello <?php echo $_SESSION['username']; ?></strong></p>
    <strong><?php echo $_SESSION['password']; ?></strong></p>
    <?php endif ?>
    
    <p>One point of blood can save Three live</p>




        <h3>profile Details</h3>
        <?php
$id =  $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$id'";

$result = $db->query($sql);



      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <p> <strong>Full name : </strong><?php echo $rows['fullname'];?><br></p>
          <p>   <strong>Username : </strong><?php echo $rows['username'];?><br></p>
          <p>   <strong>Email : </strong><?php echo $rows['email'];?><br></p>
          <p>   <strong>Date of birth : </strong><?php echo $rows['dob'];?><br></p>

          <p>   <strong>County : </strong><?php echo $rows['county'];?><br></p>
          <p>   <strong>Gender : </strong><?php echo $rows['gender'];?><br></p>

          <p>   <strong>Eloodtype : </strong><?php echo $rows['bloodtype'];?><br></p>
          <p>   <strong>Weight : </strong><?php echo $rows['weight'];?><br></p>
          <p>   <strong>Height: </strong><?php echo $rows['height'];?><br></p>


<br>
<br>
<br>
<br>




          <div class = bodylink><a href="update.php" >Edit Profile</a></div>



            <?php


                }
             ?>

</div>
</div>
</div>
  
<?php include('includes/footer.php') ?>
</body>
</html>