
<!-- Source code for handling registration and login -->

<!-- Source code for handling registration and login -->
<?php  include('check_pre_reg.php'); ?>

<head>
<title>Register | Afya bood donation system</title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>

<?php include('../includes/navbar.php') ?>

<div class="presignup">
 
<h1>Get started</h1>


<?php include('../includes/errors.php') ?>
<hr>
Before you register as a blood donor<br>
Please answer all of the following five questions so that we can advise if blood donation is appropriate for you.<br>
The current responses are not recorded.<br>
These questions only apply if you want to register as a new account. If you are already registered please <a href="login.php">log in</a>


<form method="post" action="presignup.php">
<p>1. Are you between 16 - 65 years old? <br>
    <input type="radio" name="age"value="yes"  >yes</radio>
    <input type="radio" name="age"value="no" >No</radio><br>
    Find more about <a href="#">why your age is important </a>
    
</p>


<p>2. Do you currently weigh less than 50kg? <br>
    <input type="radio" name="kg"value="yes"  >yes</radio>
    <input type="radio" name="kg"value="no" >No</radio><br>
    Find more about <a href="#">why your weight is important </a>
</p>
<p>3. Have you ever donated blood before ? <br>
    <input type="radio" name="ever"value="yes"  >yes</radio>
    <input type="radio" name="ever"value="no" >No</radio>

</p>

<p>4. Have you ever had a cancer or other than basal cell carcinoma?<br>
    <input type="radio" name="health"value="yes"  >yes</radio>
    <input type="radio" name="health"value="no" >No</radio>


</p>
<hr>

<button type="submit" class="btn" name="pre_signup">Submit </button>
</div>
</form>



</div>

<?php include('../includes/footer.php') ?>
</body>