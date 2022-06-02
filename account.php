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

<?php include('includes/mininav.php') ?>



<!----->
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

$db->close();

      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <p> <strong>Full name : </strong><?php echo $rows['fullname'];?><br></p>
          <p>   <strong>Username : </strong><?php echo $rows['username'];?><br></p>
          <p>   <strong>email : </strong><?php echo $rows['email'];?><br></p>
          <p>   <strong>date of birth : </strong><?php echo $rows['dob'];?><br></p>

          <p>   <strong>County : </strong><?php echo $rows['county'];?><br></p>
          <p>   <strong>bloodtype : </strong><?php echo $rows['bloodtype'];?><br></p>
          <p>   <strong>weight : </strong><?php echo $rows['weight'];?><br></p>
          <p>   <strong>height: </strong><?php echo $rows['height'];?><br></p>


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