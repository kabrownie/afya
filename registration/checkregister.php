<?php  

session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array();

    include('../includes/conn.php'); 
  

    if (isset($_POST['reg_user'])) {
 $fullname =  mysqli_real_escape_string($db,$_POST['fullname']);  
 $username =  mysqli_real_escape_string($db, $_POST['username']);  
  $email =  mysqli_real_escape_string($db,$_POST['email']);  
 $dob =  mysqli_real_escape_string($db,$_POST['dob']);  
 $county =  mysqli_real_escape_string($db,$_POST['county']);
 $gender =  mysqli_real_escape_string($db,$_POST['gender']);

 $password_1 =  mysqli_real_escape_string($db, $_POST['password_1']);  
 $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 


 $now =date("d-m-Y");
 $birth = new DateTime($dob);
  $now = new DateTime($now);
 $interval = $birth->diff($now);
 $myage = $interval ->y;
      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if (empty($fullname)) { array_push($errors, "Your name is required"); }
      if (empty($username)) { array_push($errors, "Username is required"); }
      if (empty($email)) { array_push($errors, "Email is required"); }
      if (empty($dob)) { array_push($errors, "Please enter your birth date"); }
 //check age
      else if($myage < 16 || $myage >65 ) { array_push($errors, " According to your date of birth , You are not eligible to donate. Sorry  "); }
      
      if (empty($county)) { array_push($errors, "Please enter your county"); }
      if (empty($gender)) { array_push($errors, "Please enter your gender"); }



      if (empty($password_1)) { array_push($errors, "Password is required"); }
      if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");}

     
    
      // first check the database to make sure
      // a user does not already exist with the same username and/or email
      $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
     
      if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }
    
        if ($user['email'] === $email) {
          array_push($errors, "email already exists");
        }
      }

      
      // Finally, register user if there are no errors in the form
       if (count($errors) == 0) {

$password = md5($password_1);//encrypt the password before saving in the database
$query ="INSERT INTO users (fullname, username, email, dob, county,gender, password )
 VALUES('$fullname','$username', '$email', '$dob', '$county','$gender','$password')";
   mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      
      $_SESSION['success'] = "You are now logged in";
header('location: success.php');}

       }


    
    // ...
?>