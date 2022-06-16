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
You can only view donors centers in your current county: <i> <b><?php echo $rows['county'];?><br ></b></i></p>
<h4>
 If you have relocated to another county, you can change your location in the <b>
  <a href="../update.php" style='color:blue'> Update </a> </b> page</h4>


                  <?php
                }
             ?>



      </div>
   </div>


   <div class="left"> 
 <?php 
   if(!isset($_GET['id']))
   die('no info');
   else{
      $home = $_GET['id'];
      echo $home;
   }   ?>
   <h3>
            Donor Centers
        </h3>
   <h4>     The following are The Available Donor Centers in  <?php echo $home;?></h4>

  

   <?php
$sql = "SELECT * FROM Hospitals WHERE County = '$home'";

$result = $db->query($sql);



      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>

               

      <div class="hospitals">
      <form method="post" action="book.php">
<!-- save variable to be used in another page -->
   <input type="hidden" name="varname" value=" <?php echo $rows['HospitalName']; ?>"><p> <strong>
<button type="submit" class="btn1"  > <?php echo $rows['HospitalName']; ?></button>
</form>      
</strong><br></p> 

<!-- waah -->

      

      
      <?php echo $rows['address']; ?><br>
     TEL: 0<?php echo $rows['phone']; ?><br>



    </div><hr>
            <?php 
                }
              

             ?>


</div>
</div>
<h4 style='text-align:center'>Dont know the direction to the center? Dont worry, The map below will help </h4> 

<iframe src="https://www.google.com/maps/d/embed?mid=1euE8PzconXhsr0x9IgpnLgqruP9jSNg&ehbc=2E312F" width="100%" height="480"></iframe>
<?php include('../includes/footer.php') ?>
</body>
</html>