
<?php include('checkupdate.php') ?>
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

</div>
<!-- update -->


  <div class="content">
  <h2>Update Account</h2>
<form method="post" action="update.php">  
<?php include('../includes/errors.php') ?>
<div class="input-group">

<label>Full names</label>
<input type="text" name="fullname1" >
<div class="input-group">

<div class="input-group">
<label>User name</label>
<input type="text" name="username1" value="<?php echo $username1; ?>">
</div>

<div class="input-group">
<label>Email</label>
<input type="email" name="email1" value="<?php echo $email1; ?>">
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
<!-- 
<div class="input-group">
<label>Old password</label>
<input type="password" name="password_1">
</div>
<div class="input-group">
<label> New Password</label>
<input type="password" name="password_2">
</div>
<div class="input-group">
<label>Confirm new password</label>
<input type="password" name="password_3">
</div> -->

<div class="input-group">
<button type="submit" class="btn" name="edit">Update</button>
</div>
</form>
</div>
</div>
</div>
<div class="error " style="margin:50px;">

    <h1 >Danger Zone</h1><br>
    <h3> The button below deletes your account forever.
        <br> The action cannot be undone
    </h3>

<button type="submit" class="btn" name="delete">Delete Account</button>
</div>

  
<?php include('includes/footer.php') ?>
</body>
</html>


