

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
            
         <input type="password" required name="old_pass" placeholder="Old Password">

         <label>New password   <star style="color:red" > * </star></label>

         <input type="password" required name="new_pass" placeholder="New Password.">

         <label>RE type new password   <star style="color:red" > * </star></label>

         <input type="password" required name="re_pass" placeholder="Re-Type New Password">


<div class="input-group">
<button type="submit" class="btn" name="re_password">Change password</button>
</div></div>
</form>
      </html>


      
      <?php
      if(isset($_POST['update'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $county = $_POST['county'];



 
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
 
if (isset($_POST['re_password']))
{

  session_start();
  $id=$_SESSION['username'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$re_pass = $_POST['re_pass'];

$password= $row['password'];
$password = md5($password);



$password_query =mysqli_query($db,"SELECT * FROM users where username='$id'");

$password_row = mysqli_fetch_array($password_query);
$password = $password_row['password'];
if ($password == $old_pass)
{
if ($new_pass == $re_pass)
{
  $new_pass = md5($new_pass);

$update_pwd = mysqli_query ($db,"update users set password='$new_pass' where id='$id'");
echo "<script>alert('Update Sucessfully'); window.location='account.php'</script>";
}
  else
{
echo "<script>alert('Your new and Retype Password is not match'); window.location='update.php'</script>";
}
}
}
 
?>