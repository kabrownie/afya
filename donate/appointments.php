<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>My appointment | Afya Blood Donation</title>
</head>
<body>
<!-- na  <?php include('../includes/navbarin.php')?>


<?php include('../includes/mininav.php') ?>




<!----->
<?php
  session_start();
   include('../includes/conn.php') ?>



<br>




<?php include('../includes/conn.php') ;
session_start();
$id =  $_SESSION['username'];


?>


<div class="book">
<h1 >My Appointments</h1>
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
      
        
        </tr>


<?php
$sql = "SELECT * FROM booking WHERE username ='$id'";

$result = $db->query($sql);





      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>





        <tr>
        <td ><?php  echo $rows['random']; ?></td>

        <td ><?php echo $rows['username'];?></td>
            <td>  <?php echo $rows['fullname'];?></td>
            <td> <?php echo $rows['book_date'];?></td>
            <td> <?php echo $rows['book_time'];?></td>
            <td> <?php echo $rows['hospital'];?></td>
            <td> <?php echo $rows['county'];?></td>
            <td><?php echo $rows['status'];?>
              </td>


           
        </tr>
<br>
<br>

 

     

    <?php


}
?>
   </table></div>
  
<?php include('../includes/footer.php') ?>
</body>
</html>