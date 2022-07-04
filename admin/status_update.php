<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../styles.css">

    <title>update status</title>
</head>
<body>
    holohjbkhfdsikjbcxz
<br>


?></h2>


<?php include('../includes/conn.php') ;
session_start();
$id="";





if(!isset($_GET['id']))
die('no info');
else{
   $random = $_GET['id'];
   echo $random;
} 
?>
<br>
<?php
if(!isset($_GET['u_id']))
die('no info');
else{
   $username = $_GET['u_id'];
   echo $username;
}   ?>


<h3>
         Donor Centers
     </h3>
<h4>     Update the status for the following Appointment number: <?php echo $random;?></h4>




<?php
$sql = "SELECT * FROM booking WHERE random ='$random'";

$result = $db->query($sql);





      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>





          <table>
        <tr>
            <th>Appointments id</th>  <!--random-->
        <th>Username</th>
        <th>Full Names</th>
        <th>Date </th>
        <th>Time </th>
        <th>Hospital </th>
        <th>County </th>
        <th>Status </th>
        <th>Update</th>
        
        </tr>

        <tr>
        <td ><?php echo $random?></td>

        <td ><?php echo $username;?></td>
            <td>  <?php echo $rows['fullname'];?></td>
            <td> <?php echo $rows['book_date'];?></td>
            <td> <?php echo $rows['book_time'];?></td>
            <td> <?php echo $rows['hospital'];?></td>
            <td> <?php echo $rows['county'];?></td>
            <td>
            <form method="post" action="#"> 
            <select name="update_status">
            <option  value='<?php echo $rows['status'];?>'><?php echo $rows['status'];?></option>
                            <option value='Missed'>Missed</option>
                            <option value='Cancelled'>Cancelled</option>
                            <option value='Attended'>Attended</option>
                            </select>
        </td>
   
<input type="hidden" name="id" value="<?php echo $random?>"/>
            <td>     
<button type="submit"  name="update" class="btn1"  >update</button>
</form>      </td>


           
        </tr>
<br>
<br>

    </table>

     

    <?php


}
?>

<?php
$query=mysqli_query($db,"SELECT * FROM users where username='$username'");
$row=mysqli_fetch_array($query);
  ?>

<div class="content" style="float:left; margin-left:10% ">

  <h2>  Update donor's profile details </h2>
<?php include('includes/errors.php') ?>
  


<div class="profile-input-field">
        
        <form method="post" action="#" >
          <div class="input-group">
            <label>weight</label>
            <input type="text" placeholder="weight " name="fullname"required  value="<?php echo $row['weight']; ?>" />
          </div>

          <div class="input-group">
            <label>height</label>
            <input type="text" placeholder="height"  name="email" required value="<?php echo $row['height']; ?>" />

            <label>Blood type</label>
<select name="county" required placeholder="blood type" class="county">  
<option value="<?php echo $row['bloodtype']; ?>"><?php echo $row['bloodtype']; ?></option>
  <option value="A-positive (A+)"> A-positive (A+)</option>
  <option value="A-negative (A-)"> A-negative (A-)</option>
  <option value="B-positive(B+)">B-positive (B+)</option>
  <option value="B-negative (B-)"> A-negative (B-)</option>
  <option value="AB-positive (AB+)">AB-positive</option>
  <option value="AB-negative (A-)"> A-negative (AB-)</option>
  <option value="O-positive">O-positive</option>
  <option value="O-negative (O-)"> O-negative (O-)</option>




</select>
          </div>
          
<div class="input-group">
<button type="submit" class="btn" name="update_bt">Update profile</button>
</div>

</div>
         
          </div>
        </form>
      </div>
</body>
</html>


<?php
      if(isset($_POST['update'])){

        $update_status =  mysqli_real_escape_string($db, $_POST['update_status']);
     

      $query = "UPDATE booking SET status = '$update_status' WHERE random='$random'";
                    $result = mysqli_query($db, $query)  or die(mysqli_error($db));
     ?>
                     <script type="text/javascript">
            alert(" status Update Successfull.");
            window.location = "#";
        </script>

        
        <?php    
            }
?>


<?php
      if(isset($_POST['update_bt'])){
        $weight =  mysqli_real_escape_string($db, $_POST['weight']);
        $height =  mysqli_real_escape_string($db, $_POST['height']);
        $bloodtype =  mysqli_real_escape_string($db, $_POST['bloodtype']);



 
      $query = "UPDATE users SET weight = '$weight', height = '$height', bloodtype= '$bloodtype'
                      WHERE username = '$username'";
                    $result = mysqli_query($db, $query)  or die(mysqli_error($db));
     ?>
                     <script type="text/javascript">
            alert(" Profile Update Successfull.");
            window.location = "update_status.php";
        </script>

        
        <?php
             }        
?>