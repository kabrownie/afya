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

        <td ><?php echo $rows['username'];?></td>
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
            window.location = "update_status.php";
        </script>

        
        <?php    
            }
?>