<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Afya Blood Donation</title>
</head>
<body>   <?php include('../includes/navbarin.php')?>




<!----->
<!----->

<?php include('../includes/mininav.php') ?>

<?php include('../includes/conn.php') ?>



<?php
  session_start();
  $errors = array();


?>

    
<!----->


<div class="user">

<?php include('../includes/errors.php'); ?>

 


   <div class="book"> 
<h1>
    <p><img class="profile" src= "/image/drop.png" ></h1><h1> Afya Blood Donation</h1>

  
<h2 style='text-align:center' > <?php
$hospital = $_POST['varname'];
echo $hospital;



?></h2>

<h2 style='text-align:center' ><i> Blood donation apointment booking form </i> <br>
</h2>
<br>
        <?php
$id =  $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$id'";

$result = $db->query($sql);



      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>


<form method="post" action="book.php">
             
          <p>   <strong>Username : </strong><input  type="text" name="username" readonly="readonly" value="<?php echo $rows['username'];?>"/><br></p>
          
            <p> <strong>Donor's Official Name : </strong><input  type="text" name="fullname" readonly="readonly" value="<?php echo $rows['fullname'];?>"/><br></p>
        <p><strong>County:</strong><input  type="text" name="county" readonly="readonly" value=" <?php echo $rows['county'];?>"/></p>

        <p><strong>Hospital:</strong><input  type="text" name="hospital" readonly="readonly" value=" <?php echo $hospital?>"/></p>
        <p><strong>Your Contact Information<br>Email:</strong><input  type="text" name="email" readonly="readonly" value=" <?php echo $rows['email'];?>"/></p>


            <?php
                }
             ?>
             <br>

            <h3  style='text-align:center'>Choose a date and time for your appointment</h3>
           <p> <strong>appointment Date : </strong> <input type="date" required name="book_date"/>choose<br></p>
           <p> <strong>appointment Time : </strong> <input type="time" required name="book_time"/>choose</p><br>
           <input type="hidden" name ="status" value="Not donated"/>

            



<button type="submit" class="btn" name="book">Book</button>
             

</form>        

This information 
<hr><small><p>Afya Bloold donation &copy; <?php echo date('Y'); ?></p></small>



</div>
</div>
  
<h4 style='text-align:center'>Dont know the direction to the center? Dont worry, The map below will help </h4> 

<iframe src="https://www.google.com/maps/d/embed?mid=1euE8PzconXhsr0x9IgpnLgqruP9jSNg&ehbc=2E312F" width="100%" height="480"></iframe>
<?php include('../includes/footer.php') ?>
</body>
</html>
<!-- 
 php -->
<?php  

// session_start();
// // initializing variables
// $username = "";
// $email    = "";
// $errors = array();

//     include('../includes/conn.php'); 
  

//     if (isset($_POST['book'])) {
//  $fullname =  mysqli_real_escape_string($db,$_POST['fullname']);  
//  $username =  mysqli_real_escape_string($db, $_POST['username']);  
//   $email =  mysqli_real_escape_string($db,$_POST['email']);  
//  $hospital =  mysqli_real_escape_string($db,$_POST['hospital']);  
//  $county =  mysqli_real_escape_string($db,$_POST['county']);
//  $book_date =  mysqli_real_escape_string($db,$_POST['book_date']);

//  $book_time =  mysqli_real_escape_string($db, $_POST['book_time']);  
//  $status = mysqli_real_escape_string($db, $_POST['status']); 



//  $query ="INSERT INTO booking (fullname, username, email, hospital, county, book_date, book_time, status )
//  VALUES('$fullname','$username', '$email', '$hospital', '$county','$book_date','$book_time','$status')";
//    mysqli_query($db, $query)  or die(mysqli_error($db));
//       $_SESSION['username'] = $username;
      
//       $_SESSION['success'] = "appointment booked succesfully";
// header('location: success.php');}

    
?>