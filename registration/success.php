
<?php
  session_start();

?>
<head>
<title>Register </title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>

        


<!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      <h3>
          <?php
          echo $_SESSION['success'];
      
        
          unset($_SESSION['success']);
          


          ?>
      </h3>
      </div>
  <?php endif ?>
  <?php include('../main.php') ?>
    <?php
header( "refresh:2;url=../main.php" ); ?>
