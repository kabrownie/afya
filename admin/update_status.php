<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../styles.css">

    
    <title>update</title>
</head>
<body>


<?php include('../includes/conn.php') ?>


<?php
  session_start();


?>



    hey

    <br>



    <?php
$sql = "SELECT * FROM booking";

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
            <td> <?php echo $rows['book_date'];?></td>
            <td> <?php echo $rows['book_time'];?></td>
            <td> <?php echo $rows['hospital'];?></td>
            <td> <?php echo $rows['county'];?></td>
            <td> <?php echo $rows['status'];?></td>
            <td>      
                <form method="post" action="status_update.php">
<!-- save variable to be used in another page -->
   <input type="hidden" name="random" value=" <?php echo $rows['random']; ?>">
   <input type="hidden" name="username" value=" <?php echo $rows['username']; ?>">
   <input type="hidden" name="fullname" value=" <?php echo $rows['fullname']; ?>">
   <input type="hidden" name="book_date" value=" <?php echo $rows['book_date']; ?>">
   <input type="hidden" name="book_time" value=" <?php echo $rows['book_time']; ?>">
   <input type="hidden" name="hospital" value=" <?php echo $rows['hospital']; ?>">
   <input type="hidden" name="county" value=" <?php echo $rows['county']; ?>">
   <input type="hidden" name="status" value=" <?php echo $rows['status']; ?>">



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