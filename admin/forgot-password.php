<?php
session_start();
error_reporting(0);
include('includes/connection.php');

if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select u_id from user where  u_email='$email' and u_phone='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
  }
  ?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
  <?php include 'includes/header.php'; ?>
<div class="log-w3">
<div class="w3layouts-main">
	<h2 class="text-warning p-4" style="text-align: center;font-size: 30px">Forgot Password</h2>
		<form action="#" method="post" name="submit">
			<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <div class="row">
      <div class="col col-md-3">
      <label for=""><h4> Enter Valid Email :</h4></label>
      </div>
       <div class="col col-md-9">     
			<input class=""  type="email" class="ggg" name="email" placeholder="Email" required="true">
      </div>
  </div>
  <div class="row mt-4">
     <div class="col col col-md-3">
     <label for=""><h4> Enter Phone Number : </h4></label>
     </div>
     <div class="col col-md-9">
       <input class=""  type="text" name="contactno" required="" placeholder="Mobile Number">
     </div>
  </div>		
			
				<div class="clearfix mt-4"></div>
				<input type="submit" class="btn btn-primary" value="Reset" name="submit">
		</form>
		<!-- <p><a href="index.php">Sign In</a></p> -->
</div>
</div>
  </div>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
