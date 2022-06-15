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

<?php
$hospital = $_POST['varname'];
echo $hospital;
?>
     <div>








      </div>
   </div>


   <div class="left"> 


</div>
</div>
  

<iframe src="https://www.google.com/maps/d/embed?mid=1euE8PzconXhsr0x9IgpnLgqruP9jSNg&ehbc=2E312F" width="100%" height="480"></iframe>
<?php include('../includes/footer.php') ?>
</body>
</html>