

<!-- Source code for handling registration and login -->
<?php  include('checkregister.php'); ?>

<head>
<title>update | Afya bood donation system</title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
  <?php include('includes/navbarin.php')?>
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
            <label>Email</label>
            <input type="text"  name="email" required value="<?php echo $row['email']; ?>" />

            <label>county</label>
<select name="county" class="county">  
<option value="<?php echo $row['county']; ?>"><?php echo $row['county']; ?></option>
  <option value="Nyeri"> Nyeri</option>
  <option value="Kiambu ">Kiambu</option>
  <option value="Kirinyaga">Kirinyaga</option>
  <option value="Muranga">Muran'ga</option>
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
            <label>Old password   <star style="color:red" > * </star></label>
            
         <input type="password" name="password" placeholder="Old Password">

         <label>New password   <star style="color:red" > * </star></label>

         <input type="password" name="password_1" placeholder="New Password.">

         <label>confirm new password   <star style="color:red" > * </star></label>

         <input type="password" name="password_2" placeholder="Re-Type New Password">


<div class="input-group">
<button type="submit" class="btn" name="re_password">Change password</button>
</div></div>
</form>
      </html>

      
      <?php
      if(isset($_POST['update'])){
        $fullname =  mysqli_real_escape_string($db, $_POST['fullname']);
        $username =  mysqli_real_escape_string($db, $_POST['username']);
        $email =  mysqli_real_escape_string($db, $_POST['email']);
        $county =  mysqli_real_escape_string($db,$_POST['county']);



 
      $query = "UPDATE users SET fullname = '$fullname', email = '$email', county= '$county'
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

<!-- re pass -->
<?php

if(isset($_POST['re_password'])){


  $password =  mysqli_real_escape_string($db, $_POST['password']);  
  $password_1 =  mysqli_real_escape_string($db, $_POST['password_1']);  
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 


   if (empty($password)) {  ?> <star style="color:red" > To reset password, your old password is required <br> </star> <?php ; }
   if (empty($password_1 || $password_2)) {  ?> <star style="color:red" >Your new password cannot be empty <br> </star> <?php ; }

   if ($password_1 != $password_2) {  ?> <star style="color:red" >The confirm password does not match with your new password <br> </star> <?php ; }


   $password = md5($password);
   $query = "SELECT * FROM users WHERE username='$id' AND password='$password'";

   $result=mysqli_query($db,$query);
   $row=mysqli_fetch_array($result);
   $active=$row['active'];
   $count=mysqli_num_rows($result);
   if($count==1) {
    ?> <star style="color:red" >pass<br> </star> <?php ;


    
    
   }

}

?>