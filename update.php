

<!-- Source code for handling registration and login -->
<?php  include('checkregister.php'); ?>

<head>
<title>Register | Afya bood donation system</title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
        
<?php include('includes/navbar.php') ?>
<?php include('includes/mininav.php') ?>

  <?php
  include ('includes/conn.php');
  session_start();
$id=$_SESSION['username'];
$query=mysqli_query($db,"SELECT * FROM users where username='$id'");
$row=mysqli_fetch_array($query);
  ?>

<div class="content" style="float:left; margin-left:10% ">

  <h2>  Update your profile</h2>
<?php include('includes/errors.php') ?>
  


<div class="profile-input-field">
        
        <form method="post" action="#" >
          <div class="input-group">
            <label>Full name</label>
            <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" required />
          </div>
          <div class="input-group">
            <label>Username</label>
            <input type="text"  name="username" required value="<?php echo $row['username']; ?>" />
          </div>

          <div class="input-group">
            <label>Email</label>
            <input type="text"  name="email" required value="<?php echo $row['email']; ?>" />

            <label>county</label>
<select name="county" class="county">  
<option value="<?php echo $row['county']; ?>"><?php echo $row['county']; ?></option>
  <option value="Nyeri"> Nyeri</option>
  <option value="Kiambu ">Kiambu</option>
  <option value="Kirinyaga">Kirinyaga</option>
  <option value=" Muran'ga">Muran'ga</option>
  <option value="Nyandarua"> Nyandarua</option>


</select>
          </div>
          
<div class="input-group">
<button type="submit" class="btn" name="update">Update profile</button>
</div>

</div>
         
          </div>
        </form>
      </div>
<!-- pass -->
<div class="content" style="float:right; margin-right:10%" >
<form method="post" action="update.php">
<?php include('../includes/errors.php') ?>
<h2>Change password

</h2>
<div class="input-group">


  Please input your old password<br><hr>
            <label>Old password</label>
            <input type="password"  name="cur" required value="<?php echo $row['email']; ?>" />


<div class="input-group">
<button type="submit" class="btn" name="update">Change password</button>
</div></div>
</form>
      </html>


      
      <?php
      if(isset($_POST['update'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $county = $_POST['county'];



 
      $query = "UPDATE users SET fullname = '$fullname',
                      username = '$username', email = '$email', county= '$county'
                      WHERE username = '$id'";
                    $result = mysqli_query($db, $query)  or die(mysqli_error($db));
     ?>
                     <script type="text/javascript">
            alert(" Profile Update Successfull.");
            window.location = "account.php";
        </script>

        
        <?php
             }        
?>