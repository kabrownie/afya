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

    <br>



    <?php
$sql = "SELECT * FROM booking";

$result = $db->query($sql);





      // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>


        <tr>
            <td ><?php echo $rows['username'];?></td>
            <td>  <?php echo $rows['fullname'];?></td>
            <td> <?php echo $rows['book_date'];?></td>
            <td> <?php echo $rows['book_time'];?></td>
            <td> <?php echo $rows['hospital'];?></td>
            <td> <?php echo $rows['county'];?></td>
            <td> <?php echo $rows['status'];?></td>
            <td>      
             
<!-- save variable to be used in another page -->
  

<button class="btn1"  ><a href="status_update.php?id=<?= $rows['random'];?>" >
            Update</a></a></button>

     </td>


            
           
        </tr>
<br>
<br>






     

            <?php


                }  
             ?> 
              </table>
</body>
</html>