<?php

$errors = array();

    if (isset($_POST['pre_signup'])) {
 $age =  $_POST['age'];  
 $kg =  $_POST['kg'];  
 $ever =  $_POST['ever'];  
 $health =  $_POST['health'];  



      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if (empty($age && $kg && $ever && $health)) {
           array_push($errors, "please answer all before submiting "); 
        }

       else if ($age =="no" || $kg=="yes" || $health=="yes"){
        array_push($errors, "Thank you. Based on the answers you have provided, <br>we do not recommed you to register as a blood donor.  <br>  <a  href='../index.php'>Home page</a> "); 
      }
      
      else{ 
      $_SESSION['success'] = "You can now Create an account";
      header('location: register.php');
      }
    }
      ?>