
<?php
  session_start();

?>
<head>
<title>Register </title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>

        
<?php include('../includes/navbar.php') ?>

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

    <?php
header( "refresh:3;url=../main.php" ); ?>
