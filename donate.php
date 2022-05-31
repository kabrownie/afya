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
    <?php endif ?>
    <p>One point of blood can save Three live</p>
     <div>
        <h3>
            Donor Centers
        </h3>
        <input type="radio" name="county"value="Kirinyaga"  > Kirinyaga</radio><br>
        <input type="radio" name="county"value="Nyeri"  > Nyeri</radio><br>
        <input type="radio" name="county"value="Kiambu"  > Kiambu</radio><br>
        <input type="radio" name="county"value="Nyandarua"  > Nyandarua</radio><br>
        <input type="radio" name="county"value="Murang'a"  > Murang'a</radio><br>
      </div>
   </div>


   <div class="right"> 
      <div class="hospitals"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure vitae quia quos quidem? Expedita eaque, vero a similique voluptas tenetur id reprehenderit! Alias magnam soluta at laborum nulla? Eos, odit.</div>
      <div class="hospitals"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure vitae quia quos quidem? Expedita eaque, vero a similique voluptas tenetur id reprehenderit! Alias magnam soluta at laborum nulla? Eos, odit.</div>
      <div class="hospitals"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure vitae quia quos quidem? Expedita eaque, vero a similique voluptas tenetur id reprehenderit! Alias magnam soluta at laborum nulla? Eos, odit.</div>
      <div class="hospitals"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure vitae quia quos quidem? Expedita eaque, vero a similique voluptas tenetur id reprehenderit! Alias magnam soluta at laborum nulla? Eos, odit.</div>
      <div class="hospitals"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure vitae quia quos quidem? Expedita eaque, vero a similique voluptas tenetur id reprehenderit! Alias magnam soluta at laborum nulla? Eos, odit.</div>
</div>
</div>
  

<iframe src="https://www.google.com/maps/d/embed?mid=1euE8PzconXhsr0x9IgpnLgqruP9jSNg&ehbc=2E312F" width="100%" height="480"></iframe>
<?php include('includes/footer.php') ?>
</body>
</html>