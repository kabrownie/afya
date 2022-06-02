

<!-- Source code for handling registration and login -->
<?php  include('checkregister.php'); ?>

<head>
<title>Register | Afya bood donation system</title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>

<!--register-->
        
<?php include('../includes/navbar.php') ?>

    
        <div class="content">
    
<h2>Register</h2>


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

<label>Date Of Birth</label>
<input type="date" name="dob" >
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
<label>Password</label>
<input type="password" name="password_1">
</div>
<div class="input-group">
<label>Confirm password</label>
<input type="password" name="password_2">
</div>

<div class="input-group">
<button type="submit" class="btn" name="reg_user">Register</button>
</div>
<p>
Already have an afya donors account? <a href="login.php">Sign in</a>
</p>
</form>
    </div></div>
<?php include('../includes/footer.php') ?>
</body>


</html>