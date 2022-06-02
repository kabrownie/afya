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

<div class="left">
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








            <?php
                }
             ?>

<?php  
// update
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array();

    include('../includes/conn.php'); 
  

    if (isset($_POST['update'])) {
 $fullname =  mysqli_real_escape_string($db,$_POST['fullname']);  
 $username =  mysqli_real_escape_string($db, $_POST['username']);  
  $email =  mysqli_real_escape_string($db,$_POST['email']);  
 $county =  mysqli_real_escape_string($db,$_POST['county']);
 $password_1 =  mysqli_real_escape_string($db, $_POST['password_1']);  
 $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 
 $password_3 = mysqli_real_escape_string($db, $_POST['password_3']); 


 
$id =  $_SESSION['username'];
$select = "SELECT * FROM users WHERE username='$id'";   
$sql1 = mysqli_query($db, $select);  

      $_SESSION['success'] = "You are now logged in";
header('location: success.php');}

       

    
    // ...
?>

</div>
<!-- update -->


  <div class="left">
  <h2>Update Account</h2>
<form method="post" action="register.php">  
<?php include('../includes/errors.php') ?>
<div class="input-group">

<label>Full names</label>
<input type="text" name="fullname" >
<div class="input-group">

<div class="input-group">
<label>User name</label>
<input type="text" name="username" value="<?php echo $username; ?>">
</div>

<div class="input-group">
<label>Email</label>
<input type="email" name="email" value="<?php echo $email; ?>">
</div>


<p> Select the county you reside in</p>
<label>county</label>

<select name="county" class="county">  
<option value=""></option>
  <option value="Nyeri"> Nyeri</option>
  <option value="Kiambu ">Kiambu</option>
  <option value="Kirinyaga">Kirinyaga</option>
  <option value=" Muran'ga">Muran'ga</option>
  <option value="Nyandarua"> Nyandarua</option>


</select>
<div class="input-group">
<label>Old password</label>
<input type="password" name="password_2">
</div>
<div class="input-group">
<label> New Password</label>
<input type="password" name="password_1">
</div>
<div class="input-group">
<label>Confirm new password</label>
<input type="password" name="password_2">
</div>

<div class="input-group">
<button type="submit" class="btn" name="update">Update</button>
</div>
</form>
</div>
</div>
</div>
</div>
  
<?php include('includes/footer.php') ?>
</body>
</html>