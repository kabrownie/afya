

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
<star style="color:red" > * </star> required
    
<h2>Register</h2>


<form method="post" action="register.php">
<?php include('../includes/errors.php') ?>
<div class="input-group">

<label>Full names  <star style="color:red" > * </star>(real names)</label>
<input type="text" name="fullname"  placeholder="fullname" >
<div class="input-group">
<hr>
<div class="input-group">
<label>User name <star style="color:red" > * </star></label>
<input type="text" name="username"  placeholder="Username" value="<?php echo $username; ?>">
</div>
<hr>
<div class="input-group">
<label>Email <star style="color:red" > * </star></label>
<input type="email" name="email"  placeholder="email" value="<?php echo $email; ?>">
</div>
<hr>
<label>Date Of Birth <star style="color:red" > * </star></label>
<input type="date" name="dob"   >
</div><hr>
<p> Select the county you reside in</p>
<label>county <star style="color:red" > * </star></label>
<select name="county" class="county"  placeholder="county">  
<option value=""></option>
  <option value="Nyeri"> Nyeri</option>
  <option value="Kiambu ">Kiambu</option>
  <option value="Kirinyaga">Kirinyaga</option>
  <option value="Muranga">Muranga</option>
  <option value="Nyandarua"> Nyandarua</option>


</select>
<hr>
<div class="input-group">
<label>Gender <star style="color:red" > * </star></label>
   <p> <input type="radio" name="gender"value="male"  >Male</radio></p>
   <p> <input type="radio" name="gender"value="female" >Female</radio></p>
</div>
<hr>

<div class="input-group">
<label>Password  <star style="color:red" > * </star></label>
<input type="password" name="password_1"  placeholder="password">
</div><hr>
<div class="input-group">
<label>Confirm password  <star style="color:red" > * </star></label>
<input type="password" name="password_2"  placeholder="confirm password">
</div>
<hr>
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