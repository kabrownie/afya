



<!-- Source code for handling registration and login -->
<?php include('checklogin.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Login | Afya bood donation system</title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>

<!-- navbar -->
<?php include('../includes/navbar.php') ?>
<!--register-->
    
        <div class="content">
<h2>Login</h2>


<form method="post" action="login.php">
<?php include('../includes/errors.php') ?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>
<div class="input-group">
<button type="submit" class="btn" name="login_user">Login </button>
</div>
<p>
Don't have an afya donors account? <a href="presignup.php">Sign Up</a>
</p>
</form>
    </div>
<?php include('../includes/footer.php') ?>

</body>
</html>