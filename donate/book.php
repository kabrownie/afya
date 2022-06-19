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

 


   <div class="book"> 
<h1>
    <p><img class="profile" src= "/image/drop.png" ></h1><h1> Afya Blood Donation</h1>

  
<h2 style='text-align:center' > <?php
$hospital = $_POST['varname'];
echo $hospital;

?></h2>

<h2 style='text-align:center' ><i> Blood donation apointment booking form </i> <br>
</h2>
<br>

orem400
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus aspernatur consectetur corporis ullam neque iusto ipsum minima architecto dolorum illum, quidem repudiandae labore excepturi asperiores velit nihil sit nobis. Exercitationem!

</div>
</div>
  
<h4 style='text-align:center'>Dont know the direction to the center? Dont worry, The map below will help </h4> 

<iframe src="https://www.google.com/maps/d/embed?mid=1euE8PzconXhsr0x9IgpnLgqruP9jSNg&ehbc=2E312F" width="100%" height="480"></iframe>
<?php include('../includes/footer.php') ?>
</body>
</html>