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
    
  
<h2 style='text-align:center' > <?php
$username = $_POST['varname'];
echo $username ;
?><br><?php
 

?></h2>

<?php include('../includes/conn.php') ?>


<?php
  session_start();


?>



    hey

    <br>



    <?php

$sql = "SELECT * FROM booking  ";

$result = $db->query($sql);





      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>

          <table>
        <tr>
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
            <td ><?php echo $rows['username'];?></td>
            <td>  <?php echo $rows['fullname'];?></td>
            <td> <?php echo $rows['book_date'];?>d</td>
            <td> <?php echo $rows['book_time'];?></td>
            <td> <?php echo $rows['hospital'];?></td>
            <td> <?php echo $rows['county'];?></td>
            <td> <?php echo $rows['status'];?></td>
            <td>      <form method="post" action="status_update.php">
<!-- save variable to be used in another page -->
   <input type="hidden" name="varname" value=" <?php echo $rows['username']; ?>"><p> <strong>
<button type="submit" class="btn1"  >update</button>
</form>      </td>


            
           
        </tr>
<br>
<br>

    </table>




     

            <?php


                }
             ?>

</body>
</html>