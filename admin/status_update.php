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
$random = $_POST['random'];
$fullname = $_POST['fullname'];
$book_date = $_POST['book_date'];
$book_time = $_POST['book_time'];
$hospital = $_POST['hospital'];
$county= $_POST['county'];
$status= $_POST['status'];
$username = $_POST['username'];


echo 'This is Appointment number:  ';
echo $random ;
?><br><?php
 

?></h2>


<?php include('../includes/conn.php') ;
session_start();
$id="";



$id=$_SESSION['username'];
$query=mysqli_query($db,"SELECT * FROM booking where random='$id'");
$row=mysqli_fetch_array($query);
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

            <td ><?php echo $username?></td>
            <td>  <?php echo $fullname?></td>
            <td> <?php echo $book_date?>d</td>
            <td> <?php echo $book_time?></td>
            <td> <?php echo $hospital?></td>
            <td> <?php echo $county?></td>
            <td>
            <form method="post" action="#"> 
            <select name="update_status">
            <option  value='<?php echo $status;?>'><?php echo $status;?></option>
                            <option value='Missed'>Missed</option>
                            <option value='Cancelled'>Cancelled</option>
                            <option value='Attended'>Attended</option>
                            </select>
        </td>
   <input type="text" name="id" value=" <?php echo $random; ?>">

            <td>     
<button type="submit"  name="update" class="btn1"  >update</button>
</form>      </td>


            
           
        </tr>
<br>
<br>

    </table>


</body>
</html>


<?php
      if(isset($_POST['update'])){
        $update_status =  mysqli_real_escape_string($db, $_POST['update_status']);
      mysqli_real_escape_string($db, $_POST['id']);

       


 
      $query = "UPDATE booking SET status = '$update_status' WHERE random = '$id'";
                    $result = mysqli_query($db, $query)  or die(mysqli_error($db));
     ?>
                     <script type="text/javascript">
            alert(" status Update Successfull.");
            window.location = "update_status.php";
        </script>

        
        <?php
             }        
?>