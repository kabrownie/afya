<?php  

session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();    
    include('../includes/conn.php');  
    
    include('checkregister.php');
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  
    if (empty($username)) {
    array_push($errors, "Username is required");
    }
    if (empty($password)) {
    array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";


    $result=mysqli_query($db,$query);
    $row=mysqli_fetch_array($result);
    $active=$row['active'];
    $count=mysqli_num_rows($result);
    if($count==1) {
     $_SESSION['login_user']=$username;
   
   
      $_SESSION['success'] = "You are now logged in";
      header('location: success.php');
    }else {
    array_push($errors, "Wrong username or password ");
    }
    }
  }
  
  ?>